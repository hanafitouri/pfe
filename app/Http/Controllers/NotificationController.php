<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notification;

class NotificationController extends Controller
{
    public function getnotification(){
        $notification = notification::all();
        return view('liste-notifications',['data'=>$notification]);

}
public function deletenotification($id){
    $notification = notification::find($id);
    //select * from notification where id = $_GET['id']

    $notification->delete();
    return redirect('/liste-notifications')->with('message', 'notification a ete bien supprimé');

}
public function Ajoutnotification(Request $req){

    $notification = new notification;
    $notification->iduser = $req->iduser;
    $notification->name = $req->name;
    $notification->email = $req->email;
    $notification->job_title = $req->job_title;
    $notification->telephone = $req->telephone;
   


    $notification->save();
    //insert into

    return redirect('/liste-notifications')->with('message', 'notification a ete bien ajouté');

}
public function updatenotification(Request $req){

    $notification = notification::find($req->id);;
    $notification->iduser = $req->iduser;
    $notification->name = $req->name;
    $notification->email = $req->email;
    $notification->job_title = $req->job_title;
    $notification->telephone = $req->telephone;
   


    $notification->save();
    //insert into

    return redirect('/liste-notifications')->with('message', 'notification a ete bien Modifiée');

}




public function getnotificationId($id){
    $notification = notification::find($id);
    return view('modifier-notifications', ['data'=>$notification]);
}


}
