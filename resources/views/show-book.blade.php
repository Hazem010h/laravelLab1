@extends('main')
@section('content')
<h1>{{$page}}</h1>
<!--show book details -->
<div class="card">
    <div class="card-body">
        <center>
            <h3 class="card-title">{{$book->title}}</h3>
        </center>
        <h4 class="card-subtitle mb-2 text-muted">Book price: {{$book->price}}</h4>
        <h4 class="card-subtitle mb-2 text-muted">Book description:</h4>
        <p class="card-text">{{$book->description}}</p>
        <a href="{{route('books.index')}}" class="btn btn-info">Back</a>
    </div>
</div>
@endsection

