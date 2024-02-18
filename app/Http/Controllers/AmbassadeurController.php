<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambassadeur;
class AmbassadeurController extends Controller
{
    public function getAmbassadeur(){
        $ambassadeur = ambassadeur::all();
        return view('liste-ambassadeur',['data'=>$ambassadeur]);



}
public function deleteAmbassadeur($id){
    $ambassadeur = ambassadeur::find($id);
    //select * from am$ambassadeur where id = $_GET['id']

    $ambassadeur->delete();
    return redirect('/liste-ambassadeur')->with('message', 'Ambassadeur a ete bien supprimé');

}
public function AjoutAmbassadeur(Request $req){

    $ambassadeur = new Ambassadeur;
    $ambassadeur->name = $req->name;
    $ambassadeur->login = $req->login;
    $ambassadeur->email = $req->email;
    $ambassadeur->password = $req->password;
   


    $ambassadeur->save();
    //insert into

    return redirect('/liste-ambassadeur')->with('message', 'Ambassadeur a ete bien ajouté');

}

public function updateAmbassadeur(Request $req){

    $ambassadeur =  Ambassadeur::find($req->id);
    $ambassadeur->name = $req->name;
    $ambassadeur->login = $req->login;
    $ambassadeur->email = $req->email;
    $ambassadeur->password = $req->password;
   


    $ambassadeur->save();
    //insert into

    return redirect('/liste-ambassadeur')->with('message', 'Ambassadeur a ete bien modifié');

}




public function getAmbassadeurId($id){
    $ambassadeur = ambassadeur::find($id);
    return view('modifier-ambassadeur', ['data'=>$ambassadeur]);
}
}

