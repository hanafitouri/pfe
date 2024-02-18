<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paiement;
class PaiementController extends Controller
{
    public function getpaiement(){
        $paiement = paiement::all();
        return view('liste-paiement',['data'=>$paiement]); 
    

}
public function deletepaiement($id){
    $paiement = paiement::find($id);
    //select * from paiement$paiement where id = $_GET['id']

    $paiement->delete();
    return redirect('/liste-paiement')->with('message', 'paiement a ete bien supprimé');

}
public function Ajoutpaiement(Request $req){

    $paiement = new paiement;
    $paiement->numcard = $req->numcard;
    $paiement->identreprise = $req->identreprise;
   


    $paiement->save();
    //insert into

    return redirect('/liste-paiement')->with('message', 'paiement a ete bien ajouté');

}
public function updatepaiement(Request $req){

    $paiement = paiement::find($req->id);
    $paiement->numcard = $req->numcard;
    $paiement->identreprise = $req->identreprise;
   


    $paiement->save();
    //insert into

    return redirect('/liste-paiement')->with('message', 'paiement a ete bien Modifié');

}

public function getpaiementId($id){
    $paiement = paiement::find($id);
    return view('modifier-paiement', ['data'=>$paiement]);
}


}
