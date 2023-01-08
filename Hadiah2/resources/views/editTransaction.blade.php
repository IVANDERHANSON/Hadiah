@extends('template')

@section('brand', 'edit transaction')

@section('body')

<div class="m-5">
  <h1 class="text-center">Edit Transaction</h1>
  <form action="/update-transaction/{{$car->id}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('patch')
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Brand</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Brand" value="{{$car->Brand}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Type</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="Type" value="{{$car->Type}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">CarCode</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="CarCode" value="{{$car->CarCode}}">
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Price</label>
          <input type="number" class="form-control" id="exampleInputPassword1" name="Price" value="{{$car->Price}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Buyer</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="Buyer" value="{{$car->Buyer}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Date</label>
          <input type="date" class="form-control" id="exampleInputPassword1" name="Date" value="{{$car->Date}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Image</label>
          <input type="file" class="form-control" id="exampleInputPassword1" name="Image" value="{{$car->Image}}">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection