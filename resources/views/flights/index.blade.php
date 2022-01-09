@include('includes.above')
@include('includes.head')
@include('includes.sidebar')
@include('includes.navbar')

        <section class="content">
            <!-- ./wrapper -->
        <div class="content-wrapper">

  <!-- /.card-header -->
  <div class="card-body table-responsive p-0" style="height: 300px;">
    <div class="d-flex py-2">
        <a href="{{route('flightsuppliercreate')}}" class="btn btn-primary mx-2">add new Flight Supplier</a>
        <a href="{{route('flightcreate')}}" class="btn btn-primary mx-2">add new Flight</a>
    </div>
    <table class="table table-head-fixed text-nowrap">

        <thead>
        <tr>
          <th>Supplier</th>
          <th>From-Location</th>
          <th>To-Location</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($flights as $flight)
        <tr>
          <td>{{$flight->contact->contact_name}}</td>
          <td>{{$flight->from_location}}</td>
          <td>{{$flight->to_location}} </td>
          <td>{{$flight->price}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  
  @include('includes.footer')
