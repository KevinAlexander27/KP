<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class maincontroller extends Controller
{
    public function home()
    {
        $guru=DB::table('guru')->get();
        // dump($guru);
        return view('test',['guru'=>$guru]);
    }
    public function login(){
        return view('login');
    }
    public function proses(Request $request){
        $id=$request->input('email');
        $pass=$request->input('pass');
        if($id==""){
            if($pass==""){
                dump("id dan password belum anda isi");
                return view('login');
            }
            dump("id belum anda isi");
            return view('login');
        }
        if($pass==""){
            dump("password belum anda isi");
            return view('login');
        }
        $cari = DB::table('guru')->where('user', $id )->value('pass');
        if($pass==$cari){
            $_SESSION["username"] = $id;
            $stat = DB::table('guru')->where('user', $id )->value('status');
            if($stat=="admin"){
                return view('admin/admin_home');
            }
            else{
            return view('user/user_home');
            }
        }
        dump("id atau password yang anda masukan salah");
        return view('login');
    }
}
