@extends('layouts.app')

@section('title') Edit @endsection
@section('content')
<form method="POST" action="{{route('posts.update',1)}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
    </div>
    <label class="form-label">Post Creator</label>
    <select class="form-select" name="post_creator">
        <option value="1">Ahmed</option>
        <option value="2">Mohamed</option>
        <option value="3">Ali</option>
    </select>
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection