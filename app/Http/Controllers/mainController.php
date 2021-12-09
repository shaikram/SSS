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

class mainController extends Controller
{
    public function index(){
      return view('index');
    }
    public function login(){
      return view('login');
    }
    public function register(){
      return view('register');
    }
    public function main(){
      $email = Session::get('email');
      $data = User::where('email', $email)->get();
      foreach($data as $res){
        $id = $res->userid;
        $pdata = DB::table('personaldata')
                ->where('userid', $id)
                ->get();

        return view('main', ['data' => $data, 'pdata' => $pdata]);
      }
     
    }
    public function profile(){
      $email = Session::get('email');
      $data = User::where('email', $email)->get();
      foreach($data as $res){
        $id = $res->userid;
        $pdata = DB::table('personaldata')
                ->where('userid', $id)
                ->get();
        $spouse = DB::table('spouse')
                ->where('userid', $id)
                ->get();
        $child = DB::table('children')
                ->where('userid', $id)
                ->get();
        $other = DB::table('other')
                ->where('userid', $id)
                ->get();
        $optional = DB::table('optional')
                ->where('userid', $id)
                ->get();

        return view('profile',
                    ['data' => $data,
                     'pdata' => $pdata,
                     'spouse' => $spouse,
                     'child' => $child,
                     'other' => $other,
                     'option' => $optional
                    ]);
      }
      
    }
    public function pdata(){
      $email = Session::get('email');
      $data = User::where('email', $email)->get();
      return view('sform', ['data' => $data]);
    }
    public function benefit(){
      $email = Session::get('email');
      $data = User::where('email', $email)->get();
      return view('sform1', ['data' => $data]);
    }
    public function designation(){
      $email = Session::get('email');
      $data = User::where('email', $email)->get();
      return view('sform2', ['data' => $data]);
    }


}
