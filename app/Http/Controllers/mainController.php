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
        $cdata = DB::table('personaldata')
                ->where('userid', $id)
                ->count();

        return view('main', 
                ['data' => $data,
                 'pdata' => $pdata,
                 'cdata' => $cdata
                ]);
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
        $cdata = DB::table('personaldata')
        ->where('userid', $id)
        ->count();
        $spouse = DB::table('spouse')
                ->where('userid', $id)
                ->get();
        $cspouse = DB::table('spouse')
                ->where('userid', $id)
                ->count();
        $child = DB::table('children')
                ->where('userid', $id)
                ->get();
        $cchild = DB::table('children')
                ->where('userid', $id)
                ->count();
        $other = DB::table('other')
                ->where('userid', $id)
                ->get();
        $cother = DB::table('other')
                ->where('userid', $id)
                ->count();
        $optional = DB::table('optional')
                ->where('userid', $id)
                ->get();
        $coptional = DB::table('optional')
                ->where('userid', $id)
                ->count();

        return view('profile',
                    ['data' => $data,
                     'pdata' => $pdata,
                     'cdata' => $cdata,
                     'spouse' => $spouse,
                     'cspouse' => $cspouse,
                     'child' => $child,
                     'cchild' => $cchild,
                     'other' => $other,
                     'cother' => $cother,
                     'option' => $optional,
                     'coption' => $coptional
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

    // edit methods
    public function editpdata(){
      $email = Session::get('email');
      $data = User::where('email', $email)->get();
      foreach($data as $res){
        $id = $res->userid;
        $pdata = DB::table('personaldata')
                ->where('userid', $id)
                ->get();
        $cdata = DB::table('personaldata')
                ->where('userid', $id)
                ->count();
                
        return view('e_sform', 
                ['data' => $data,
                 'pdata' => $pdata
                ]);
       
      }
      
    }
    public function editbenefit(){
      $email = Session::get('email');
      $data = User::where('email', $email)->get();
      foreach($data as $res){
        $id = $res->userid;
        $spouse = DB::table('spouse')
                ->where('userid', $id)
                ->get();
        $children = DB::table('children')
                ->where('userid', $id)
                ->get();
        $cchild = DB::table('children')
                ->where('userid', $id)
                ->count();
        $other = DB::table('other')
                ->where('userid', $id)
                ->get();
                
        return view('e_sform1', 
                ['data' => $data,
                 'spouse' => $spouse,
                 'children' => $children,
                 'cchild' => $cchild,
                 'other' => $other
                ]);
       
      }
      
    }
    public function editdesignation(){
      $email = Session::get('email');
      $data = User::where('email', $email)->get();
      foreach($data as $res){
        $id = $res->userid;
        $option = DB::table('optional')
                ->where('USERID', $id)
                ->get();
                
        return view('e_sform2', 
                ['data' => $data,
                 'option' => $option
                ]);
       
      }
      
    }


}
