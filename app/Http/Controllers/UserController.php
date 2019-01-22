<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $lols = User::select(['name', 'status', 'email'])->get();
        return view('welcome')->with(['lols' => $lols]);
//dd($lols);
        //return view('blog',[
          //  'users' => User::all()]);
    }

    public function destroy($email)
    {
      $kek = User::find($email);
      $kek->delete();
        //User::findByEmail($email)->delete();

        return redirect('/welcome')->with('lololhjhgjhhgdgfd');
    }
}