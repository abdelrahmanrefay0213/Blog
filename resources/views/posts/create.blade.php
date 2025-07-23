@extends('layouts.app')

@section('title') create @endsection
@section('content')
<form>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="email" class="form-control" id="exampleFormControlInput1">
    </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <label class="form-label">Post Creator</label>
    <select class="form-select" aria-label="Default select example">
        <option value="1">Ahmed</option>
        <option value="2">Mohamed</option>
        <option value="3">Ali</option>
    </select>
    <button type="button" class="btn btn-success">Submit</button>
</form>
@endsection