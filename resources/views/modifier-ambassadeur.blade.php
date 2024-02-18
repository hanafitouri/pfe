@extends('theme')
@section('contenu')
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Modifier Ambassadeur</h4>

                                    

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="/modifierambassadeur" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$data->id}}" >
                                        

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder=" enter Nom" value="{{$data->name}}"
                                                    id="example-text-input" name="name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Login</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Login" value="{{$data->login}}"
                                                    id="example-search-input" name="login">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="email"  placeholder="Enter Email" value="{{$data->email}}"
                                                    id="example-email-input" name="email">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Mot de passe</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password"   placeholder="Mot de passe" value="{{$data->password}}"
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