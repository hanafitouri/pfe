<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entreprisepersonnemorale;
class EntreprisepersonnemoraleController extends Controller
{
    public function getentreprisepersonnemorale(){
        $entreprisepersonnemorale = entreprisepersonnemorale::all();
        return view('liste-entreprise-personnemorale',['data'=>$entreprisepersonnemorale]); 
    

}
public function deleteentreprisepersonnemorale($id){
    $entreprisepersonnemorale = entreprisepersonnemorale::find($id);
    //select * from admin where id = $_GET['id']

    $entreprisepersonnemorale->delete();
    return redirect('/liste-entreprise-personnemorale')->with('message', 'entreprise-personnemorale a ete bien supprimé');

}
public function Ajoutentreprisepersonnemorale(Request $req){

    $entreprisepersonnemorale = new entreprisepersonnemorale;
    $entreprisepersonnemorale->name = $req->name;
    $entreprisepersonnemorale->logo = $req->logo;
    $entreprisepersonnemorale->photo_de_profil = $req->photo_de_profil;
    $entreprisepersonnemorale->email = $req->email;
    $entreprisepersonnemorale->adresse = $req->adresse;
    $entreprisepersonnemorale->url = $req->url;
    $entreprisepersonnemorale->password = $req->password;
   


    $entreprisepersonnemorale->save();
    //insert into

    return redirect('/liste-entreprise-personnemorale')->with('message', 'entreprisepersonemorale a ete bien ajoutée');

}
public function updateentreprisepersonnemorale(Request $req){

    $entreprisepersonnemorale =  entreprisepersonnemorale::find($req->id);
    $entreprisepersonnemorale->name = $req->name;
    $entreprisepersonnemorale->logo = $req->logo;
    $entreprisepersonnemorale->photo_de_profil = $req->photo_de_profil;
    $entreprisepersonnemorale->email = $req->email;
    $entreprisepersonnemorale->adresse = $req->adresse;
    $entreprisepersonnemorale->url = $req->url;
    $entreprisepersonnemorale->password = $req->password;
   


    $entreprisepersonnemorale->save();
    //insert into

    return redirect('/liste-entreprise-personnemorale')->with('message', 'entreprisepersonemorale a ete bien Modifiée');

}
public function getentreprisepersonnemoraleId($id){
    $entreprisepersonnemorale = entreprisepersonnemorale::find($id);
    return view('modifier-entreprise-personnemorale', ['data'=>$entreprisepersonnemorale]);
}
}
