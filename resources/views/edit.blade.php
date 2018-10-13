<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Event Management system</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit event</h2><br  />
        <form method="post" action="{{action('EventController@update', $event->id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
          <input type="text" class="form-control" name="name" value="{{$event->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Artiste</label>
              <input type="text" class="form-control" name="artiste" value="{{$event->artiste}}">
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
            <div class="form-group col-md-4" style="margin-left:38px">
                <label>Venue</label>
                <select name="office">
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
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
