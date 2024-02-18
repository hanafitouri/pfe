<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\digitalbusinesscard;
class DigitalbusinesscardController extends Controller
{
    public function getdigitalbusinesscard(){
        $digitalbusinesscard = digitalbusinesscard::all();
        return view('liste-digitalbusinesscard',['data'=>$digitalbusinesscard]); 
    

}
public function deletedigitalbusinesscard($id){
    $digitalbusinesscard = digitalbusinesscard::find($id);
    //select * from admin where id = $_GET['id']

    $digitalbusinesscard->delete();
    return redirect('/liste-digitalbusinesscard')->with('message', 'digitalbusinesscard a ete bien supprimée');

}
public function Ajoutdigitalbusinesscard(Request $req){

    $digitalbusinesscard = new digitalbusinesscard;
    $digitalbusinesscard->idcard = $req->idcard;
    $digitalbusinesscard->name = $req->name;
    $digitalbusinesscard->url = $req->url;



    $digitalbusinesscard->save();
    //insert into

    return redirect('/liste-digitalbusinesscard')->with('message', 'Digitalbusinesscard ete bien ajoutée');

}
public function updatedigitalbusinesscard(Request $req){

    $digitalbusinesscard =  digitalbusinesscard::find($req->id);
    $digitalbusinesscard->idcard = $req->idcard;
    $digitalbusinesscard->name = $req->name;
    $digitalbusinesscard->url = $req->url;
   $digitalbusinesscard->save();
    //insert into

    return redirect('/liste-digitalbusinesscard')->with('message', 'Digitalbusinesscard ete bien modifiée');
}
public function  getdigitalbusinesscardId($id){
    $digitalbusinesscard = digitalbusinesscard::find($id);
    return view('modifier-digitalbusinesscard', ['data'=>$digitalbusinesscard]);
}
}