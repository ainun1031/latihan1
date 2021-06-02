<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use PDF;


class AdminController extends Controller
{
    public function view_home()
	{
		//main function
        return view('/admin/home');
	}
		
    public function view_inputujian()
	{
		//main function
        return view('/admin/inputujian');
	}
	
    public function view_listujian()
	{
		//main function
        return view('/admin/listujian');
	}
    public function view_listsoal()
	{
		//main function
        return view('/admin/listsoal');
	}
    public function view_inputsoalmultiplechoice()
	{
		//main function
        return view('/admin/inputsoalmultiplechoice');
	}
    public function view_inputuser()
	{
		//main function
        return view('/admin/inputuser');
	}
    public function view_updateuser()
	{
		//main function
        return view('/admin/updateuser');
	}
    public function view_listuser()
	{
		//main function
        return view('/admin/listuser');
	}
    public function view_updatesoalmultiplechoice()
	{
		//main function
        return view('/admin/updatesoalmultiplechoice');
	}
    public function view_updatesettingtheme()
	{
		//main function
        return view('/admin/updatesettingtheme');
	}
    public function view_updateujian()
	{
		//main function
        return view('/admin/updateujian');
	}
    public function view_listpesertaujian()
	{
		//main function
        return view('/admin/listpesertaujian');
	}
    public function view_updategradingpesertaujian()
	{
		//main function
        return view('/admin/updategradingpesertaujian');
	}
    public function view_inputkonfigurasipenyajianujian()
	{
		//main function
        return view('/admin/inputkonfigurasipenyajianujian');
	}
	
