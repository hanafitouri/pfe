@extends('theme')
@section('contenu')
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Liste Entreprise-Personnephysique</h4>

                                   

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    @if(session('message'))
                                    <div class="alert alert-success" role="alert">
                                    {{session('message')}}

                                       </div>
                                       @endif
                                    
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                            <th>Name</th>
                                                <th>Logo</th>
                                                <th>Photo-de-profil</th>
                                                <th>E-mail</th>
                                                <th>Image_de_couverture</th>
                                                <th>Job-Title</th>                                             
                                                <th>URl</th>
                                                <th>Adresse</th> 
                                                <th>Telephone</th> 
                                                <th>Mot de passe</th> 
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            @foreach($data as $item)
                                            <tr>
                                            <td>{{$item->name}}</td>
                                                <td>{{$item->logo}}</td>
                                                <td>{{$item->photo_de_profil}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->image_de_couverture}}</td>
                                                <td>{{$item->job_title}}</td>
                                                <td>{{$item->url}}</td>
                                                <td>{{$item->adresse}}</td>
                                                <td>{{$item->telephone}}</td>
                                                <td>{{$item->password}}</td>

                                              
                                                <td><a href="/modifier-entreprise-personnephysique/{{$item->id}}" class="btn btn-success">Modifier</a>
                                                <a href="/suppentreprise-personnephysique/{{$item->id}}" class="btn btn-danger" >Supprimer </a>
                                                </td>
                                            </tr>
                                            @endforeach   
                                            </tbody>
                                        </table>
                                        <div>
           <button onclick="afficherTableau()" type="button" class="btn btn-primary bg-primary bg-opacity-10 text-primary border-0 fw-semibold py-2 px-4">Afficher</button>


                <div id="tableauContainer" style="display: none;">
    
                   <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Departement</th>
                                <th>Police</th>
                                <th>Couleur</th>
                                <th>Facebook</th>
                                <th>Instagram</th>
                                <th>Snapchat</th>
                                <th>Linkedin</th>
                                <th>TikTok</th>
                                <th>YouTube</th>
                                <th>Whatsapp</th>
                                <th>Yelp</th>
                                <th>Github</th>
                                <th>Gitlab</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                            <td>{{$item->departement}}</td>
                            <td>{{$item->police}}</td>
                            <td>{{$item->couleur}}</td>
                            <td>{{$item->facebook}}</td>
                            <td>{{$item->instagram}}</td>
                            <td>{{$item->snapchat}}</td>
                            <td>{{$item->linkedin}}</td>
                            <td>{{$item->tik_tok}}</td>
                            <td>{{$item->youtube}}</td>
                            <td>{{$item->whatsapp}}</td>
                            <td>{{$item->yelp}}</td>
                            <td>{{$item->github}}</td>
                            <td>{{$item->gitlab}}</td>
                               
                                
                            @endforeach 
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function afficherTableau() {
        var tableauContainer = document.getElementById("tableauContainer");
        if (tableauContainer.style.display === "none") {
            tableauContainer.style.display = "block";
        } else {
            tableauContainer.style.display = "none";
        }
    }
</script>
</div>
</div>
</div>


                    @endsection            