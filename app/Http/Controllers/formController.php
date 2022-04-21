<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class formController extends Controller
{
    public function getForm(){
        return view('form');
    }
    public function getData(Request $request){
        $name=$request->name;
        $age=$request->age;
        $country=$request->country;
        $data=['name'=>'$name','age'=>'$age','country'=>'$country'];
        return view('data',$data);
    }
}
