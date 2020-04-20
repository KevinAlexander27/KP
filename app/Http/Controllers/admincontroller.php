<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function periodeinput(){
        $test=DB::table('input')->where('id', "1" )->value('id');
        if($test!=NULL){
            $start=DB::table('input')->where('id', "1" )->value('start');
            $end=DB::table('input')->where('id', "1" )->value('finish');
            dump("periode input akan berjalan pada tanggal ".$start." hingga tanggal ".$end);
            return view('admin/admin_periodeinput2');
        }
        dump("periode input masih tidak aktif");
        return view('admin/admin_periodeinput');
    }
// <!--===============================================================================================-->
    public function cperiodeinput(Request $request){
        $start=$request->input('start');
        $end=$request->input('end');
        if($start!=NULL){
            if($end!=NULL){
                dump("periode input akan dimulai tanggal ".$start." dan berahkir pada tanggal ".$end);
                $test=DB::table('input')->where('id', "1" )->value('id');
                if($test!=NULL){
                    DB::table('input')->where('id', '=', "1")->delete();
                }
                DB::table('input')->insert(
                    ['id' =>"1",'start' => $start, 'finish' => $end]
                );
                return view('admin/admin_periodeinput2');
            }
        }
        else{
            dump("anda belum memasukan periode input");
            $test=DB::table('input')->where('id', "1" )->value('id');
            if($test!=NULL){
                $start=DB::table('input')->where('id', "1" )->value('start');
                $end=DB::table('input')->where('id', "1" )->value('finish');
                dump("periode input akan berjalan pada tanggal ".$start." hingga tanggal ".$end);
                return view('admin/admin_periodeinput2');
            }
            else{
                return view('admin/admin_periodeinput');
            }
        }

    }
// <!--===============================================================================================-->
    public function dperiodeinput(Request $request){
        dump("periode input telah di non aktifkan");
        DB::table('input')->where('id', '=', "1")->delete();
        return view('admin/admin_periodeinput');
    }
// <!--===============================================================================================-->
    public function newguru(Request $request){
        $nama=$request->input('nama');
        if($nama!=NULL){
            $cek=DB::table('guru')->where('nama', $nama )->value('id');
            if($cek==NULL){
                DB::table('guru')->insert(
                    ['nama' => $nama, 'user' =>$nama,'pass' => "password",'status' => "-"]
                );
                dump("guru ".$nama." telah masuk ke database");
                return view('admin/admin_guru_new');
            }
            else{
                dump("guru yang dengan nama ".$nama." telah ada di database");
                return view('admin/admin_guru_new');
            }
        }
        else{
            dump("anda belum memasukan nama guru yang akan dimasukan ke database");
            return view('admin/admin_guru_new');
        }
    }
// <!--===============================================================================================-->
    public function newkelas(Request $request){
        $nama=$request->input('nama');
        $wali=$request->input('wali');
        if($nama!==NULL){
            if($wali!=NULL){
                $id_wali = DB::table('guru')->where('nama', $wali )->value('id');
                if($id_wali!=NULL){
                DB::table('kelas')->insert(
                    ['nama' => $nama, 'id_wali' =>$id_wali]
                );
                dump("kelas ".$nama." telah masuk ke database");
                return view('admin/admin_kelas_new');
                }
                else{
                    dump("guru yang anda masukan tidak ada");
                    return view('admin/admin_kelas_new');
                }
            }
            else{
                dump("anda belum memasukan nama guru wali");
                return view('admin/admin_kelas_new');
            }
        }
        else{
            dump("anda belum memasukan nama kelas");
            return view('admin/admin_kelas_new');
        }
    }
// <!--===============================================================================================-->
    public function newpelajaran(Request $request){
        $nama=$request->input('nama');
        $kelas=$request->input('kelas');
        $guru=$request->input('guru');
        if($nama!=NULL){
            if($kelas!=NULL){
                if($guru!=NULL){
                    $cekkelas=DB::table('kelas')->where('nama', $kelas )->value('id');
                    if($cekkelas!=NULL){
                        $cekguru=DB::table('guru')->where('nama', $guru )->value('id');
                        if($cekguru!=NULL){
                            $cekid1=DB::table('pelajaran')->where('nama', $nama )->where('id_kelas',$cekkelas)->where('id_guru',$cekguru)->value('id');
                            if($cekid1!=NULL){
                                dump("pelajaran ".$nama." untuk kelas ".$kelas." dengan guru pengajar ".$guru." sudah ada di database");
                                return view('admin/admin_pelajaran_new');
                            }
                            else{
                            DB::table('pelajaran')->insert(
                                ['nama' => $nama, 'id_kelas' =>$cekkelas, 'id_guru' =>$cekguru]
                            );
                            dump("pelajaran ".$nama." untuk kelas ".$kelas." dengan pengajar ".$guru." telah masuk ke database");
                            return view('admin/admin_pelajaran_new');
                        }
                        }
                        else{
                            dump("nama guru pengajar yang anda masukan belum ada di database");
                            return view('admin/admin_pelajaran_new');
                        }
                    }
                    else{
                        dump("kelas yang anda masukan belum ada di database");
                        return view('admin/admin_pelajaran_new');
                    }
                }
                else{
                    dump("anda belum memasukan nama guru pengajar");
                    return view('admin/admin_pelajaran_new');
                }
            }
            else{
                dump("anda belum memasukan nama kelas");
                return view('admin/admin_pelajaran_new');
            }
        }
        else{
            dump("anda belum memasukan nama pelajaran");
            return view('admin/admin_pelajaran_new');
        }
    }
