@extends('theme')
@section('contenu')
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Modifier Facture</h4>

                                    

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="/modifierfacture" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$data->id}}" >
                                        

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">ID User</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="id" placeholder="ID" value="{{$data->iduser}}"
                                                    id="example-text-input" name="iduser">
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Quantite</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number"  placeholder="Enter Quantite" value="{{$data->quantite}}"
                                                    id="example-email-input" name="quantite">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Contenu</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text"   placeholder="Entrer Contenu" value="{{$data->contenu}}"
                                                    id="example-url-input" name="contenu">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Prix</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number"   placeholder="Entrer prix" value="{{$data->prix}}"
                                                    id="example-url-input" name="prix">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Date</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="date"   placeholder="jj/mm/aaaa" value="{{$data->date}}"
                                                    id="example-url-input" name="date">
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