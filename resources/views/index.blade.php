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
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid bg-danger p-1">
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
        </div>
        <div class="row">
            <div class="col-md-6">
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
            </div>
            <div class="col-md-6">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Produced on</th>
                        <th></th>
                    </tr>
                    @foreach ( $allcar as $car )
                    <tr>
                        <td>{{$car->make}}</td>
                        <td>{{$car->model}}</td>
                        <td>{{$car->produced_on}}</td>
                        <td>
                            <a href="{{ url('cars/' . $car->id . '/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ url('cars/' . $car->id ) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr> 
                    @endforeach
                    
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>