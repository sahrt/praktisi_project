<?php

namespace App\Http\Controllers;

use App\Models\Kucing;
use App\Models\penguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index (Request $request){
        $nameAdmin = Auth::user();
        $request->session()->put('nameAdmin',$nameAdmin);
        $nameAdmin = $request->session()->get('nameAdmin');
        $user =  User::all();
        return view ('gudang_kami/dashboard',['member'=> $user, 'nameAdmin'=>$nameAdmin])->with("success","login berhasil trimakasih sudah bergabung");
    }
    public function list (){
        $user  =  User::all();
        return view ('gudang_kami/list',['list'=> $user]);
    }
    public function logout (Request $request){
        Auth::logout();
        $request->session()->forget('nameAdmin');
        return redirect('/')->withErrors("Selamat Tinggal");
    }




    //user view client
    public function getView ($jenis='noting', $id=0){
        $users =Kucing::join('barangs','barangs.kode_jenis','=','kucings.id')
        ->where('barangs.id', $id)->get();
        return view('project.view',['viewKucing' => $users]);
    }
    public function getAll (){
        $name = Auth::user();
        $users =Kucing::join('barangs','barangs.kode_jenis','=','kucings.id')
        ->get();
        return view('project.index',['daftarKucing' => $users, 'name' => $name]);
    }
    public function getlist (){
        $users =Kucing::select('jenis')->get();
        return view('project.list',['daftarType' => $users]);
    }
  
    public function getdaftar ($id){
        $users =kucing::join('barangs','barangs.kode_jenis','=','kucings.id')
        ->where('kucings.jenis','=',$id)
        ->get();
        return view('project.daftar',['daftarCari' => $users]);
    }
    public function getContact(){
        return view('project.contac');
    }
}
