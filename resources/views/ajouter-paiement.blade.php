@extends('theme')
@section('contenu')
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Ajouter Paiement</h4>

                                    

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="/addpaiement" method="POST"> 
                                    @csrf 
                                        

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Numero de carte</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number" placeholder="num de carte"
                                                    id="example-text-input" name="numcard">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">ID Entreprise</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number" placeholder="ID-Entreprise"
                                                    id="example-search-input" name="identreprise">
                                            </div>
                                        </div>
                                        <div class="d-grid gap-3 col-3 mx-auto">
                                            <button class="btn btn-info" type="submit">Ajouter</button>
                                          
                                        </div>
                                           </form>
                                        
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

                    </div> 
                    @endsection           