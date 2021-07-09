@extends('layouts.app')
@section('title')
Create
@endsection
@section('content')
<div class="col-md-12">
    <div class="d-flex justify-content-between align-items-center pt3 pb-2 mb-2 border-bottom">
        <h2> Create a new Cars</h2>
      
    </div>
    <form action="/store" method="POST">
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
</div>
@endsection