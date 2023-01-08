@extends('template')

@section('title', 'welcome')

@section('body')

<div class="d-flex m-5">
  @foreach ($cars as $car)
    <div class="card m-2" style="width: 18rem;">
      <img src="{{asset('/storage/Car/'.$car->Image)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$car->Brand}}</h5>
        <p class="card-text">Type: {{$car->Type}}</p>
        <p class="card-text">CarCode: {{$car->CarCode}}</p>
        <p class="card-text">Price: {{$car->Price}}</p>
        <p class="card-text">Buyer: {{$car->Buyer}}</p>
        <p class="card-text">Date: {{$car->Date}}</p>
        <a href="{{route('show', $car)}}" class="btn btn-primary m-1">View Transaction</a>
        <a href="{{route('edit', $car->id)}}" class="btn btn-success m-1">Edit Transaction</a>
        <form action="/delete-transaction/{{$car->id}}" method="POST">
          @csrf
          @method('delete')
          <button class="btn btn-danger m-1">Delete Transaction</button>
        </form>
      </div>
    </div>
  @endforeach
</div>

  {{-- {{ $i = 1 }}

  @if ($i > 0)
    {{ $i }}
  @endif --}}

  {{-- @for ($i = 0; $i < 10; $i++)
    {{ $i }}
  @endfor --}}

@endsection