<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event management system</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>

    <div class="container">
        <center><h2>Event Management System</h2></center><br/>
        <form method="post" action="{{url('events')}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Name">Name:</label>
              <input type="text" class="form-control" name="name">
            </div>
          </div>
          {{-- <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="Email">Email:</label>
                <input type="text" class="form-control" name="email">
              </div>
            </div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="Number">Phone Number:</label>
                <input type="text" class="form-control" name="number">
              </div>
            </div> --}}
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Artiste">Artiste:</label>
              <input type="Text" name="artiste">
           </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <strong>Date : </strong>
              <input class="date form-control"  type="text" id="datepicker" name="date">
           </div>
          </div>
           <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                  <label>Event Venue</label>
                  <select name="venue">
                    <option value="Mainland">Mainland</option>
                    <option value="Island">Island</option>
                    <option value="Abuja">Abuja</option>
                    <option value="Portharcourt">Portharcourt</option>
                  </select>
              </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <script type="text/javascript">
          $('#datepicker').datepicker({
              autoclose: true,
              format: 'dd-mm-yyyy'
           });
      </script>
</body>
</html>
