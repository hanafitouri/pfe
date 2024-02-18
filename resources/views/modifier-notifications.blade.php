@extends('theme')
@section('contenu')
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Modifier notification</h4>

                                    

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="/modifiernotification" method="POST">
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
                                            <label for="example-search-input" class="col-md-2 col-form-label">Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Name" value="{{$data->name}}"
                                                    id="example-search-input"name="name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="email"  placeholder="Enter Email" value="{{$data->email}}"
                                                    id="example-email-input"name="email">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Job Title</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="job-title"   placeholder="Entrer job-title" value="{{$data->job_title}}"
                                                    id="example-url-input" name="job_title">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Telephone</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="tel"   placeholder="Entrer Telephone" value="{{$data->telephone}}"
                                                    id="example-url-input" name="telephone">
                                            </div>
                                        </div>
                                        <div class="d-grid gap-3 col-3 mx-auto">
                                            <button class="btn btn-primary" type="submit">Modifier</button>
                                          
                                        </div>
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