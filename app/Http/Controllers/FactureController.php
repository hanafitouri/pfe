<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\facture;
class FactureController extends Controller
{
    public function getfacture(){
        $facture = facture::all();
        return view('liste-facture',['data'=>$facture]); 
    

}
public function deletefacture($id){
    $facture = facture::find($id);
    //select * from facture where id = $_GET['id']

    $facture->delete();
    return redirect('/liste-facture')->with('message', 'facture a ete bien supprimée');

}
public function Ajoutfacture(Request $req){

    $facture = new facture;
    $facture->iduser = $req->iduser;
    $facture->quantite = $req->quantite;
    $facture->contenu = $req->contenu;
    $facture->prix = $req->prix;
    $facture->date = $req->date;
   


    $facture->save();
    //insert into

    return redirect('/liste-facture')->with('message', 'facture a ete bien ajoutée');

}
public function updatefacture(Request $req){
    $facture =  facture::find($req->id);
    $facture->iduser = $req->iduser;
    $facture->quantite = $req->quantite;
    $facture->contenu = $req->contenu;
    $facture->prix = $req->prix;
    $facture->date = $req->date;
   


    $facture->save();
    //insert into

    return redirect('/liste-facture')->with('message', 'facture a ete bien Modifiée');

}




public function getfactureId($id){
    $facture = facture::find($id);
    return view('modifier-facture', ['data'=>$facture]);
}
}