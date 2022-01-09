@include('includes.above')
<title>Add Flight</title>
@include('includes.head')
@include('includes.sidebar')
@include('includes.navbar')
<section class="content">
    <div class="content-wrapper" style="min-height: 1345.31px;">
        <div class="container-fluid">
          <div class="row">
  <!-- form start -->
  <form method="post" action="{{route('flightstore')}}" >
    @csrf
    <div class="card-body">

      <div class="form-group">
        <input type="hidden" name="service_type" value="{{config('constants.supplier_type.Flight')}}">
      </div>
      <div class="form-group">
        <label for="contact_id">Choose a Supplier:</label>
        <select name="contact_id">
          @foreach ($getSuppliers as $getSupplier )
          <option value="{{$getSupplier->id}}">{{$getSupplier->contact_name}}</option>
          @endforeach
        </select>
        <br><br>
      <div class="form-group">
          <label>Availability</label>
          <input type="number" name="availability" class="form-control"  placeholder="Enter availability">
          <div class="alert-danger">{{$errors->first('availability')}}</div>
        </div>
      <div class="form-group">
        <label>From-location</label>
        <input type="text" name="from_location" class="form-control"  placeholder="Enter from_location">
        <div class="alert-danger">{{$errors->first('from_location')}}</div>
      </div>
        <div class="form-group">
          <label>To-location</label>
          <input type="text" name="to_location" class="form-control"  placeholder="Enter to_location">
          <div class="alert-danger">{{$errors->first('to_location')}}</div>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="form-control"  placeholder="Enter price">
            <div class="alert-danger">{{$errors->first('price')}}</div>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
          @if(session()->has('message'))
          <div class="alert alert-success">
              {{ session()->get('message') }}
          </div>
          @endif
      </form>
</div>
@include('includes.footer')