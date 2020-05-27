<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm(){
        return view('register');
    }

public function processRegister(Request $request){
//validation
$this->validate($request,[
    'name'=>'required|min:5',
    'email'=>'required|email|unique:users,email',
    'password'=>'required|min:6',
]);
//indert data
$data=[
    'name' => $request->input('name'),
    'email' => strtolower($request->input('email')),
    'password' => bcrypt($request->input('password')),
];

//redirect
try{
    User::create($data);
    session()->flash('message','user account created');
    session()->flash('type','success');
return redirect()->route('login');

}catch(Exception $e){
    session()->flash('message',$e-> getMessage());
    session()->flash('type','danger');
    return redirect()->back();
}


}



public function showLoginForm(){
    return view('login');
}







}
