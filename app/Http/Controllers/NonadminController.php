<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use PDF;


class NonadminController extends Controller
{
    public function view_home()
	{
		//main function
        return view('/nonadmin/home');
	}
		
    public function view_riwayatujian()
	{
		//main function
        return view('/nonadmin/riwayatujian');
	}
    public function view_listujian()
	{
		//main function
        return view('/nonadmin/listujian');
	}

    public function viewdata_listujian(Request $request)
	{
		$v_idsesi = $request->post_idsesi;
		
		//main function
        $responseText = "";
		$rs = DB::connection('mysql')->table('tabel_ujian')
                                          ->select('id','nama_ujian','informasi_ujian','maximal_attempt','batas_waktu','status_aktif')
                                          ->get();
        foreach ($rs as $row)
		{
			//data informasi ujian
			$v_idujian = $row->id;
			$v_namaujian = $row->nama_ujian;
			$v_informasiujian = $row->informasi_ujian;
			$v_maximalattempt = $row->maximal_attempt;
			$v_bataswaktu = $row->batas_waktu;
			$v_statusaktif = $row->status_aktif;
		   
			//cek jumlah attempt
			$v_jumlahattempt = 1;
			$v_jumlahattempt = DB::connection('mysql')->table('tabel_attempt')
                                          ->select('id_user')
										  ->where('id_ujian',$v_idujian)
										  ->where('id_user',$v_idsesi)
                                          ->count();
										  
			//response
			$responseText .= $v_idujian . '||' . $v_namaujian . '||' . $v_informasiujian . '||' . $v_maximalattempt . '||' . $v_bataswaktu . '||' . $v_statusaktif . '||' . $v_jumlahattempt . '###';
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}

	
    public function cek_sisaattempt(Request $request)
	{
		$v_idujian = $request->post_idujian;
		$v_idsesi = $request->post_idsesi;
        $responseText = "";

		//mendapatkan informasi user
		$rs = DB::connection('mysql')->table('users')
                                          ->select('id','nama_lengkap','email','hp','url_profile_facebook','url_profile_instagram','url_profile_twitter','url_profile_youtube','tempat_tinggal')
										  ->where('id',$v_idsesi)
                                          ->first();
		$v_namalengkap = $rs->nama_lengkap;
		$v_email = $rs->email;
		$v_hp = $rs->hp;
		$v_urlprofilefacebook = $rs->url_profile_facebook;
		$v_urlprofileinstagram = $rs->url_profile_instagram;
		$v_urlprofiletwitter = $rs->url_profile_twitter;
		$v_urlprofileyoutube = $rs->url_profile_youtube;
		$v_tempattinggal = $rs->tempat_tinggal;
													   
		//mendapatkan informasi jumlah maximal attempt
		$v_maximalattempt = 0;
		$v_statusaktif = "";
		$rs = DB::connection('mysql')->table('tabel_ujian')
                                          ->select('id','nama_ujian','informasi_ujian','maximal_attempt','batas_waktu','status_aktif')
										  ->where('id',$v_idujian)
                                          ->first();
		$v_namaujian = $rs->nama_ujian;
		$v_informasiujian = $rs->informasi_ujian;
		$v_maximalattempt = $rs->maximal_attempt;
		$v_bataswaktu = $rs->batas_waktu;
		$v_statusaktif = $rs->status_aktif;
		
		//hitung total attempt
		$v_totalattempt = 1;
		$v_totalattempt = DB::connection('mysql')->table('tabel_attempt')
                                          ->select('id_user','id_ujian')
										  ->where('id_user',$v_idsesi)
										  ->where('id_ujian',$v_idujian)
                                          ->count();
		
		//hitung sisa attempt. jika sisa attempt >= 0 dan status aktif, maka laksanakan attempt
		$v_sisaattempt = $v_maximalattempt - $v_totalattempt;
		if($v_sisaattempt > 0 && $v_statusaktif == "AKTIF")
		{
			//melaksanakan attempt
			date_default_timezone_set("Asia/Bangkok");
			$v_timestamp = time();
			$v_tanggalattempt = date("Y-m-d",$v_timestamp);
			$v_jamattempt = date("H:i:s",$v_timestamp);
			$rs = DB::connection('mysql')->table('tabel_attempt')
										 ->insert([
													   'id_ujian' => $v_idujian,
													   'nama_ujian' => $v_namaujian,
													   'informasi_ujian' => $v_informasiujian,
													   'maximal_attempt' => $v_maximalattempt,
													   'batas_waktu' => $v_bataswaktu,
													   'status_aktif' => $v_statusaktif,
													   'timestamp' => $v_timestamp,
													   'tanggal_attempt' => $v_tanggalattempt,
													   'jam_attempt' => $v_jamattempt,
													   'id_user' => $v_idsesi,
													   'nama_lengkap' => $v_namalengkap,
													   'email' => $v_email,
													   'hp' => $v_hp,
													   'url_profile_facebook' => $v_urlprofilefacebook,
													   'url_profile_instagram' => $v_urlprofileinstagram,
													   'url_profile_twitter' => $v_urlprofiletwitter,
													   'url_profile_youtube' => $v_urlprofileyoutube,
													   'tempat_tinggal' => $v_tempattinggal,
										 ]);
			if($rs)
			{
				  $responseText = "continue";
			}
		}
		else
		{
			$responseText = "stop";
		}
		
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}

    public function get_idattempt(Request $request)
	{
		$v_idujian = $request->post_idujian;
		$v_idsesi = $request->post_idsesi;
        $responseText = "";

		$rs = DB::connection('mysql')->table('tabel_attempt')
                                          ->select('id','id_ujian','id_user')
										  ->where('id_ujian',$v_idujian)
										  ->where('id_user',$v_idsesi)
										  ->orderBy('timestamp', 'desc')
                                          ->first();
		$v_idattempt = $rs->id;
		$responseText = $v_idattempt;
		
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}
	
    public function do_mulaimengerjakanataulanjutmengerjakan(Request $request)
	{
		$v_idattempt = $request->post_idattempt;
        $responseText = "";

		$v_jumlahattempt = 0;
		$v_jumlahattempt = DB::connection('mysql')->table('tabel_attempt_cache')
                                          ->select('id','id_attempt','id_ujian')
										  ->where('id_attempt',$v_idattempt)
                                          ->count();
		if($v_jumlahattempt == 0)
		{
			$responseText = "mulaimengerjakan";
		}
		else
		{
			$responseText = "lanjutmengerjakan";
		}
		
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}

	function hitung_sisawaktuujian(Request $request)
	{
		$v_idujian = $request->post_idujian;
		$v_idsesi = $request->post_idsesi;
		$responseText = 0;
		
		//get batas waktu ujian
		$v_bataswaktu = "";
		$rs = DB::connection('mysql')->table('tabel_ujian')
                                          ->select('id','batas_waktu')
										  ->where('id',$v_idujian)
                                          ->first();
		$v_bataswaktu = $rs->batas_waktu;  //dalam detik
		
		//get timestamp attempt (yang terakhir dari id_ujian terkait)
		$timestamp_attempt = "";
		$rs = DB::connection('mysql')->table('tabel_attempt')
                                          ->select('id_ujian','timestamp','id_user')
										  ->where('id_ujian',$v_idujian)
										  ->where('id_user',$v_idsesi)
										  ->orderBy('timestamp', 'desc')
                                          ->first();
		$timestamp_attempt = $rs->timestamp;		

		//menghitung batas akhir ujian (menambahkan batas waktu ujian, dengan timestamp attempt)
		$v_batasakhirujian = $timestamp_attempt + $v_bataswaktu;
		
		//get waktu sekarang
		date_default_timezone_set("Asia/Bangkok");
		$timestamp_waktusekarang = time();
		
		//hitung sisa waktu ujian
		$v_sisawaktuujian = $v_batasakhirujian - $timestamp_waktusekarang;
		$responseText = $v_sisawaktuujian;
				
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}

    public function get_informasiujian(Request $req)
	{
		//main function
		$v_idujian = $req->post_idujian;
		$responseText = "";
        $rs = DB::connection('mysql')->table('tabel_ujian')
                                          ->select('id','nama_ujian','informasi_ujian','maximal_attempt','batas_waktu','status_aktif')
										  ->where('id', $v_idujian)
                                          ->first();
		$v_namaujian = $rs->nama_ujian;
        $v_informasiujian = $rs->informasi_ujian;
        $v_maximalattempt = $rs->maximal_attempt;
		$v_bataswaktu = $rs->batas_waktu;
		$v_statusaktif = $rs->status_aktif;
        $responseText = $v_idujian . '||' . $v_namaujian . '||' . $v_informasiujian . '||' . $v_maximalattempt . '||' . $v_bataswaktu . '||' . $v_statusaktif;
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}


    public function get_daftarnomorsoalujian(Request $req)
	{
		//main function
		$v_idujian = $req->post_idujian;
		$responseText = "";
		$rs = DB::connection('mysql')->table('tabel_ujian_soal')
                                          ->select('id_ujian','nomor_soal')
										  ->where('id_ujian', $v_idujian)
										  ->orderBy('nomor_soal', 'asc')
										  ->groupBy('nomor_soal')
                                          ->get();
        foreach ($rs as $row)
		{
			$v_nomorsoal = $row->nomor_soal;
			$responseText .= $v_nomorsoal . '###';
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}


    public function get_daftarnomorhalamanujian(Request $req)
	{
		//main function
		$v_idujian = $req->post_idujian;
		$responseText = "";
        $rs = DB::connection('mysql')->table('tabel_ujian_soal')
                                          ->select('id_ujian','nomor_halaman')
										  ->where('id_ujian', $v_idujian)
										  ->orderBy('nomor_halaman', 'asc')
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

    public function get_daftarsoalujian(Request $req)
	{
		//main function
		$v_idujian = $req->post_idujian;
		$v_nomorhalamanujian = $req->post_nomorhalamanujian;
		$responseText = "";
		//get daftar soal ujian
        $rs_1 = DB::connection('mysql')->table('tabel_ujian_soal')
                                          ->select('id','id_ujian','nomor_halaman','nomor_soal','id_soal','jenis_soal','nama_soal','teks_soal')
										  ->where('id_ujian', $v_idujian)
										  ->where('nomor_halaman', $v_nomorhalamanujian)
										  ->orderBy('nomor_soal', 'asc') //how to random it (dipikirkan next)
										  ->groupBy('nomor_soal')
                                          ->get();
        foreach ($rs_1 as $row_1)
		{
			$v_idujiansoal = $row_1->id;
			//$v_idujian = $row_1->id_ujian;
			//$v_nomorhalamanujian = $row_1->nomor_halaman;
			$v_nomorsoalujian = $row_1->nomor_soal;
			$v_idsoal = $row_1->id_soal;
			$v_jenissoalujian = $row_1->jenis_soal;
			$v_namasoalujian = $row_1->nama_soal;
			$v_tekssoalujian = $row_1->teks_soal;
			$responseText .= $v_idujiansoal . "||" . $v_idujian . "||" . $v_nomorhalamanujian . "||" . $v_nomorsoalujian . "||" . $v_idsoal . "||" . $v_jenissoalujian . "||" . $v_namasoalujian . "||" . $v_tekssoalujian . '###';
		}
		//mengirimkan respon
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}

    public function get_daftarkuncijawaban(Request $req)
	{
		//main function
		$v_idujiansoal = $req->post_idujiansoal;
		$responseText = "";
		//get daftar kunci jawaban dari suatu soal ujian
		$rs = DB::connection('mysql')->table('tabel_ujian_kuncijawabanmultiplechoice')
										  ->select('id_ujian','id_ujian_soal','nomor_halaman','nomor_soal','id_soal','jenis_soal','nama_soal','teks_soal','pilihan_ke','teks_pilihan','nilai','umpanbalik')
										  ->where('id_ujian_soal', $v_idujiansoal)
										  ->orderBy('pilihan_ke', 'asc') //how to random it (dipikirkan next)
										  ->get();
		foreach ($rs as $row)
		{
			$v_idujian = $row->id_ujian;
			$v_idujiansoal = $row->id_ujian_soal;
			$v_nomorhalamanujian = $row->nomor_halaman;
			$v_nomorsoalujian = $row->nomor_soal;
			$v_idsoal = $row->id_soal;
			$v_jenissoalujian = $row->jenis_soal;
			$v_namasoalujian = $row->nama_soal;
			$v_tekssoalujian = $row->teks_soal;
			$v_pilihanke = $row->pilihan_ke;
			$v_tekspilihan = $row->teks_pilihan;
			$v_nilai = $row->nilai;
			$v_umpanbalik = $row->umpanbalik;
			$responseText .= $v_idujian . "||" . $v_idujiansoal . "||" . $v_nomorhalamanujian . "||" . $v_nomorsoalujian . "||" . $v_idsoal . "||" . $v_jenissoalujian . "||" . $v_namasoalujian . "||" . $v_tekssoalujian . "||" . $v_pilihanke . "||" . $v_tekspilihan . "||" . $v_nilai . "||" . $v_umpanbalik . '###';
		}
		//mengirimkan respon
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}

    public function get_datanomorhalamanujian(Request $req)
	{
		//main function
		$v_nomorsoal = $req->post_nomorsoal;
		$v_idujian = $req->post_idujian;
		$responseText = "";
        $rs = DB::connection('mysql')->table('tabel_ujian_soal')
                                          ->select('id_ujian','nomor_halaman','nomor_soal')
										  ->where('id_ujian', $v_idujian)
										  ->where('nomor_soal', $v_nomorsoal)
                                          ->first();
		$responseText = $rs->nomor_halaman;
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}


    public function do_backupjawabanpeserta(Request $req)
	{
		//menghapus data backup sebelumnya
		$response_memulaiprosesbackup = "";
		$v_data = $req->post_data;   /*
											v_data += 	v_backupidattempt + "||" + 
														v_backupidujian + "||" + 
														v_backupidujiansoal + "||" + 
														v_backupnomorhalamanujian + "||" + 
														v_backupnomorsoalujian + "||" + 
														v_backupidsoal + "||" + 
														v_backupjenissoalujian + "||" + 
														v_backupnamasoalujian + "||" + 
														v_backuptekssoalujian + "||" + 
														v_backuppilihanke + "||" + 
														v_backuptekspilihan + "||" + 
														v_backupnilai + "||" + 
														v_backupumpanbalik + "###";
										*/
		$arr_data_row = explode("###", $v_data);
		$arr_data_col = explode("||",$arr_data_row[0]);
		$v_idattempt = $arr_data_col[0];
		$v_idujian = $arr_data_col[1];
		$v_idujiansoal = $arr_data_col[2];
		$v_nomorhalamanujian = $arr_data_col[3];
		$v_nomorsoalujian = $arr_data_col[4];
		$v_idsoal = $arr_data_col[5];
		$v_jenissoalujian = $arr_data_col[6];
		$v_namasoalujian = $arr_data_col[7];
		$v_tekssoalujian = $arr_data_col[8];
		$v_pilihanke = $arr_data_col[9];
		$v_tekspilihan = $arr_data_col[10];
		$v_nilai = $arr_data_col[11];
		$v_umpanbalik = $arr_data_col[12];
        $rs = DB::connection('mysql')->table('tabel_attempt_cache')->where('id_attempt',$v_idattempt)->delete();
		if($rs)
		{
		   $response_memulaiprosesbackup = "mulai.berhasil";
		}
		else
		{
		   $response_memulaiprosesbackup = "mulai.gagal";
		}
		
		//menginputkan data backup yang baru
		$ada_yangtidakberhasilterbackup = 0;
		$response_prosesbackup = "";
		$v_data = $req->post_data; 
		$arr_data_row = explode("###", $v_data);
		$idx = 0;
		while($idx < (sizeof($arr_data_row)-1))
		{
			//mendapatkan data jawaban peserta ujian
			$arr_data_col = explode("||",$arr_data_row[$idx]);
			$v_idattempt = $arr_data_col[0];
			$v_idujian = $arr_data_col[1];
			$v_idujiansoal = $arr_data_col[2];
			$v_nomorhalamanujian = $arr_data_col[3];
			$v_nomorsoalujian = $arr_data_col[4];
			$v_idsoal = $arr_data_col[5];
			$v_jenissoalujian = $arr_data_col[6];
			$v_namasoalujian = $arr_data_col[7];
			$v_tekssoalujian = $arr_data_col[8];
			$v_pilihanke = $arr_data_col[9];
			$v_tekspilihan = $arr_data_col[10];
			$v_nilai = $arr_data_col[11];
			$v_umpanbalik = $arr_data_col[12];
			//menginput data jawaban peserta ujian
			$rs = DB::connection('mysql')->table('tabel_attempt_cache')
										 ->insert([
													   'id_attempt' => $v_idattempt,
													   'id_ujian' => $v_idujian,
													   'id_ujian_soal' => $v_idujiansoal,
													   'nomor_halaman' => $v_nomorhalamanujian,
													   'nomor_soal' => $v_nomorsoalujian,
													   'id_soal' => $v_idsoal,
													   'jenis_soal' => $v_jenissoalujian,
													   'nama_soal' => $v_namasoalujian,
													   'teks_soal' => $v_tekssoalujian,
													   'pilihan_ke' => $v_pilihanke,
													   'teks_jawaban' => $v_tekspilihan,
													   'nilai' => $v_nilai,
													   'umpanbalik' => $v_umpanbalik,
										 ]);
			if(!$rs)
			{
				  $ada_yangtidakberhasilterbackup = 1;
			}
			//menuju ke data jawaban peserta ujian yang berikutnya
			$idx = $idx + 1;
		}
		if($ada_yangtidakberhasilterbackup == 0)
		{
			  $response_prosesbackup = "backup.berhasil";
		}
		else
		{
			  $response_prosesbackup = "backup.gagal";
		}
		
		//menampilkan respon
        return response()->json(array(
									   'respon_memulaiprosesbackup'=>$response_memulaiprosesbackup,
									   'respon_prosesbackup'=>$response_prosesbackup,
                                    ));
	}


    public function get_restoredaftarnomorhalamanujian(Request $request)
	{
		$v_idattempt = $request->post_idattempt;
		$v_idujian = $request->post_idujian;
		
		//main function
		$responseText = "";
        $rs = DB::connection('mysql')->table('tabel_ujian_soal')
                                          ->select('id_ujian','nomor_halaman')
										  ->where('id_ujian', $v_idujian)
										  ->orderBy('nomor_halaman', 'asc')
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
	
    public function get_restoredaftarsoalujian(Request $req)
	{
		$v_idattempt = $req->post_idattempt;
		$v_idujian = $req->post_idujian;
		$v_nomorhalamanujian = $req->post_nomorhalamanujian;
		
		//main function
        $responseText = "";
		//get daftar soal ujian
        $rs_1 = DB::connection('mysql')->table('tabel_ujian_soal')
                                          ->select('id','id_ujian','nomor_halaman','nomor_soal','id_soal','jenis_soal','nama_soal','teks_soal')
										  ->where('id_ujian', $v_idujian)
										  ->where('nomor_halaman', $v_nomorhalamanujian)
										  ->orderBy('nomor_soal', 'asc') //how to random it (dipikirkan next)
										  ->groupBy('nomor_soal')
                                          ->get();
        foreach ($rs_1 as $row_1)
		{
			$v_idujiansoal = $row_1->id;
			//$v_idujian = $row_1->id_ujian;
			//$v_nomorhalamanujian = $row_1->nomor_halaman;
			$v_nomorsoalujian = $row_1->nomor_soal;
			$v_idsoal = $row_1->id_soal;
			$v_jenissoalujian = $row_1->jenis_soal;
			$v_namasoalujian = $row_1->nama_soal;
			$v_tekssoalujian = $row_1->teks_soal;
			$responseText .= $v_idujiansoal . "||" . $v_idujian . "||" . $v_nomorhalamanujian . "||" . $v_nomorsoalujian . "||" . $v_idsoal . "||" . $v_jenissoalujian . "||" . $v_namasoalujian . "||" . $v_tekssoalujian . '###';
		}
		
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}
	
    public function get_restoredaftarkuncijawaban(Request $req)
	{
		//main function
		$v_idattempt = $req->post_idattempt;
		$v_idujian = $req->post_idujian;
		$v_idujiansoal = $req->post_idujiansoal;
		$responseText = "";
		
		//get jawaban
		$rs = DB::connection('mysql')->table('tabel_attempt_cache')
                                          ->select('id_attempt','id_ujian','id_ujian_soal','nomor_halaman','nomor_soal','id_soal','jenis_soal','nama_soal','teks_soal','pilihan_ke','teks_jawaban','nilai','umpanbalik')
										  ->where('id_attempt',$v_idattempt)
										  ->where('id_ujian',$v_idujian)
										  ->where('id_ujian_soal',$v_idujiansoal)
                                          ->first();
		$jawaban_pilihanke = $rs->pilihan_ke;
		$jawaban_teksjawaban = $rs->teks_jawaban;
		$jawaban_nilai = $rs->nilai;
		$jawaban_umpanbalik = $rs->umpanbalik;
		
		//get daftar kunci jawaban dari suatu soal ujian
		$rs = DB::connection('mysql')->table('tabel_ujian_kuncijawabanmultiplechoice')
										  ->select('id_ujian','id_ujian_soal','nomor_halaman','nomor_soal','id_soal','jenis_soal','nama_soal','teks_soal','pilihan_ke','teks_pilihan','nilai','umpanbalik')
										  ->where('id_ujian_soal', $v_idujiansoal)
										  ->orderBy('pilihan_ke', 'asc') //how to random it (dipikirkan next)
										  ->get();
		foreach ($rs as $row)
		{
			$v_idujian = $row->id_ujian;
			$v_idujiansoal = $row->id_ujian_soal;
			$v_nomorhalamanujian = $row->nomor_halaman;
			$v_nomorsoalujian = $row->nomor_soal;
			$v_idsoal = $row->id_soal;
			$v_jenissoalujian = $row->jenis_soal;
			$v_namasoalujian = $row->nama_soal;
			$v_tekssoalujian = $row->teks_soal;
			$v_pilihanke = $row->pilihan_ke;
			$v_tekspilihan = $row->teks_pilihan;
			$v_nilai = $row->nilai;
			$v_umpanbalik = $row->umpanbalik;
			if(
				$jawaban_pilihanke == $v_pilihanke &&
				$jawaban_teksjawaban == $v_tekspilihan &&
				$jawaban_nilai == $v_nilai &&
				$jawaban_umpanbalik == $v_umpanbalik
			)
			{
				$responseText .= $v_idujian . "||" . $v_idujiansoal . "||" . $v_nomorhalamanujian . "||" . $v_nomorsoalujian . "||" . $v_idsoal . "||" . $v_jenissoalujian . "||" . $v_namasoalujian . "||" . $v_tekssoalujian . "||" . $v_pilihanke . "||" . $v_tekspilihan . "||" . $v_nilai . "||" . $v_umpanbalik . "||" . "CHECKED" . "###";
			}
			else
			{
				$responseText .= $v_idujian . "||" . $v_idujiansoal . "||" . $v_nomorhalamanujian . "||" . $v_nomorsoalujian . "||" . $v_idsoal . "||" . $v_jenissoalujian . "||" . $v_namasoalujian . "||" . $v_tekssoalujian . "||" . $v_pilihanke . "||" . $v_tekspilihan . "||" . $v_nilai . "||" . $v_umpanbalik . "||" . "UNCHECKED" . "###";
			}
		}
		//mengirimkan respon
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}


    public function view_ujian()
	{
		//main function
		
		//melaksankaan enrollment
		
		//mendapatkan daftar soal
		
		//menampilkan halaman
        return view('/nonadmin/do_ujian');
	}
	
    public function do_selesaikanujian(Request $request)
	{
		$v_idujian = $request->post_idujian;
		$v_idattempt = $request->post_idattempt;
		
		//main function
		$ada_yangtidakberhasiltersimpan = 0;
        $responseText = "";
		$rs = DB::connection('mysql')->table('tabel_attempt_cache')
                                          ->select('id_attempt','id_ujian','id_ujian_soal','nomor_halaman','nomor_soal','id_soal','jenis_soal','nama_soal','teks_soal','pilihan_ke','teks_jawaban','nilai','umpanbalik')
										  ->where('id_attempt',$v_idattempt)
										  ->where('id_ujian',$v_idujian)
                                          ->get();
        foreach ($rs as $row)
		{
			$v_idattempt = $row->id_attempt;
			$v_idujian = $row->id_ujian;
			$v_idujiansoal = $row->id_ujian_soal;
			$v_nomorhalaman = $row->nomor_halaman;
			$v_nomorsoal = $row->nomor_soal;
			$v_idsoal = $row->id_soal;
			$v_jenissoal = $row->jenis_soal;
			$v_namasoal = $row->nama_soal;
			$v_tekssoal = $row->teks_soal;
			$v_pilihanke = $row->pilihan_ke;
			$v_teksjawaban = $row->teks_jawaban;
			$v_nilai = $row->nilai;
			$v_umpanbalik = $row->umpanbalik;
			//menginput data cache jawaban peserta ujian
			$rs = DB::connection('mysql')->table('tabel_attempt_detail')
										 ->insert([
													   'id_attempt' => $v_idattempt,
													   'id_ujian' => $v_idujian,
													   'id_ujian_soal' => $v_idujiansoal,
													   'nomor_halaman' => $v_nomorhalaman,
													   'nomor_soal' => $v_nomorsoal,
													   'id_soal' => $v_idsoal,
													   'jenis_soal' => $v_jenissoal,
													   'nama_soal' => $v_namasoal,
													   'teks_soal' => $v_tekssoal,
													   'pilihan_ke' => $v_pilihanke,
													   'teks_jawaban' => $v_teksjawaban,
													   'nilai' => $v_nilai,
													   'umpanbalik' => $v_umpanbalik,
										 ]);
			if(!$rs)
			{
				  $ada_yangtidakberhasiltersimpan = 1;
			}
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}


    public function viewdata_riwayatujian(Request $request)
	{
		$v_idsesi = $request->post_idsesi;
		
		//main function
        $responseText = "";
		$rs = DB::connection('mysql')->table('tabel_attempt')
                                          ->select('id','id_ujian','nama_ujian','informasi_ujian','maximal_attempt','batas_waktu','tanggal_attempt','jam_attempt','id_user','nama_lengkap','email','hp','url_profile_facebook','url_profile_instagram','url_profile_twitter','url_profile_youtube','tempat_tinggal')
										  ->where('id_user',$v_idsesi)
                                          ->get();
        foreach ($rs as $row)
		{
			$v_idriwayat = $row->id;
			$v_idujian = $row->id_ujian;
			$v_namaujian = $row->nama_ujian;
			$v_informasiujian = $row->informasi_ujian;
			$v_maximalattempt = $row->maximal_attempt;
			$v_bataswaktu = $row->batas_waktu;
			$v_tanggalattempt = $row->tanggal_attempt;
			$v_jamattempt = $row->jam_attempt;
			$v_iduser = $row->id_user;
			$v_namalengkap = $row->nama_lengkap;
			$v_email = $row->email;
			$v_hp = $row->hp;
			$v_urlprofilefacebook = $row->url_profile_facebook;
			$v_urlprofileinstagram = $row->url_profile_instagram;
			$v_urlprofiletwitter = $row->url_profile_twitter;
			$v_urlprofileyoutube = $row->url_profile_youtube;
			$v_tempattinggal = $row->tempat_tinggal;
		   
			//response
			$responseText .= $v_idriwayat . '||' . $v_idujian . '||' . $v_namaujian . '||' . $v_informasiujian . '||' . $v_maximalattempt . '||' . $v_bataswaktu . '||' . $v_tanggalattempt . '||' . $v_jamattempt . '||' . $v_iduser . '||' . $v_namalengkap . '||' . $v_email . '||' . $v_hp . '||' . $v_urlprofilefacebook . '||' . $v_urlprofileinstagram . '||' . $v_urlprofiletwitter . '||' . $v_urlprofileyoutube . '||' . $v_tempattinggal . '###';
		}
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}
	
	
	function cek_sisawaktusebelumlanjutmengerjakan(Request $request)
	{
		$v_idriwayatujian = $request->post_idriwayatujian;
		$v_idujian = $request->post_idujian;
		$responseText = "continue";
		
		//get batas waktu ujian
		$v_bataswaktu = "";
		$rs = DB::connection('mysql')->table('tabel_ujian')
                                          ->select('id','batas_waktu')
										  ->where('id',$v_idujian)
                                          ->first();
		$v_bataswaktu = $rs->batas_waktu;  //dalam detik
		
		//get tanggal attempt dan jam attempt
		$timestamp_attempt = "";
		$rs = DB::connection('mysql')->table('tabel_attempt')
                                          ->select('id','timestamp')
										  ->where('id',$v_idriwayatujian)
                                          ->first();
		$timestamp_attempt = $rs->timestamp;
		
		//menghitung batas akhir ujian (menambahkan batas waktu ujian, dengan tanggal attempt dan jam attempt)
		$v_batasakhirujian = $timestamp_attempt + $v_bataswaktu;
		
		//get waktu sekarang
		date_default_timezone_set("Asia/Bangkok");
		$timestamp_waktusekarang = time();
		
		//cek selisih waktu antara waktu sekarang dengan hasil penambahan tersebut. jika selisih kurang dari nol, maka tidak boleh lanjut mengerjakan
		if(($timestamp_waktusekarang == $v_batasakhirujian) || ($timestamp_waktusekarang > $v_batasakhirujian))
		{
			$responseText = "stop";
		}
		
        return response()->json(array(
                                       'respon'=>$responseText
                                    ));
	}

}