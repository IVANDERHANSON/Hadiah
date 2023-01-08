@extends('template')

@section('brand', 'Buy Car')
    
@section('body')

<div class="m-5">
    <h1 class="text-center">Buy Car</h1>
    <form action="/store-car" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Brand</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='Brand' value="{{old('Brand')}}">
        @error('Brand')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Type</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name='Type' value="{{old('Type')}}">
        @error('Type')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">CarCode</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name='CarCode' value="{{old('CarCode')}}">
            @error('CarCode')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name='Price' value="{{old('Price')}}">
            @error('Price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Buyer</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name='Buyer' value="{{old('Buyer')}}">
            @error('Buyer')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name='Date' value="{{old('Date')}}">
            @error('Date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name='Image' value="{{old('Image')}}">
            @error('Image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="category">
              @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->Name}}</option>
              @endforeach
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection