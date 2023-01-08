@extends('template')

@section('title', 'show transaction')

@section('body')
    <div class="card m-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$car->Brand}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$car->Type}}</h6>
            <p class="card-text">{{$car->CarCode}}</p>
            <p class="card-text">{{$car->Price}}</p>
            <p class="card-text">{{$car->Buyer}}</p>
            <p class="card-text">{{$car->Date}}</p>
            <p class="card-text">{{$car->category->Name}}</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
@endsection