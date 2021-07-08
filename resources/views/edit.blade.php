<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Car App</title>
  </head>
  <body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('cars/' . $car->id ) }}" method="POST">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Make:</label>
                            <input type="text" name="make" id="make" class="form-control" value="{{$car->make}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Model:</label>
                            <input type="text" name="model" id="model" class="form-control" value="{{$car->model}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Produced on:</label>
                            <input type="date" name="produced_on" id="produced_on" class="form-control" value="{{$car->produced_on}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" value="submit" class="btn btn-block btn-warning">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>    

  </body>