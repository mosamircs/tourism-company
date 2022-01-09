@include('includes.above')
<title>Hotels</title>
@include('includes.head')
@include('includes.sidebar')
@include('includes.navbar')


<section class="content">
    <!-- ./wrapper -->
<div class="content-wrapper">

<!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
    <div class="d-flex py-2">
        <a href="{{route('hotelsuppliercreate')}}" class="btn btn-primary mx-2">add new Hotel Supplier</a>
        <a href="{{route('hotelcreate')}}" class="btn btn-primary mx-2">add new Hotel</a>
    </div>
    <table class="table table-head-fixed text-nowrap">

        <thead>
            <tr>
                <th>Supplier</th>
                <th>Hotel location</th>
                <th>price</th>
                <th>Availability</th>
             </tr>
         </thead>
        <tbody>
            @foreach ($rooms as $room)
                <tr class="odd">
                    <td>{{ $room->contact->contact_name}}</td>
                    <td>{{ $room->hotel_location }}</td>
                    <td>{{ $room->price }}</td>
                    <td>{{ $room->availability }}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
@include('includes.footer')