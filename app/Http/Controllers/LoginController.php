<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function index()
    { 
       $Users=User::all();
        return view('login',compact('Users'));

    }
    function check(request $request){
      
         $user_ID =$request->Employee_ID;
         $check_user = DB::table('users')->where('employee_ID', $user_ID)->first();
         //เช็ตว่ามีuserในdatabase ไม
          if ($check_user) {  
            $user_PW =$request->password;
            $check_PW = DB::table('users')->where('password', $user_PW )->first();
                //เช็คว่ารหัสผ่านตรงไม
                 if ($check_PW) {

               //เช็คว่าใคร  0=admin,1=header,2=user
                    $check_who = DB::table('users')->where('employee_ID', $user_ID)->value('WhoIs');


                        if ( $check_who=='0')
                            return view('homeForAdmin');
                        else if ($check_who=='1')
                            return view('homeForHeader');
                        else if  ($check_who=='2')
                            return view('homeForUser');
                    
                 } else {
                     return view('worng');
                 }  

          } else {
                
                return view('worng');
          }

        // $subjects=subject::all();
        // return view("Home",compact('subjects'));
      
    }

}
