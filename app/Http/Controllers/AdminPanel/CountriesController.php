<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use App\Models\Country;
use DB;
use App\Http\Controllers\Controller;

class CountriesController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $countries = Country::where('is_delete',0)->paginate(10);
    return view('AdminPanel.countries.index')->with('countries', $countries);
  }

  
  public function create()
  {
    return view('AdminPanel.countries.create');
  }


  public function store(Request $request)
  {
    $this->validate($request,[
        'country_name_en' => 'required|string|max:255',
        'country_name_ar' => 'required|string|max:255',
        'country_flag' => 'required',
        'country_code' => 'required|string|max:255',
    ]);

    $country = Country::create([
      'country_name_en'=>$request->country_name_en,
      'country_name_ar'=>$request->country_name_ar,
      'country_flag'=>$request->country_flag,
      'country_code'=>$request->country_code,
    ]);
    

    session()->flash('success', 'تم اضافة الدولة  بنجاح');
    return redirect()->route('admin.countries.index');
  }

  public function edit($id)
  {
    $country = Country::find($id);
    if(is_null($country)) {
      session()->flash('error', 'الدولة غير موجودة');
      return redirect()->back();
    }
    
    return view('AdminPanel.countries.edit')->with('country', $country);
  }

  public function update(Request $request, $id)
  {
    
    $country = Country::find($id);
    if (is_null($country)) {
      session()->flash('error', 'الدولة غير موجودة');
      return redirect()->back();
    }
      
    $this->validate($request,[
      'country_name_en' => 'required|string|max:255',
      'country_name_ar' => 'required|string|max:255',
      'country_flag' => 'nullable',
      'country_code' => 'required|string|max:255',
  ]);

    //dd($request->permissions);


      $country->country_name_en = $request->country_name_en;
      $country->country_name_ar = $request->country_name_ar;
      if(!is_null($request->country_flag)){
        $country->country_flag = $request->country_flag;
      }
      $country->country_code = $request->country_code;
      $country->save();

    session()->flash('success', 'تم تعديل بيانات الدولة  بنجاح');
    return redirect()->route('admin.countries.index');
  }

  public function destroy($id)
  {

      
    $country = Country::find($id);
    if (is_null($country)) {
      session()->flash('error', 'الدولة غير موجودة');
      return redirect()->back();
    }

    $country->is_delete = 1;
    $country->save();
    session()->flash('success', 'تم حذف الدولة بنجاح');
    return redirect()->back();
  }

    
  public function change_status($id)
  {
    $country = Country::find($id);
    if (is_null($country)  || $country->is_delete == 1) {
      session()->flash('error', 'الدولة غير موجود');
      return redirect()->back();
    }
    if($country->status == 'active'){
      $country->status ='inactive';
    }else{
      $country->status ='active';
    }
    $country->save();
    session()->flash('success', 'تم تغيير حالة الدولة بنجاح');
    return redirect()->back();
  }
}
