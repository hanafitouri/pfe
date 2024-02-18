@extends('theme')
@section('contenu')
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Liste DigitalBusinessCard</h4>

                                    
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
                                                <th>IDCard</th>
                                                <th>Name</th>
                                                <th>URl</th>
                                                
                                                
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            @foreach($data as $item)
                                            <tr>
                                                <td>{{$item->idcard}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->url}}</td>
                                                <td><a href="/modifier-digitalbusinesscard/{{$item->id}}" class="btn btn-success">Modifier</a>
                                            
                                            <a href="/suppdigitalbusinesscard/{{$item->id}}" class="btn btn-danger" >Supprimer </a>
                                        </td>
                                        </tr>
                                        @endforeach
                                        
                                            </tbody>
                                        </table>
                                      
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
    @endsection           