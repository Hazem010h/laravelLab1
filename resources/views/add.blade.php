@extends('main')
@section('content')
    <h1>Add New Book</h1>
    <form action="/add" method="POST">
        <div class="form-group">
            <label for="title">Book Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter book title">
        </div>
        <div class="form-group">
            <label for="price">Book Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter book price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
