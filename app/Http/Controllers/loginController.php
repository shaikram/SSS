<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;//for hash or encryption
use Illuminate\Contracts\Auth\Authenticatable;
use App\Extensions\MongoSessionHandler;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use DB;

class loginController extends Controller
{
    public function checkLogin(Request $request){
        $this->validate($request, [
          'email' => 'required|email',
          'password' => 'required|alphaNum|min:3'
        ]);
        // $data = $request->input();
        $userData = array(
          'email' => $request->get('email'),
          'password' => $request->get('password')
        );
  
        if(Auth::attempt($userData)){
          $request->session()->put('email', $userData['email']);
  
          $checkStatus = DB::table('users')
                            ->where('email', $userData['email'])
                            ->get();
          foreach ($checkStatus as $res) {
            $status = $res->email;
              if($status >= 1){
                return redirect('main');
              }else{
                return back()->with('error', 'Your account is currently deactivated!');
              }
          }
          // return Redirect::route('admin')->with(['email' => $userData['email']]);
          // echo "login success";
        }else{
          return back()->with('error', 'Wrong login details!');
        }
      }
      public function logout(Request $request){
        Auth::logout();
        Session::flush();
        $request->session()->forget('email');
        return redirect('/');
      }
}