	public function do_inputuser(Request $request)
	{
	   $v_username = $request->textbox_username;
	   $v_password = $request->textbox_password;
	   $v_namalengkap = $request->textbox_namalengkap;
	   $v_email = $request->textbox_email;
	   $v_hp = $request->textbox_hp;
	   $v_urlfacebook = $request->textbox_urlprofilefacebook;
	   $v_urlinstagram = $request->textbox_urlprofileinstagram;
	   $v_urltwitter = $request->textbox_urlprofiletwitter;
	   $v_urlyoutube = $request->textbox_urlprofileyoutube;
       $v_file = $request->file('file_avatar');
	   $v_tempattinggal = $request->textbox_tempattinggal;
	   $v_hakakses = $request->combobox_hakakses;
       $v_namafile = "";
	   $responseText = "";
	   if($request->hasFile('file_avatar')) 
	   {
           $v_namafile = $v_file->getClientOriginalName().'.'.$v_file->getClientOriginalExtension();
           $v_file->move(public_path().'/folder_image/', $v_namafile);
	   }
       $rs = DB::connection('mysql')->table('users')
                                    ->insert([
                                               'username' => $v_username,
											   'password' => $v_password,
											   'nama_lengkap' => $v_namalengkap,
											   'email' => $v_email,
											   'socialite_id' => "",
											   'socialite_name' => "",
											   'photo' => $v_namafile,
											   'remember_token' => "",
											   'hp' => $v_hp,
											   'url_facebook' => $v_urlfacebook,
											   'url_instagram' => $v_urlinstagram,
											   'url_twitter' => $v_urltwitter,
											   'url_youtube' => $v_urlyoutube,
											   'tempat_tinggal' => $v_tempattinggal,
											   'hakakses' => $v_hakakses,
                                        ]);
	   if($rs)
	   {
		      $responseText = "upload.berhasil";
	   }
	   else
	   {
	          $responseText = "upload.gagal";
	   }
       return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}
	
	
    public function viewdata_listuser()
	{
		//main function
        $responseText = "";
		$rs = DB::connection('mysql')->table('users')
                                          ->select('id','username','nama_lengkap','email','hakakses')
                                          ->get();
        foreach ($rs as $row)
		{
           $v_id = $row->id;
		   $v_username = $row->username;
           $v_namalengkap = $row->nama_lengkap;
           $v_email = $row->email;
		   $v_hakakses = $row->hakakses;
           $responseText .= $v_id . '||' . $v_username . '||' . $v_namalengkap . '||' . $v_email . '||' . $v_hakakses . '###';
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}


    public function do_deleteuser(Request $req)
	{
		$id = $req->post_id;
		$responseText = "";
        $rs = DB::connection('mysql')->table('users')
                                 ->where('id',$id)
                                 ->delete();
		if($rs)
		{
		   $responseText = "delete.berhasil";
		}
		else
		{
		   $responseText = "delete.gagal";
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}



    public function viewdata_updateuser(Request $req)
	{
		//main function
		$id = $req->post_id;
		$responseText = "";
        $rs = DB::connection('mysql')->table('users')
                                          ->select('id','username','nama_lengkap','email','hp','url_facebook','url_instagram','url_twitter','url_youtube','tempat_tinggal','hakakses')
										  ->where('id', $id)
                                          ->first();
        $v_iduser = $rs->id;
        $v_username = $rs->username;
        $v_namalengkap = $rs->nama_lengkap;
        $v_email = $rs->email;
		$v_hp = $rs->hp;
		$v_urlfacebook = $rs->url_facebook;
		$v_urlinstagram = $rs->url_instagram;
		$v_urltwitter = $rs->url_twitter;
		$v_urlyoutube = $rs->url_youtube;
		$v_tempattinggal = $rs->tempat_tinggal;
		$v_hakakses = $rs->hakakses;
        $responseText = $v_iduser . '||' . $v_username . '||' . $v_namalengkap . '||' . $v_email . '||' . $v_hp . '||' . $v_urlfacebook . '||' . $v_urlinstagram . '||' . $v_urltwitter . '||' . $v_urlyoutube . '||' . $v_tempattinggal . '||' . $v_hakakses;
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}
	
	
    public function do_updateuser(Request $request)
	{
		$v_username = $request->textbox_username;
		$v_password = $request->textbox_password;
		$v_namalengkap = $request->textbox_namalengkap;
		$v_email = $request->textbox_email;
		$v_hp = $request->textbox_hp;
		$v_urlfacebook = $request->textbox_urlprofilefacebook;
		$v_urlinstagram = $request->textbox_urlprofileinstagram;
		$v_urltwitter = $request->textbox_urlprofiletwitter;
		$v_urlyoutube = $request->textbox_urlprofileyoutube;
        $v_file = $request->file('file_avatar');
		$v_tempattinggal = $request->textbox_tempattinggal;
		$v_hakakses = $request->combobox_hakakses;
		$v_iduser = $request->textbox_iduser;
		$response_updatepassword = "";
		$response_updateavatar = "";
		$response_updatelainlain = "";
		//update password
		if(trim($v_password) <> "")
		{
           $rs = DB::connection('mysql')->table('users')
                                        ->where('id',$v_iduser)
                                        ->update([
                                                    'password' => bcrypt($v_password),
                                        ]);
		   if($rs)
		   {
		      $response_updatepassword = "updatepassword.berhasil";
		   }
		   else
		   {
	          $response_updatepassword = "updatepassword.gagal";
		   }
		}
		//update avatar
        if($request->hasFile('file_avatar')) 
		{
           $v_namafile = $v_file->getClientOriginalName().'.'.$v_file->getClientOriginalExtension();
           $v_file->move(public_path().'/folder_image/', $v_namafile);
           $rs = DB::connection('mysql')->table('users')
                                        ->where('id',$v_iduser)
                                        ->update([
                                                    'photo' => $v_namafile,
                                        ]);
		   if($rs)
		   {
		      $response_updateavatar = "updateavatar.berhasil";
		   }
		   else
		   {
	          $response_updateavatar = "updateavatar.gagal";
		   }
        }
		//update lain-lain
		if(trim($v_iduser) <> "")
		{
           $rs = DB::connection('mysql')->table('users')
                                        ->where('id',$v_iduser)
                                        ->update([
                                                    'username' => $v_username,
													'nama_lengkap' => $v_namalengkap,
													'email' => $v_email,
													'hp' => $v_hp,
													'url_facebook' => $v_urlfacebook,
													'url_instagram' => $v_urlinstagram,
													'url_twitter' => $v_urltwitter,
													'url_youtube' => $v_urlyoutube,
													'tempat_tinggal' => $v_tempattinggal,
													'hakakses' => $v_hakakses,
                                        ]);
		   if($rs)
		   {
		      $response_updatelainlain = "updatelainlain.berhasil";
		   }
		   else
		   {
	          $response_updatelainlain = "updatelainlain.gagal";
		   }
		}
        return response()->json(array(
                                       'respon_updatepassword'=>$response_updatepassword,
									   'respon_updateavatar'=>$response_updateavatar,
									   'respon_updatelainlain'=>$response_updatelainlain,
                                    ));
	}


	public function do_inputujian(Request $request)
	{
		$v_namaujian = $request->post_namaujian;
		$v_informasiujian = $request->post_informasiujian;
		$v_maximalattempt = $request->post_maximalattempt;
		$v_bataswaktu = $request->post_bataswaktu;
		$v_status = "NONAKTIF";  //default tidak aktif
		$responseText = "";
		$rs = DB::connection('mysql')->table('tabel_ujian')
									 ->insert([
												   'nama_ujian' => $v_namaujian,
												   'informasi_ujian' => $v_informasiujian,
												   'maximal_attempt' => $v_maximalattempt,
												   'batas_waktu' => $v_bataswaktu,
												   'status_aktif' => $v_status,
									 ]);
		if($rs)
		{
			  $responseText = "input.berhasil";
		}
		else
		{
			  $responseText = "input.gagal";
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}

    public function viewdata_listujian()
	{
		//main function
        $responseText = "";
		$rs = DB::connection('mysql')->table('tabel_ujian')
                                          ->select('id','nama_ujian','informasi_ujian','maximal_attempt','batas_waktu','status_aktif')
                                          ->get();
        foreach ($rs as $row)
		{
           $v_id = $row->id;
		   $v_namaujian = $row->nama_ujian;
           $v_informasiujian = $row->informasi_ujian;
           $v_maximalattempt = $row->maximal_attempt;
		   $v_bataswaktu = $row->batas_waktu;
		   $v_statusaktif = $row->status_aktif;
           $responseText .= $v_id . '||' . $v_namaujian . '||' . $v_informasiujian . '||' . $v_maximalattempt . '||' . $v_bataswaktu . '||' . $v_statusaktif . '###';
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}


    public function viewdata_updateujian(Request $req)
	{
		//main function
		$id = $req->post_id;
		$responseText = "";
        $rs = DB::connection('mysql')->table('tabel_ujian')
                                          ->select('id','nama_ujian','informasi_ujian','maximal_attempt','batas_waktu','status_aktif')
										  ->where('id', $id)
                                          ->first();
        $v_id = $rs->id;
		$v_namaujian = $rs->nama_ujian;
        $v_informasiujian = $rs->informasi_ujian;
        $v_maximalattempt = $rs->maximal_attempt;
		$v_bataswaktu = $rs->batas_waktu;
		$v_statusaktif = $rs->status_aktif;
        $responseText = $v_id . '||' . $v_namaujian . '||' . $v_informasiujian . '||' . $v_maximalattempt . '||' . $v_bataswaktu . '||' . $v_statusaktif;
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}




    public function do_updateujian(Request $request)
	{
		$v_namaujian = $request->post_namaujian;
		$v_informasiujian = $request->post_informasiujian;
		$v_maximalattempt = $request->post_maximalattempt;
		$v_bataswaktu = $request->post_bataswaktu;
		$v_id = $request->post_idujian;
		
		$response_update = "";
        $rs = DB::connection('mysql')->table('tabel_ujian')
                                        ->where('id',$v_id)
                                        ->update([
                                                    'nama_ujian' => $v_namaujian,
													'informasi_ujian' => $v_informasiujian,
													'maximal_attempt' => $v_maximalattempt,
													'batas_waktu' => $v_bataswaktu,
                                        ]);
		if($rs)
		{
		   $response_update = "update.berhasil";
		}
		else
		{
	       $response_update = "update.gagal";
		}
        return response()->json(array(
                                       'respon'=>$response_update,
                                    ));
	}


    public function do_deleteujian(Request $req)
	{
		$id = $req->post_id;
		$responseText = "";
        $rs = DB::connection('mysql')->table('tabel_ujian')
                                 ->where('id',$id)
                                 ->delete();
		if($rs)
		{
		   $responseText = "delete.berhasil";
		}
		else
		{
		   $responseText = "delete.gagal";
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}


    public function do_aktivasiujian(Request $request)
	{
		$v_statusaktif = $request->post_statusaktif;
		$v_id = $request->post_idujian;
		
		$response_update = "";
        $rs = DB::connection('mysql')->table('tabel_ujian')
                                        ->where('id',$v_id)
                                        ->update([
                                                    'status_aktif' => $v_statusaktif,
                                        ]);
		if($rs)
		{
		   $response_update = "update.berhasil";
		}
		else
		{
	       $response_update = "update.gagal";
		}
        return response()->json(array(
                                       'respon'=>$response_update,
                                    ));
	}



	public function do_tambahsoalmultiplechoice(Request $request)
	{
		$v_jenissoal = $request->post_jenissoal;
		$v_namasoal = $request->post_namasoal;
		$v_tekssoal = $request->post_tekssoal;
		$v_pilihanjawaban = $request->post_pilihanjawaban;   //v_tekspilihan + "||" + v_nilai + "||" + v_umpanbalik + "###";
		$responseText = "";
		$v_id = DB::connection('mysql')->table('tabel_soal')->insertGetId	(
																				array
																				(
																					'jenis_soal' => $v_jenissoal,
																					'nama_soal' => $v_namasoal,
																					'teks_soal' => $v_tekssoal
																				)
																			);
		$ada_yangtidakberhasilterinput = 0;
		$arr_pilihanjawaban_row = explode("###", $v_pilihanjawaban);
		$idx = 0;
		while($idx < (sizeof($arr_pilihanjawaban_row) - 1))
		{
			$arr_pilihanjawaban_col = explode("||",$arr_pilihanjawaban_row[$idx]);
			$v_pilihanke = $idx + 1;
			$v_tekspilihan = $arr_pilihanjawaban_col[0];
			$v_nilai = $arr_pilihanjawaban_col[1];
			$v_umpanbalik = $arr_pilihanjawaban_col[2];
			$rs = DB::connection('mysql')->table('tabel_soal_kuncijawabanmultiplechoice')
										 ->insert([
													   'id_soal' => $v_id,
													   'jenis_soal' => $v_jenissoal,
													   'nama_soal' => $v_namasoal,
													   'teks_soal' => $v_tekssoal,
													   'pilihan_ke' => $v_pilihanke,
													   'teks_pilihan' => $v_tekspilihan,
													   'nilai' => $v_nilai,
													   'umpanbalik' => $v_umpanbalik,
										 ]);
			if(!$rs)
			{
				  $ada_yangtidakberhasilterinput = 1;
			}
			$idx = $idx + 1;
		}
		if($ada_yangtidakberhasilterinput == 0)
		{
			  $responseText = "input.berhasil";
		}
		else
		{
			  $responseText = "input.gagal";
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}



    public function viewdata_listsoal()
	{
		//main function
        $responseText = "";
		$rs = DB::connection('mysql')->table('tabel_soal')
                                          ->select('id','jenis_soal','nama_soal','teks_soal')
                                          ->get();
        foreach ($rs as $row)
		{
           $v_id = $row->id;
		   $v_jenissoal = $row->jenis_soal;
           $v_namasoal = $row->nama_soal;
           $v_tekssoal = $row->teks_soal;
           $responseText .= $v_id . '||' . $v_jenissoal . '||' . $v_namasoal . '||' . $v_tekssoal . '###';
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}



    public function do_deletesoalmultiplechoice(Request $req)
	{
		$id = $req->post_id;
		$response_deletesoal = "";
		$response_deletesoalkuncijawaban = "";

        $rs = DB::connection('mysql')->table('tabel_soal')
                                 ->where('id',$id)
                                 ->delete();
		if($rs)
		{
		   $response_deletesoal = "deletesoal.berhasil";
		}
		else
		{
		   $response_deletesoal = "deletesoal.gagal";
		}
		
        $rs = DB::connection('mysql')->table('tabel_soal_kuncijawabanmultiplechoice')
                                 ->where('id_soal',$id)
                                 ->delete();
		if($rs)
		{
		   $response_deletesoalkuncijawaban = "deletesoalkuncijawaban.berhasil";
		}
		else
		{
		   $response_deletesoalkuncijawaban = "deletesoalkuncijawaban.gagal";
		}

        return response()->json(array(
                                       'respon_deletesoal'=>$response_deletesoal,
									   'respon_deletesoalkuncijawaban'=>$response_deletesoalkuncijawaban,
                                    ));
	}



    public function viewdata_updatesoalmultiplechoice(Request $req)
	{
		//main function
		$id = $req->post_id;
		$responseText = "";
        $rs = DB::connection('mysql')->table('tabel_soal_kuncijawabanmultiplechoice')
                                          ->select('id','id_soal','jenis_soal','nama_soal','teks_soal','pilihan_ke','teks_pilihan','nilai','umpanbalik')
										  ->where('id_soal', $id)
										  ->orderBy('pilihan_ke', 'asc')
                                          ->get();
        foreach ($rs as $row)
		{
           $v_id = $row->id;
		   $v_idsoal = $row->id_soal;
           $v_jenissoal = $row->jenis_soal;
           $v_namasoal = $row->nama_soal;
		   $v_tekssoal = $row->teks_soal;
		   $v_pilihanke = $row->pilihan_ke;
		   $v_tekspilihan = $row->teks_pilihan;
		   $v_nilai = $row->nilai;
		   $v_umpanbalik = $row->umpanbalik;
           $responseText .= $v_id . '||' . $v_idsoal . '||' . $v_jenissoal . '||' . $v_namasoal . '||' . $v_tekssoal . '||' . $v_pilihanke . '||' . $v_tekspilihan . '||' . $v_nilai . '||' . $v_umpanbalik . '###';
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}




	public function do_updatesoalmultiplechoice(Request $request)
	{
		$v_idsoal = $request->post_idsoal;
		$v_jenissoal = $request->post_jenissoal;
		$v_namasoal = $request->post_namasoal;
		$v_tekssoal = $request->post_tekssoal;
		$v_pilihanjawaban = $request->post_pilihanjawaban;   //v_tekspilihan + "||" + v_nilai + "||" + v_umpanbalik + "###";
		$response_deletesoal = "";
		$response_deletesoalkuncijawaban = "";
		$response_inputsoal = "";
		$response_inputsoalkuncijawaban = "";
		
		//delete soal
        $rs = DB::connection('mysql')->table('tabel_soal')
                                     ->where('id',$v_idsoal)
                                     ->delete();
		if($rs)
		{
		   $response_deletesoal = "deletesoal.berhasil";
		}
		else
		{
		   $response_deletesoal = "deletesoal.gagal";
		}
		
		//delete soal kunci jawaban
        $rs = DB::connection('mysql')->table('tabel_soal_kuncijawabanmultiplechoice')
                                     ->where('id_soal',$v_idsoal)
                                     ->delete();
		if($rs)
		{
		   $response_deletesoalkuncijawaban = "deletesoalkuncijawaban.berhasil";
		}
		else
		{
		   $response_deletesoalkuncijawaban = "deletesoalkuncijawaban.gagal";
		}
		
		//input soal
		$v_id = DB::connection('mysql')->table('tabel_soal')->insertGetId	(
																				array
																				(
																					'jenis_soal' => $v_jenissoal,
																					'nama_soal' => $v_namasoal,
																					'teks_soal' => $v_tekssoal
																				)
																			);
																			
		//input soal kunci jawaban
		$ada_yangtidakberhasilterinput = 0;
		$arr_pilihanjawaban_row = explode("###", $v_pilihanjawaban);
		$idx = 0;
		while($idx < (sizeof($arr_pilihanjawaban_row) - 1))
		{
			$arr_pilihanjawaban_col = explode("||",$arr_pilihanjawaban_row[$idx]);
			$v_pilihanke = $idx + 1;
			$v_tekspilihan = $arr_pilihanjawaban_col[0];
			$v_nilai = $arr_pilihanjawaban_col[1];
			$v_umpanbalik = $arr_pilihanjawaban_col[2];
			$rs = DB::connection('mysql')->table('tabel_soal_kuncijawabanmultiplechoice')
										 ->insert([
													   'id_soal' => $v_id,
													   'jenis_soal' => $v_jenissoal,
													   'nama_soal' => $v_namasoal,
													   'teks_soal' => $v_tekssoal,
													   'pilihan_ke' => $v_pilihanke,
													   'teks_pilihan' => $v_tekspilihan,
													   'nilai' => $v_nilai,
													   'umpanbalik' => $v_umpanbalik,
										 ]);
			if(!$rs)
			{
				  $ada_yangtidakberhasilterinput = 1;
			}
			$idx = $idx + 1;
		}
		if($ada_yangtidakberhasilterinput == 0)
		{
			  $response_inputsoalkuncijawaban = "inputsoalkuncijawaban.berhasil";
		}
		else
		{
			  $response_inputsoalkuncijawaban = "inputsoalkuncijawaban.gagal";
		}
        return response()->json(array(
                                       'respon_deletesoal' => $response_deletesoal,
									   'respon_deletesoalkuncijawaban' => $response_deletesoalkuncijawaban,
									   'respon_inputsoalkuncijawaban' => $response_inputsoalkuncijawaban,
                                    ));
	}



	public function do_inputkonfigurasipenyajianujian(Request $request)
	{
		//menghapus data konfigurasi sebelumnya
		$response_memulaiprosessimpan = "";
		$v_data = $request->post_data;   //v_data += v_idujian + "||" + v_nomorhalaman + "||" + v_nomorsoal + "||" + questions[i][j].idsoal + "||" + questions[i][j].jenissoal  + "||" + questions[i][j].namasoal + "||" + questions[i][j].tekssoal + "###";
		$arr_data_row = explode("###", $v_data);
		$arr_data_col = explode("||",$arr_data_row[0]);
		$v_idujian = $arr_data_col[0];
        $rs = DB::connection('mysql')->table('tabel_ujian_soal')->where('id_ujian',$v_idujian)->delete();
		if($rs)
		{
		   $response_memulaiprosessimpan = "mulai.berhasil";
		}
		else
		{
		   $response_memulaiprosessimpan = "mulai.gagal";
		}
        $rs = DB::connection('mysql')->table('tabel_ujian_kuncijawabanmultiplechoice')->where('id_ujian',$v_idujian)->delete();
		if($rs)
		{
		   $response_memulaiprosessimpan = "mulai.berhasil";
		}
		else
		{
		   $response_memulaiprosessimpan = "mulai.gagal";
		}
		
		//menginputkan data konfigurasi yang baru
		$ada_yangtidakberhasilterinput = 0;
		$response_prosessimpan = "";
		$v_data = $request->post_data;   //v_data += v_idujian + "||" + v_nomorhalaman + "||" + v_nomorsoal + "||" + questions[i][j].idsoal + "||" + questions[i][j].jenissoal  + "||" + questions[i][j].namasoal + "||" + questions[i][j].tekssoal + "###";
		$arr_data_row = explode("###", $v_data);
		$idx = 0;
		while($idx < (sizeof($arr_data_row)-1))
		{
			//mendapatkan data soal ujian
			$arr_data_col = explode("||",$arr_data_row[$idx]);
			$v_idujian = $arr_data_col[0];
			$v_nomorhalaman = $arr_data_col[1];
			$v_nomorsoal = $arr_data_col[2];
			$v_idsoal = $arr_data_col[3];
			$v_jenissoal = $arr_data_col[4];
			$v_namasoal = $arr_data_col[5];
			$v_tekssoal = $arr_data_col[6];
			//menginput data soal ujian
			$v_idujiansoal = DB::connection('mysql')->table('tabel_ujian_soal')->insertGetId	(
																					array
																					(
																						'id_ujian' => $v_idujian,
																						'nomor_halaman' => $v_nomorhalaman,
																						'nomor_soal' => $v_nomorsoal,
																						'id_soal' => $v_idsoal,
																						'jenis_soal' => $v_jenissoal,
																						'nama_soal' => $v_namasoal,
																						'teks_soal' => $v_tekssoal
																					)
																				);
			//memindahkan kunci jawaban dari tabel_soal_kuncijawabanmultiplechoice ke dalam tabel_ujian_kuncijawabanmultiplechoice
			$rs_1 = DB::connection('mysql')->table('tabel_soal_kuncijawabanmultiplechoice')
											  ->select('id','id_soal','jenis_soal','nama_soal','teks_soal','pilihan_ke','teks_pilihan','nilai','umpanbalik')
											  ->where('id_soal', $v_idsoal)
											  ->orderBy('pilihan_ke', 'asc')
											  ->get();
			foreach ($rs_1 as $row_1)
			{
				$v_id = $row_1->id;
				$v_idsoal = $row_1->id_soal;
				$v_jenissoal = $row_1->jenis_soal;
				$v_namasoal = $row_1->nama_soal;
				$v_tekssoal = $row_1->teks_soal;
				$v_pilihanke = $row_1->pilihan_ke;
				$v_tekspilihan = $row_1->teks_pilihan;
				$v_nilai = $row_1->nilai;
				$v_umpanbalik = $row_1->umpanbalik;
				$rs_2 = DB::connection('mysql')->table('tabel_ujian_kuncijawabanmultiplechoice')
											   ->insert([
														   'id_ujian' => $v_idujian,
														   'id_ujian_soal' => $v_idujiansoal,
														   'nomor_halaman' => $v_nomorhalaman,
														   'nomor_soal' => $v_nomorsoal,
														   'id_soal' => $v_idsoal,
														   'jenis_soal' => $v_jenissoal,
														   'nama_soal' => $v_namasoal,
														   'teks_soal' => $v_tekssoal,
														   'pilihan_ke' => $v_pilihanke,
														   'teks_pilihan' => $v_tekspilihan,
														   'nilai' => $v_nilai,
														   'umpanbalik' => $v_umpanbalik
											 ]);
				if(!$rs_2)
				{
					$ada_yangtidakberhasilterinput = 1;
				}
			}
			//menuju ke data soal ujian yang berikutnya
			$idx = $idx + 1;
		}
		if($ada_yangtidakberhasilterinput == 0)
		{
			  $response_prosessimpan = "simpan.berhasil";
		}
		else
		{
			  $response_prosessimpan = "simpan.gagal";
		}
		
		//menampilkan respon
        return response()->json(array(
									   'respon_memulaiprosessimpan'=>$response_memulaiprosessimpan,
									   'respon_prosessimpan'=>$response_prosessimpan,
                                    ));
	}



    public function viewdata_updatekonfigurasipenyajianujian_getdaftarhalaman(Request $req)
	{
		//main function
		$v_idujian = $req->post_idujian;
		$responseText = "";
        $rs = DB::connection('mysql')->table('tabel_ujian_soal')
                                          ->select('nomor_halaman')
										  ->where('id_ujian', $v_idujian)
										  ->groupBy('nomor_halaman')
                                          ->get();
        foreach ($rs as $row)
		{
		   $v_nomorhalaman = $row->nomor_halaman;
           $responseText .= $v_nomorhalaman . '###';
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}


    public function viewdata_updatekonfigurasipenyajianujian_getdaftarhalamanitem(Request $req)
	{
		//main function
		$v_idujian = $req->post_idujian;
		$v_nomorhalaman = $req->post_nomorhalaman;
		$responseText = "";
        $rs = DB::connection('mysql')->table('tabel_ujian_soal')
                                          ->select('id','id_ujian','nomor_halaman','nomor_soal','id_soal','jenis_soal','nama_soal','teks_soal')
										  ->where('id_ujian', $v_idujian)
										  ->where('nomor_halaman', $v_nomorhalaman)
                                          ->get();
        foreach ($rs as $row)
		{
           $v_idujiansoal = $row->id;
		   $v_nomorsoal = $row->nomor_soal;
		   $v_idsoal = $row->id_soal;
           $v_jenissoal = $row->jenis_soal;
           $v_namasoal = $row->nama_soal;
		   $v_tekssoal = $row->teks_soal;
           $responseText .= $v_idujiansoal . '||' . $v_nomorsoal . '||' . $v_idsoal . '||' . $v_jenissoal . '||' . $v_namasoal . '||' . $v_tekssoal . '###';
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}

}