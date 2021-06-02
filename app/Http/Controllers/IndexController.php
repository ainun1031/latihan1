<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function tampilkan_formlogin()
	{
		if(auth::check())
		{
		   if(auth()->user()->hakakses == 'admin')
		   {
			   return redirect('/admin/list');
		   }
		   if(auth()->user()->hakakses == 'nonadmin')
		   {
   			   return redirect('/nonadmin/list');
		   }
		}		
		return view('login');
	}
    public function tampilkan_formregistrasi()
	{
		if(auth::check())
		{
		   if(auth()->user()->hakakses == 'admin')
		   {
			   return redirect('/admin/list');
		   }
		   if(auth()->user()->hakakses == 'nonadmin')
		   {
   			   return redirect('/nonadmin/list');
		   }
		}		
		return view('registrasi');
	}
    public function do_login(Request $req)
	{
		$vusername = $req->post_username;
		$vpassword = $req->post_password;
        if(auth()->attempt(array('username' => $vusername, 'password' => $vpassword)))
        {
            Session::put('LAST_ACTIVITY',time());
            if (auth()->user()->hakakses == 'admin') 
            {
			   $responseText = "admin.tampilkan_list";
            }
            if (auth()->user()->hakakses == 'nonadmin') 
            {
			   $responseText = "nonadmin.tampilkan_list";
            }
        }
        else
        {
			$responseText = "login.gagal";
        }
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}
	
    public function do_registrasi(Request $req)
	{
		$vusername = $req->post_username;
		$vpassword = bcrypt($req->post_password);  //pakai bcrypt karena pada saat login pakai fungsi attempt bawaan Laravel
		$vhakakses = $req->post_hakakses;
        $rs = DB::connection('mysql')->table('users')
                                     ->insert([
                                               'username' => $vusername,
                                               'password' => $vpassword,
                                               'hakakses' => $vhakakses,
                                     ]);
		if($rs)
		{
			$responseText = "registrasi.berhasil";
		}
		else
		{
			$responseText = "registrasi.gagal";
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}
	
	
    public function do_logout(Request $req)
	{
        Auth::logout();
        Session::forget('LAST_ACTIVITY');
        return redirect('/login');
	}

}