<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class GudangController extends Controller
{
    public function login (){
        return view('gudang_kami.login');
    }
    public function loginProsess(Request $request){
        //prosess validation
        $credentials =  $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);
        //prosess pengecekan pada database
        if(Auth::attempt($credentials)==true){
            $request->session()->regenerate();
            if(Auth::user()->type==1){
              return redirect()->route('dashboard');   // admin
            } else if(Auth::user()->type==0){
              return redirect()->route('member');
            }else{
                return redirect()->route('login')->withErrors("belum terdaftar silahkan register");
            }
           
        } else{
            return redirect()->route('login')->withErrors("email dan password salah");
        }
    }
    public function register (){
        return view('gudang_kami.register');
    }

    public function registerProcess (Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required|unique:users",
            "password" => "required|min:6",
            "confirm" => "required|same:password"
        ]);
        $data = new User();
        $data->name =  $request->name;
        $data->email =  $request->email;
        $data->password = bcrypt($request->password);
        $user = $data->save();
        event(new Registered($data));
      
        return redirect()->route('registerSuccess',$data->id)->withSuccess("Pendaftaran Berhasil");
    }

    public function registerSuccess($userID){
        return view("gudang_kami/register_succes", [
            "userID" => $userID,
        ]);
    }
    public function contact (){
        return view('gudang_kami.contac');
    }
    public function help (){
        return view('gudang_kami.help');
    }

    // melakukan alokasi data barang

    //read page
    public function viewPage( Request $request, $type){
        $data = $request->session()->get('nameAdmin');
        // check user bener harus login kedalam website
        
        if($data ==  null){
            return redirect()->url('/');
        } else if ($data != null){
            $modalData =  Gudang::where('type', $type)->get();
            if($type == " "){
              $type = "all";
              return view('gudang_kami.view-barang',['barang'=> $modalData,'nameAdmin'=> $data, 'type' => $type]);  
            } 
            return view('gudang_kami.view-barang',['barang'=> $modalData,'nameAdmin'=> $data, 'type' => $type]);
            
        }

    }


    

}

