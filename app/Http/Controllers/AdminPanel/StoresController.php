<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use App\Models\Store;
use App\Models\Country;
use App\Models\StorePackage;
use DB;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\User;

class StoresController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $stores = Store::where('is_delete', 0)->paginate(10);
        return view('AdminPanel.stores.index')->with('stores', $stores);
    }


    public function create()
    {
        $admins = User::where('is_delete', 0)->where('user_type', 'store_admin')->where('active', 1)->orderBy('created_at', 'desc')->get();
        $countries = Country::where('status', 'active')->where('is_delete', 0)->get();
        $packages = StorePackage::where('package_status', 'active')->where('is_delete', 0)->get();
        return view('AdminPanel.stores.create')->with('countries', $countries)->with('packages', $packages)
            ->with('admins', $admins);
    }

    public function getCity(Request $request)
    {
        $data['states'] = City::where('status', 'active')->where("country_id", $request->country_id)
            ->get(["city_name_ar", "id"]);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'store_name_ar' => 'required|string|max:255',
            'store_name_en' => 'required|string|max:255',
            'store_domain' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'store_admin' => 'required|numeric|exists:users,id',
            'store_country' => 'required|numeric|exists:countries,id',
            'store_city' => 'required|numeric|exists:cities,id',
            'subscription_package_id' => 'required|numeric|exists:store_packages,id',
            'subscription_start_date' => 'required|date',
            'store_status' => 'nullable|in:on,off',
        ]);
        if ($request->store_status == 'on') {
            $store_status = 'active';
        } else {
            $store_status = 'inactive';
        }

        $store = Store::create([
            'store_name_ar' => $request->store_name_ar,
            'store_name_en' => $request->store_name_en,
            'store_domain' => $request->store_domain,
            'phone_number' => $request->phone_number,
            'store_admin' => $request->store_admin,
            'store_country' => $request->store_country,
            'store_city' => $request->store_city,
            'subscription_start_date' => $request->subscription_start_date,
            'subscription_end_date' => $request->subscription_start_date,
            'subscription_package_id' => $request->subscription_package_id,
            'store_status' => $store_status,
            'is_trail' => '0',
            'is_delete' => 0,
        ]);


        session()->flash('success', 'تم اضافة المتجرات  بنجاح');
        return redirect()->route('admin.stores.index');
    }

    public function edit($id)
    {
        $store = Store::find($id);
        if (is_null($store) || $store->is_delete == 1) {
            session()->flash('error', 'المتجر غير موجودة');
            return redirect()->back();
        }
        $countries = Country::where('status', 'active')->where('is_delete', 0)->get();
        $packages = StorePackage::where('package_status', 'active')->where('is_delete', 0)->get();
        $admins = User::where('is_delete', 0)->where('user_type', 'store_admin')->where('active', 1)->orderBy('created_at', 'desc')->get();

        return view('AdminPanel.stores.edit')->with('store', $store)
            ->with('countries', $countries)->with('packages', $packages)->with('admins', $admins);
    }

    public function update(Request $request, $id)
    {

        $store = Store::find($id);
        if (is_null($store)  || $store->is_delete == 1) {
            session()->flash('error', 'المتجر غير موجودة');
            return redirect()->back();
        }

        $this->validate($request, [
            'store_name_ar' => 'required|string|max:255',
            'store_name_en' => 'required|string|max:255',
            'store_domain' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'store_admin' => 'required|numeric|exists:users,id',
            'store_country' => 'required|numeric|exists:countries,id',
            'store_city' => 'required|numeric|exists:cities,id',
            'subscription_package_id' => 'required|numeric|exists:store_packages,id',
            'subscription_start_date' => 'required|date',
            'store_status' => 'nullable|in:on,off',
        ]);


        if ($request->store_status == 'on') {
            $store_status = 'active';
        } else {
            $store_status = 'inactive';
        }

        $store->update([
            'store_name_ar' => $request->store_name_ar,
            'store_name_en' => $request->store_name_en,
            'store_domain' => $request->store_domain,
            'phone_number' => $request->phone_number,
            'store_admin' => $request->store_admin,
            'store_country' => $request->store_country,
            'store_city' => $request->store_city,
            'subscription_start_date' => $request->subscription_start_date,
            'subscription_end_date' => $request->subscription_start_date,
            'subscription_package_id' => $request->subscription_package_id,
            'store_status' => $store_status,
        ]);

        session()->flash('success', 'تم تعديل بيانات المتجر  بنجاح');
        return redirect()->route('admin.stores.index');
    }

    public function destroy($id)
    {
        $store = Store::find($id);
        if (is_null($store)  || $store->is_delete == 1) {
            session()->flash('error', 'المتجر غير موجودة');
            return redirect()->back();
        }

        $store->is_delete = 1;
        $store->save();
        session()->flash('success', 'تم حذف المتجر بنجاح');
        return redirect()->back();
    }


    public function change_status($id)
    {
        $store = Store::find($id);
        if (is_null($store)  || $store->is_delete == 1) {
            session()->flash('error', 'المتجر غير موجود');
            return redirect()->back();
        }
        if ($store->store_status == 'active') {
            $store->store_status = 'inactive';
        } else {
            $store->store_status = 'active';
        }
        $store->save();
        session()->flash('success', 'تم تغيير حالة المتجر بنجاح');
        return redirect()->back();
    }
}