// <!--===============================================================================================-->
public function dguru(Request $request){
    $id=$request->guru;
    $nama=DB::table('guru')->where('id', $id )->value('nama');
    DB::table('guru')->where('id', '=', $id)->delete();
    // dump("guru dengan nama ".$nama." telah dihapus dari database");
    return redirect('admin_guru_old')->with('status','data guru telah di delete');
}
// <!--===============================================================================================-->
public function dpelajaran(Request $request){
    $id=$request->pelajaran;
    DB::table('pelajaran')->where('id', '=', $id)->delete();
    // dump("guru dengan nama ".$nama." telah dihapus dari database");
    return redirect('admin_pelajaran_old')->with('status','data pelajaran telah di delete');
}
// <!--===============================================================================================-->
public function dkelas(Request $request){
    $id=$request->kelas;
    DB::table('kelas')->where('id', '=', $id)->delete();
    // dump("guru dengan nama ".$nama." telah dihapus dari database");
    return redirect('admin_kelas_old')->with('status','data kelas telah di delete');
}
// <!--===============================================================================================-->
public function guru_old(){
    $guru=DB::table('guru')->get();
    // dump($guru);
    return view('admin/admin_guru_old',['guru'=>$guru]);
}
// <!--===============================================================================================-->
public function pelajaran_old(){
    $pelajaran=DB::table('pelajaran')->get();
    // dump($guru);
    return view('admin/admin_pelajaran_old',['pelajaran'=>$pelajaran]);
}
// <!--===============================================================================================-->
public function kelas_old(){
    $kelas=DB::table('kelas')->get();
    // dump($guru);
    return view('admin/admin_kelas_old',['kelas'=>$kelas]);
}
// <!--===============================================================================================-->

public static function cariguru(int $request){
    $id=$request;
    $nama=DB::table('guru')->where('id', $id )->value('nama');
    return $nama;
}
// <!--===============================================================================================-->

public static function carikelas(int $request){
    $id=$request;
    $nama=DB::table('kelas')->where('id', $id )->value('nama');
    return $nama;
}
// <!--===============================================================================================-->
public function guru_edit(Request $request){
    $id=$request->id;
    $nama=$request->nama;
    $user=$request->user;
    $pass=$request->pass;
    // dump($id,$nama,$user,$pass);
    if($nama!=NULL){
        if($user!=NULL){
            if($pass!=NULL){
    $affected = DB::table('guru')
                ->where('id', $id)
                ->update(['nama' => $nama]);
      $affected = DB::table('guru')
                ->where('id', $id)
                ->update(['user' => $user]);
      $affected = DB::table('guru')
                ->where('id', $id)
                ->update(['pass' => $pass]);
      return redirect('admin_guru_old')->with('status','data guru telah diupdate');
            }
            else{
                return redirect('admin_guru_old')->with('status','data tidak diupdate karena anda tidak mengisi password guru');
            }
        }
        else{
            return redirect('admin_guru_old')->with('status','data tidak diupdate karena anda tidak mengisi username guru');
        }
    }else{
        return redirect('admin_guru_old')->with('status','data tidak diupdate karena anda tidak mengisi nama guru');
    }
}
// <!--===============================================================================================-->
public function guru_edit_page(){
    return view('admin/admin_guru_edit');
}
// <!--===============================================================================================-->
public function eguru(int $request){
    $nama=DB::table('guru')->where('id', $request )->value('nama');
    $user=DB::table('guru')->where('id', $request )->value('user');
    $pass=DB::table('guru')->where('id', $request )->value('pass');
    return redirect('admin_guru_edit')->with('id',$request)->with('nama',$nama)->with('user',$user)->with('pass',$pass);
}
// <!--===============================================================================================-->

}