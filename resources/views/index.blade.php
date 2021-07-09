@extends('layouts.app')
@section('title')
CARS
@endsection
@section('content')
    {{-- <div class="container-fluid"> --}}
        {{-- <div class="jumbotron jumbotron-fluid bg-danger p-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="display-1 text-white">Cars</h1>
                        <p class="lead text-white">web app for car</p>
                    </div>
                    <div class="col-md-6">
                    <img class="h-70" src="https://ichef.bbci.co.uk/news/976/cpsprodpb/118A0/production/_118604817__116721094_mustang.jpg" alt="car">
                    </div>            
                </div>
            </div>
        </div> --}}
        <div class="d-flex justify-content-between align-items-center pt3 pb-2 mb-2 border-bottom">
            <h2>Cars</h2>
            <div class="btn-toobar mb-2 mb-md-0" >
                <a href="/cars/create" class="btn btn-sm btn-primary">ADD CARS</a>
            </div>      
        </div>

        <div class="row">
            {{-- <div class="col-md-6">
                <form action="/create" method="POST">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Make:</label>
                            <input type="text" name="make" id="make" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Model:</label>
                            <input type="text" name="model" id="model" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Produced on:</label>
                            <input type="date" name="produced_on" id="produced_on" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" value="submit" class="btn btn-success w-50 float-right">Create</button>
                        </div>
                    </div>
                </form>
            </div> --}}
            <div class="table-responsive">
                <table class="table table-sm table-bordered table-striped table-hover">
                    <tr>
                        <th>#</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Produced on</th>
                        <th></th>
                    </tr>
                    @foreach ( $allcar as $car )
                    <tr>
                        <td>{{$loop->index}}</td>
                        <td>{{$car->make}}</td>
                        <td>{{$car->model}}</td>
                        <td>{{$car->produced_on}}</td>
                        <td class="text-center">
                            <a href="{{ url('cars/' . $car->id . '/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ url('cars/' . $car->id ) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr> 
                    @endforeach
                    
                </table>
            </div>
        </div>
    {{-- </div> --}}
@endsection
    
   
