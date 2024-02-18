@extends('theme')
@section('contenu')
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Ajouter Entreprise-Personnephysique</h4>

                                   

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="/addentreprise-personnephysique" method="POST"> 
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
                                                <label for="example-url-input" class="col-md-4 col-form-label">photo de profil</label>
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
                                                <label for="example-url-input" class="col-md-4 col-form-label">Image de couverture</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="file"  placeholder="Enter imagedecouverture"
                                                        id="example-url-input" name="imagedecouverture">
                                        </div>
                                    </div>
                                   
                                    <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-4 col-form-label">Job-Title <Title></Title></label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text"   placeholder="Entrer job_title"
                                                    id="example-url-input" name="job_title">
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
                                            <label for="example-url-input" class="col-md-4 col-form-label">Adresse</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text"   placeholder="Entrer adresse"
                                                    id="example-url-input" name="adresse">
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-4 col-form-label">Telephone</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="tel"  placeholder="Enter telephone"
                                                    id="example-url-input" name="telephone">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-4 col-form-label">Mot de passe</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="password"  placeholder="Entrer password"
                                                    id="example-url-input" name="password">

                                            </div>
                                        </div>
                                    
                                        <td> 
                                            <button onclick="afficherContenu()" type="button" class="btn btn-primary bg-primary bg-opacity-10 text-primary border-0 fw-semibold py-2 px-4" style="position: absolute; left: 25px;top: 525px;">Afficher</button>
                                        </td>
                                    
                                        <div id="contenu" style="display: none;">
                                       
                               
                                        <div class="card-body">
                                                        <form action="/addentreprise-personnephysique" method="POST">
                                                              @csrf
                                                                 
                                                                  <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">Departement</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" placeholder="Entrer departement"
                                                id="example-text-input" name="departement" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">Police</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" placeholder=" Entrer police"
                                                id="example-text-input" name="police" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">couleur</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" placeholder=" Entrer couleur"
                                                id="example-text-input" name="couleur" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">facebook</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="url" placeholder="facebook"
                                                id="example-text-input" name="facebook" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">Instagram</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="url" placeholder=" Entrer instagram" 
                                                id="example-text-input" name="instagram" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">Snapchat</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="url" placeholder=" Entrer snapchat"
                                                id="example-text-input" name="snapchat" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">Linkedin</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="url" placeholder=" Entrer linkedin" 
                                                id="example-text-input" name="linkedin" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">Tik Tok</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="url" placeholder="Entrer tik_tok"
                                                id="example-text-input" name="tik_tok" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">youtube</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="url" placeholder="Entrer youtube" 
                                                id="example-text-input" name="youtube" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">whatsapp</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="url" placeholder=" Entrer whatsapp" 
                                                id="example-text-input" name="whatsapp" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">yelp</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="url" placeholder=" Entrer yelp"
                                                id="example-text-input" name="yelp" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">github</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="url" placeholder=" Enrer github"
                                                id="example-text-input" name="github" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4 col-form-label">gitlab</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="url" placeholder="gitlab"
                                                id="example-text-input" name="gitlab" >
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
                                        </div>
                                    
                                        <script>
                                            function afficherContenu() {
                                                var contenu = document.getElementById("contenu");
                                                if (contenu.style.display === "none") {
                                                    contenu.style.display = "block";
                                                } else {
                                                    contenu.style.display = "none";
                                                }
                                            }
                                        </script>

                                     
                                        </div>
                                        
                                        </div>

                                    </div>
                                </div>

                            </div> 
                        </div>
                       

                    
                    
                    @endsection

                