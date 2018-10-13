<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Events</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
        <center><h1>Events List</h1></center>
        <br>
        <div class="button">
            <a href="/events/create" class="btn btn-primary ">Add your event here</a>
        </div>
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Artiste</th>
        <th>Date</th>
        <th>Venue</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($events as $event)
      @php
        $date=date('Y-m-d', $event['date']);
        @endphp
      <tr>
        <td>{{$event['id']}}</td>
        <td>{{$event['name']}}</td>
        <td>{{$event['artiste']}}</td>
        <td>{{$date}}</td>
        <td>{{$event['venue']}}</td>

        <td><a href="{{action('EventController@edit', $event['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('EventController@destroy', $event['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
