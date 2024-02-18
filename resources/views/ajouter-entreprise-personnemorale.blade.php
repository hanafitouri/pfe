@extends('theme')
@section('contenu')
                    <div class="container-fluid">


                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Ajouter Entreprise-PersonneMorale</h4>

                                    

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="/addentreprise-personnemorale" method="POST"> 
                                    @csrf 
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">Nom</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" placeholder="Nom" id="example-text-input" name="name" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-4 col-form-label">logo</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="file" placeholder="entrer logo" id="example-search-input" name="logo">
                                            </div>
                                        </div>
                                            <div class="mb-3 row">
                                                <label for="example-url-input" class="col-md-4 col-form-label">photo_de_profil</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="file"  placeholder="Enter photo_de_profil"
                                                        id="example-url-input" name="photo_de_profil">
                                        </div>
                                    </div>
                                
                        
                    
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-4 col-form-label">Email</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="email" placeholder="Enter Email" id="example-email-input" name="email">
                                             
                                            </div>
                                        </div>
                                    
                            
                                    
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-4 col-form-label">Adresse</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text"   placeholder="Entrer adresse"
                                                    id="example-url-input" name="adresse">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-4 col-form-label">URL</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="url"  placeholder="Enter URL"
                                                    id="example-url-input" name="url">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-4 col-form-label">Mot de passe</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="password"  placeholder="Entrer password"
                                                    id="example-url-input" name="password">

                                            </div>
                                        </div>
                                                

                                        <div class="d-grid gap-3 col-4 mx-auto">
                                            <button class="btn btn-info" type="submit">Ajouter</button>
                                          
                                        </div>
                                        </form>
                                       
                                        </div>
                                        
                                        </div>

                                    </div>
                                </div>











                            </div> <!-- end col -->
                        </div>
                        </div>
                </div>
                @endsection
                