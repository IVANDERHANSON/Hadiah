@extends('template')

@section('brand', 'Buy Car')
    
@section('body')
<div class="m-5">
    <h1 class="text-center">Buy Car</h1>
    <form action="/store-car" method="POST">
        @csrf
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Brand</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='Brand'>
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Type</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name='Type'>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">CarCode</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name='CarCode'>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name='Price'>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Buyer</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name='Buyer'>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name='Date'>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection