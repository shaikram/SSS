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

class userController extends Controller
{
    public function editbenefit(Request $request){
        // Spouse Update
        $spid = $request->input('spid');
        $sfname = $request->input('sfname');
        $smname = $request->input('smname');
        $slname = $request->input('slname');
        $sbdate = $request->input('sbdate');

        $cChild = $request->input('cchild');

        $setSpouse = DB::table('spouse')
            ->where('spid', $spid)
            ->update([
                'fname' => $sfname,
                'mname' => $smname,
                'lname' => $slname,
                'bdate' => $sbdate
            ]);
        //Child Update 
        for($a = 1; $a <= $cChild; $a++){
            $chid = $request->input('chid'.$a);
            $cfname = $request->input('cfname'.$a);
            $cmname = $request->input('cmname'.$a);
            $clname = $request->input('clname'.$a);
            $cbdate = $request->input('cbdate'.$a);

            $setChild = DB::table('children')
                ->where('chid', $chid)
                ->update([
                    'fname' => $cfname,
                    'mname' => $cmname,
                    'lname' => $clname,
                    'bdate' => $cbdate
                ]);

        }
        
        if($setSpouse || $setChild){
            echo "Success";
           
        }else{
            echo "Something is wrong";
        }
    }
    public function editpdata(Request $request){
        $pdid = $request->input('pdid');
        $userid = $request->input('userid');
        $firstname = $request->input('firstname');
        $midname = $request->input('midname');
        $lastname = $request->input('lastname');
        $birthdate = $request->input('birthdate');
        $gender = $request->input('gender');
        $civilstat = $request->input('civilstat');
        $taxid = $request->input('taxid');
        $nationality = $request->input('nationality');
        $religion = $request->input('religion');
        $city = $request->input('city');
        $province = $request->input('province');
        $mobileno = $request->input('mobileno');
        $telno = $request->input('telno');
        $ffname = $request->input('ffname');
        $fmname = $request->input('fmname');
        $flname = $request->input('flname');
        $mfname = $request->input('mfname');
        $mmname = $request->input('mmname');
        $mlname = $request->input('mlname');

        $pdData = DB::table('personaldata')
          ->where('PDID', $pdid)
          ->update([
              'FIRSTNAME' => $firstname,
              'MIDNAME' => $midname,
              'LASTNAME' => $lastname,
              'BIRTHDATE' => $birthdate,
              'GENDER' => $gender,
              'CIVILSTATUS' => $civilstat,
              'TAXIDENTITY' => $taxid,
              'NATIONALITY' => $nationality,
              'RELIGION' => $religion,
              'CITY' => $city,
              'PROVINCE' => $province,
              'MOBILENO' => $mobileno,
              'TELNO' => $telno,
              'FTFIRSTNAME' => $ffname,
              'FTMIDNAME' => $fmname,
              'FTLASTNAME' => $flname,
              'MTFIRSTNAME' => $mfname,
              'MTMIDNAME' => $mmname,
              'MTLASTNAME' => $mlname
            ]);
        $setUsername = DB::table('users')
            ->where('userid', $userid)
            ->update(['username' => $firstname." ".$lastname]);

        if($pdData){
               return redirect('profile')->with('success', "Personal Data Updated Successfully");
          }else{
               return back()->with('error', "There's something wrong!");
          }
    }

    

    
}
