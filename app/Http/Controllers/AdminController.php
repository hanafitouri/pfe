<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function getAdmin(){
        $admin = Admin::all();
        return view('liste-admin',['data'=>$admin]);



    }


    public function deleteAdmin($id){
        $admin = Admin::find($id);
        //select * from admin where id = $_GET['id']

        $admin->delete();
        return redirect('/liste-admin')->with('message', 'Admin a ete bien supprimé');

    }

    public function AjoutAdmin(Request $req){

        $admin = new Admin;
        $admin->nom = $req->nom;
        $admin->login = $req->login;
        $admin->email = $req->email;
        $admin->password = $req->password;


        $admin->save();
        //insert into

        return redirect('/liste-admin')->with('message', 'Admin a ete bien ajouté');

    }

public function updateAdmin(Request $req){

    $admin = Admin::find($req->id);
    $admin->nom = $req->nom;
    $admin->login = $req->login;
    $admin->email = $req->email;
    $admin->password = $req->password;


    $admin->save();
    //insert into

    return redirect('/liste-admin')->with('message', 'Admin a ete bien modifié');

}


    public function getAdminId($id){
        $admin = Admin::find($id);
        return view('modifier-admin', ['data'=>$admin]);
    }



}
