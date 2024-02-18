<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entreprisepersonnephysique;
class EntreprisepersonnephysiqueController extends Controller
{
    public function getentreprisepersonnephysique(){
        $entreprisepersonnephysique = entreprisepersonnephysique::all();
        return view('liste-entreprise-personnephysique',['data'=>$entreprisepersonnephysique]); 
    

}
public function deleteentreprisepersonnephysique($id){
    $entreprisepersonnephysique = entreprisepersonnephysique::find($id);
    //select * from admin where id = $_GET['id']

    $entreprisepersonnephysique->delete();
    return redirect('/liste-entreprise-personnephysique')->with('message', 'entreprise-personnephysique a ete bien supprimée');

}
public function Ajoutentreprisepersonnephysique(Request $req){

    $entreprisepersonnephysique = new entreprisepersonnephysique;
    $entreprisepersonnephysique->name = $req->name;
    $entreprisepersonnephysique->logo = $req->logo;
    $entreprisepersonnephysique->photo_de_profil = $req->photo_de_profil;
    $entreprisepersonnephysique->email = $req->email;
    $entreprisepersonnephysique->image_de_couverture = $req->job_title;
    $entreprisepersonnephysique->job_title = $req->job_title;

    $entreprisepersonnephysique->adresse = $req->adresse;
    $entreprisepersonnephysique->telephone = $req->telephone;
    $entreprisepersonnephysique->url = $req->url;
    $entreprisepersonnephysique->password = $req->password;
    $entreprisepersonnephysique->departement = $req->departement;
    $entreprisepersonnephysique->police = $req->police;
    $entreprisepersonnephysique->couleur = $req->couleur;
    $entreprisepersonnephysique->facebook = $req->facebook;
    $entreprisepersonnephysique->instagram = $req->instagram;
    $entreprisepersonnephysique->snapchat = $req->snapchat;
    $entreprisepersonnephysique->linkedin = $req->linkedin;
    $entreprisepersonnephysique->youtube = $req->youtube;
    $entreprisepersonnephysique->tik_tok = $req->tik_tok;
    $entreprisepersonnephysique->whatsapp = $req->whatsapp;
    $entreprisepersonnephysique->yelp = $req->yelp;
    $entreprisepersonnephysique->github = $req->github;
    $entreprisepersonnephysique->gitlab = $req->gitlab;


    $entreprisepersonnephysique->save();
    //insert into

    return redirect('/liste-entreprise-personnephysique')->with('message', 'entreprisepersonephysique a ete bien ajoutée');

}
public function updateentreprisepersonnephysique(Request $req){

    $entreprisepersonnephysique = entreprisepersonnephysique::find($req->id);
    $entreprisepersonnephysique->name = $req->name;
    $entreprisepersonnephysique->logo = $req->logo;
    $entreprisepersonnephysique->photo_de_profil = $req->photo_de_profil;
    $entreprisepersonnephysique->email = $req->email;
    $entreprisepersonnephysique->image_de_couverture = $req->job_title;
    $entreprisepersonnephysique->job_title = $req->job_title;

    $entreprisepersonnephysique->adresse = $req->adresse;
    $entreprisepersonnephysique->telephone = $req->telephone;
    $entreprisepersonnephysique->url = $req->url;
    $entreprisepersonnephysique->password = $req->password;
    $entreprisepersonnephysique->departement = $req->departement;
    $entreprisepersonnephysique->police = $req->police;
    $entreprisepersonnephysique->couleur = $req->couleur;
    $entreprisepersonnephysique->facebook = $req->facebook;
    $entreprisepersonnephysique->instagram = $req->instagram;
    $entreprisepersonnephysique->snapchat = $req->snapchat;
    $entreprisepersonnephysique->linkedin = $req->linkedin;
    $entreprisepersonnephysique->youtube = $req->youtube;
    $entreprisepersonnephysique->tik_tok = $req->tik_tok;
    $entreprisepersonnephysique->whatsapp = $req->whatsapp;
    $entreprisepersonnephysique->yelp = $req->yelp;
    $entreprisepersonnephysique->github = $req->github;
    $entreprisepersonnephysique->gitlab = $req->gitlab;
    $entreprisepersonnephysique->save();
    //insert into

    return redirect('/liste-entreprise-personnephysique')->with('message', 'entreprisepersonephysique a ete bien Modifiée');

}
public function getentreprisepersonnephysiqueId($id){
    $entreprisepersonnephysique = entreprisepersonnephysique::find($id);
    return view('modifier-entreprise-personnephysique', ['data'=>$entreprisepersonnephysique]);
}
}