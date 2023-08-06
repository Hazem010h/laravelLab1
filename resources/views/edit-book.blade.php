@extends('main')
@section('content')
<h1>{{ $page }}</h1>
    <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" value="{{$book->title}}" name="title" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="number" class="form-control" value="{{$book->price}}" name="price" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Description</label>
            <textarea class="form-control" name="description" name="description" cols="30" rows="10">{{$book->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
