@extends('theme')
@section('contenu')
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Modifier Entreprise-PersonneMorale</h4>

                                    
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="/modifierentreprisepersonnemorale" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$data->id}}" >
                                        
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">Nom</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="Name" placeholder="Nom" value="{{$data->name}}"
                                                id="example-text-input" name="name">
                                            </div>
                                        </div>
                                        
                                            <div class="mb-3 row">
                                                <label for="example-url-input" class="col-md-4 col-form-label">Logo</label>
                                                <div class="col-md-8">
                                                <input class="form-control" type="file"   placeholder="Entrer logo d'entreprise" value="{{$data->logo}}"
                                                        id="example-url-input" name="logo">
                                        </div>
                                    </div>
                                  <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-4 col-form-label">Photo de profil</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="file"  placeholder="Enter photo_de_profil" value="{{$data->photo_de_profil}}"
                                                    id="example-url-input" name="photo_de_profil">
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-4 col-form-label">Email</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="email" placeholder="Enter Email" value="{{$data->email}}"
                                                 id="example-email-input"name="email" >
                                            </div>
                                       
                                           </div>
                            
                                        
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-4 col-form-label">adresse</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text"   placeholder="Entrer telephone" value="{{$data->adresse}}"
                                                    id="example-url-input" name="adresse">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-4 col-form-label">URL</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="url"  placeholder="Enter URL" value="{{$data->url}}"
                                                    id="example-url-input" name="url">
                                            </div>
                                        </div>
                                      
                                                   <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-4 col-form-label">Mot de passe</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="password" placeholder="Mot de passe" value="{{$data->password}}"
                                                id="example-url-input" name="password">
                                            </div>
                                        </div>
                                   

                                        <div class="d-grid gap-3 col-3 mx-auto">
                                            <button class="btn btn-primary" type="submit">Modifier</button>
                                          
                                        </div>
                                       </form>
                                       
                                        </div>
                                        
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                      
                        <!-- end row -->

                        
                        <!-- end row -->

                       
                        <!-- end row -->

                      
                        <!-- end row -->

                       
                        <!-- end row -->

                        
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                    @endsection              