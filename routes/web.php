<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login','App\Http\Controllers\IndexController@tampilkan_formlogin')->name('indexcontroller.tampilkan_formlogin');
Route::post('/do_login','App\Http\Controllers\IndexController@do_login')->name('indexcontroller.do_login');
Route::get('/do_logout','App\Http\Controllers\IndexController@do_logout')->name('indexcontroller.do_logout');

Route::group(['middleware' => 'auth'], function(){
	//================================================
	//halaman admin
	//================================================
	//view
	Route::get('/admin/view_home','App\Http\Controllers\AdminController@view_home')->name('admincontroller.view_home');
	Route::get('/admin/view_inputujian','App\Http\Controllers\AdminController@view_inputujian')->name('admincontroller.view_inputujian');
	Route::get('/admin/view_updateujian','App\Http\Controllers\AdminController@view_updateujian')->name('admincontroller.view_updateujian');
	Route::get('/admin/view_listujian','App\Http\Controllers\AdminController@view_listujian')->name('admincontroller.view_listujian');
	Route::get('/admin/view_inputkonfigurasipenyajianujian','App\Http\Controllers\AdminController@view_inputkonfigurasipenyajianujian')->name('admincontroller.view_inputkonfigurasipenyajianujian');
	Route::get('/admin/view_updatekonfigurasipenyajianujian','App\Http\Controllers\AdminController@view_updatekonfigurasipenyajianujian')->name('admincontroller.view_updatekonfigurasipenyajianujian');
	Route::get('/admin/view_listpesertaujian','App\Http\Controllers\AdminController@view_listpesertaujian')->name('admincontroller.view_listpesertaujian');
	Route::get('/admin/view_updategradingpesertaujian','App\Http\Controllers\AdminController@view_updategradingpesertaujian')->name('admincontroller.view_updategradingpesertaujian');
	Route::get('/admin/view_inputsoalmultiplechoice','App\Http\Controllers\AdminController@view_inputsoalmultiplechoice')->name('admincontroller.view_inputsoalmultiplechoice');
	Route::get('/admin/view_updatesoalmultiplechoice','App\Http\Controllers\AdminController@view_updatesoalmultiplechoice')->name('admincontroller.view_updatesoalmultiplechoice');
	Route::get('/admin/view_listsoal','App\Http\Controllers\AdminController@view_listsoal')->name('admincontroller.view_listsoal');
	Route::get('/admin/view_inputuser','App\Http\Controllers\AdminController@view_inputuser')->name('admincontroller.view_inputuser');
	Route::get('/admin/view_listuser','App\Http\Controllers\AdminController@view_listuser')->name('admincontroller.view_listuser');
	Route::get('/admin/view_updateuser','App\Http\Controllers\AdminController@view_updateuser')->name('admincontroller.view_updateuser');
	Route::get('/admin/view_updatesettingtheme','App\Http\Controllers\AdminController@view_updatesettingtheme')->name('admincontroller.view_updatesettingtheme');
	//ajax
	Route::get('/admin/view_listujian/data','App\Http\Controllers\AdminController@viewdata_listujian')->name('admincontroller.viewdata_listujian');
	Route::get('/admin/view_updateujian/data','App\Http\Controllers\AdminController@viewdata_updateujian')->name('admincontroller.viewdata_updateujian');
	Route::get('/admin/view_updatekonfigurasipenyajianujian_getdaftarhalaman/data','App\Http\Controllers\AdminController@viewdata_updatekonfigurasipenyajianujian_getdaftarhalaman')->name('admincontroller.viewdata_updatekonfigurasipenyajianujian_getdaftarhalaman');
	Route::get('/admin/view_updatekonfigurasipenyajianujian_getdaftarhalamanitem/data','App\Http\Controllers\AdminController@viewdata_updatekonfigurasipenyajianujian_getdaftarhalamanitem')->name('admincontroller.viewdata_updatekonfigurasipenyajianujian_getdaftarhalamanitem');
	Route::get('/admin/view_updategradingpesertaujian/data','App\Http\Controllers\AdminController@viewdata_updategradingpesertaujian')->name('admincontroller.viewdata_updategradingpesertaujian');
	Route::get('/admin/view_listuser/data','App\Http\Controllers\AdminController@viewdata_listuser')->name('admincontroller.viewdata_listuser');
	Route::get('/admin/view_updateuser/data','App\Http\Controllers\AdminController@viewdata_updateuser')->name('admincontroller.viewdata_updateuser');
	Route::get('/admin/view_listsoal/data','App\Http\Controllers\AdminController@viewdata_listsoal')->name('admincontroller.viewdata_listsoal');
	Route::get('/admin/view_updatesoalmultiplechoice/data','App\Http\Controllers\AdminController@viewdata_updatesoalmultiplechoice')->name('admincontroller.viewdata_updatesoalmultiplechoice');
	//insert,update,delete
	Route::post('/admin/do_inputujian','App\Http\Controllers\AdminController@do_inputujian')->name('admincontroller.do_inputujian');
	Route::post('/admin/do_updateujian','App\Http\Controllers\AdminController@do_updateujian')->name('admincontroller.do_updateujian');
	Route::get('/admin/do_deleteujian','App\Http\Controllers\AdminController@do_deleteujian')->name('admincontroller.do_deleteujian');
	Route::get('/admin/do_aktivasiujian','App\Http\Controllers\AdminController@do_aktivasiujian')->name('admincontroller.do_aktivasiujian');
	Route::post('/admin/do_inputkonfigurasipenyajianujian','App\Http\Controllers\AdminController@do_inputkonfigurasipenyajianujian')->name('admincontroller.do_inputkonfigurasipenyajianujian');
	Route::get('/admin/do_updatekonfigurasipenyajianujian','App\Http\Controllers\AdminController@do_updatekonfigurasipenyajianujian')->name('admincontroller.do_updatekonfigurasipenyajianujian');
	Route::get('/admin/do_hapuspesertaujian','App\Http\Controllers\AdminController@do_hapuspesertaujian')->name('admincontroller.do_hapuspesertaujian');
	Route::get('/admin/do_updategradingpesertaujian','App\Http\Controllers\AdminController@do_updategradingpesertaujian')->name('admincontroller.do_updategradingpesertaujian');
	Route::post('/admin/do_tambahsoalmultiplechoice','App\Http\Controllers\AdminController@do_tambahsoalmultiplechoice')->name('admincontroller.do_tambahsoalmultiplechoice');
	Route::post('/admin/do_updatesoalmultiplechoice','App\Http\Controllers\AdminController@do_updatesoalmultiplechoice')->name('admincontroller.do_updatesoalmultiplechoice');
	Route::get('/admin/do_deletesoalmultiplechoice','App\Http\Controllers\AdminController@do_deletesoalmultiplechoice')->name('admincontroller.do_deletesoalmultiplechoice');
	Route::post('/admin/do_inputuser','App\Http\Controllers\AdminController@do_inputuser')->name('admincontroller.do_inputuser');
	Route::post('/admin/do_updateuser','App\Http\Controllers\AdminController@do_updateuser')->name('admincontroller.do_updateuser');
	Route::get('/admin/do_deleteuser','App\Http\Controllers\AdminController@do_deleteuser')->name('admincontroller.do_deleteuser');
	Route::get('/admin/do_updatesettingtheme','App\Http\Controllers\AdminController@do_updatesettingtheme')->name('admincontroller.do_updatesettingtheme');

	//================================================
	//halaman nonadmin
	//================================================
	//view
	Route::get('/nonadmin/view_home','App\Http\Controllers\NonadminController@view_home')->name('nonadmincontroller.view_home');
	Route::get('/nonadmin/view_listujian','App\Http\Controllers\NonadminController@view_listujian')->name('nonadmincontroller.view_listujian');
	Route::get('/nonadmin/view_ujian','App\Http\Controllers\NonadminController@view_ujian')->name('nonadmincontroller.view_ujian');
	Route::get('/nonadmin/view_riwayatujian','App\Http\Controllers\NonadminController@view_riwayatujian')->name('nonadmincontroller.view_riwayatujian');
	//ajax
	Route::get('/nonadmin/view_listujian/data','App\Http\Controllers\NonadminController@viewdata_listujian')->name('nonadmincontroller.viewdata_listujian');
	Route::get('/nonadmin/view_riwayatujian/data','App\Http\Controllers\NonadminController@viewdata_riwayatujian')->name('nonadmincontroller.viewdata_riwayatujian');
	Route::get('/nonadmin/view_kerjakanujian/caching','App\Http\Controllers\NonadminController@view_kerjakanujian_caching')->name('nonadmincontroller.view_kerjakanujian_caching');
	Route::get('/nonadmin/view_kerjakanujian/timer','App\Http\Controllers\NonadminController@view_kerjakanujian_timer')->name('nonadmincontroller.view_kerjakanujian_timer');
	//insert,update,delete
	Route::get('/nonadmin/cek_sisaattempt','App\Http\Controllers\NonadminController@cek_sisaattempt')->name('nonadmincontroller.cek_sisaattempt');
	Route::get('/nonadmin/get_idattempt','App\Http\Controllers\NonadminController@get_idattempt')->name('nonadmincontroller.get_idattempt');
	//Route::get('/nonadmin/cek_statusaktivitassebelummulaimengerjakan','App\Http\Controllers\NonadminController@cek_statusaktivitassebelummulaimengerjakan')->name('nonadmincontroller.cek_statusaktivitassebelummulaimengerjakan');
	Route::get('/nonadmin/cek_sisawaktusebelumlanjutmengerjakan','App\Http\Controllers\NonadminController@cek_sisawaktusebelumlanjutmengerjakan')->name('nonadmincontroller.cek_sisawaktusebelumlanjutmengerjakan');
	Route::get('/nonadmin/do_mulaimengerjakanataulanjutmengerjakan','App\Http\Controllers\NonadminController@do_mulaimengerjakanataulanjutmengerjakan')->name('nonadmincontroller.do_mulaimengerjakanataulanjutmengerjakan');
	Route::get('/nonadmin/hitung_sisawaktuujian','App\Http\Controllers\NonadminController@hitung_sisawaktuujian')->name('nonadmincontroller.hitung_sisawaktuujian');
	Route::get('/nonadmin/get_informasiujian','App\Http\Controllers\NonadminController@get_informasiujian')->name('nonadmincontroller.get_informasiujian');
	Route::get('/nonadmin/get_daftarnomorsoalujian','App\Http\Controllers\NonadminController@get_daftarnomorsoalujian')->name('nonadmincontroller.get_daftarnomorsoalujian');
	Route::get('/nonadmin/get_datanomorhalamanujian','App\Http\Controllers\NonadminController@get_datanomorhalamanujian')->name('nonadmincontroller.get_datanomorhalamanujian');
	Route::get('/nonadmin/get_daftarnomorhalamanujian','App\Http\Controllers\NonadminController@get_daftarnomorhalamanujian')->name('nonadmincontroller.get_daftarnomorhalamanujian');
	Route::get('/nonadmin/get_daftarsoalujian','App\Http\Controllers\NonadminController@get_daftarsoalujian')->name('nonadmincontroller.get_daftarsoalujian');
	Route::get('/nonadmin/get_daftarkuncijawaban','App\Http\Controllers\NonadminController@get_daftarkuncijawaban')->name('nonadmincontroller.get_daftarkuncijawaban');
	Route::get('/nonadmin/do_backupjawabanpeserta','App\Http\Controllers\NonadminController@do_backupjawabanpeserta')->name('nonadmincontroller.do_backupjawabanpeserta');

	Route::get('/nonadmin/get_restoredaftarnomorhalamanujian','App\Http\Controllers\NonadminController@get_restoredaftarnomorhalamanujian')->name('nonadmincontroller.get_restoredaftarnomorhalamanujian');
	Route::get('/nonadmin/get_restoredaftarsoalujian','App\Http\Controllers\NonadminController@get_restoredaftarsoalujian')->name('nonadmincontroller.get_restoredaftarsoalujian');
	Route::get('/nonadmin/get_restoredaftarkuncijawaban','App\Http\Controllers\NonadminController@get_restoredaftarkuncijawaban')->name('nonadmincontroller.get_restoredaftarkuncijawaban');

	

	Route::get('/nonadmin/do_selesaikanujian','App\Http\Controllers\NonadminController@do_selesaikanujian')->name('nonadmincontroller.do_selesaikanujian');
});

