<?php

namespace App\Http\Controllers;

use App\Player;
use Dotenv\Validator;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    protected function validatorPlayer(array $data)
    {
        return Validator::make([
           'username'=>'required|string|max:20',
           'message'=>'string|max:200',
        ]);
    }

    protected function CreatePlayer(array $data){
        return Player::create([
            'username' => $data['username'],
            'message' => $data['message']
        ]);
    }

    public function show(){
        $players = Player::select(['id','username','message'])->get();
        return view('/players')->with(['players' => $players ]);
    }

    public function showPlayer(){
        $xui = Player::select(['id','username','message'])->get();
        return view('/editPlayer')->with(['xui' => $xui ]);
    }
   public function create(){

        return view('addPlayer');
   }

   public function store( Request $request){
        //dd($request->all());
        Player::create($request->all());
        return redirect()->route('players');

   }

   public function destroy(Request $request){

        $player = Player::find($request->id);
        $player->delete();
        return redirect()->route('players');
   }

   public  function edit(Request $request){


    }


}
