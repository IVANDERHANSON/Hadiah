@extends('template')

@section('title', 'welcome')

@section('body')

<div class="d-flex m-5">
  @foreach ($cars as $car)
    <div class="card m-2" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{$car->Brand}}</h5>
        <p class="card-text">Type: {{$car->Type}}</p>
        <p class="card-text">CarCode: {{$car->CarCode}}</p>
        <p class="card-text">Price: {{$car->Price}}</p>
        <p class="card-text">Buyer: {{$car->Buyer}}</p>
        <p class="card-text">Date: {{$car->Date}}</p>
        <a href="{{route('show', $car)}}" class="btn btn-primary">View Transaction</a>
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