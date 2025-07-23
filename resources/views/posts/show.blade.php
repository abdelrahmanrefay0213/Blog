@extends('layouts.app')

@section('title') show @endsection
@section('content')
        <div class="card">
          <div class="card-header">
            Post info
          </div>
          <div class="card-body">
            <h5 class="card-title">Title: {{$post['title']}}</h5>
            <p class="card-text">Description: {{ $post['description'] }}</p>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header">
            Post Creator info
          </div>
          <div class="card-body">
            <h5 class="card-title">Name: {{ $post['posted_by'] }}</h5>
            <p class="card-text">Email: {{ $post['email'] }}</p>
            <p class="card-text">Created at: {{$post['created_at']}}</p>
          </div>
        </div>
@endsection