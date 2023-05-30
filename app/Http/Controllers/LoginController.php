<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function store(Request $request){

        $request->validate([
            'number_control'=>'required',
            'password'=>'required'
        ]);

        $num_c = $request->number_control;
        $pass = $request->password;

        $user = DB::table('students')->where('number_control', $num_c)->orWhere('password', $pass)->get();

        if (count($user) > 0) {
            return $request->session()->all();
            //return redirect()->route('home.index');
        }else{
            return("invalido");
        }
    }

}
