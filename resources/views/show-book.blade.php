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
        <h4 class="card-subtitle mb-2 text-muted">Book image:</h4>
        <img src="{{asset('storage/books/'.$book->pic)}}" alt="" width="200px" height="200px">
        <br>
        <br>
        <h4 class="card-subtitle mb-2 text-muted">Book category: {{$book->category->name}}</h4>
        <h4 class="card-subtitle mb-2 text-muted">Book tags:
            @foreach ($book->tags as $tag)
                {{$tag->name}}
            @endforeach
        </h4>
        <br>
        <br>
        <h4 class="card-subtitle mb-2 text-muted">Book description:</h4>
        <br>
        <p class="card-text">{{$book->description}}</p>
        <a href="{{route('books.index')}}" class="btn btn-info">Back</a>
    </div>
</div>
@endsection

