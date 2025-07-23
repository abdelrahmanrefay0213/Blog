@extends('layouts.app')

@section('title') index @endsection
@section('content')
        <div class="text-center">
            <a href="{{route('posts.create')}}" class="btn btn-success">Create Post</a>
            <table class="table table-striped mt-4" >
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">PostedBy</th>
                    <th scope="col">CreatedAt</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                    
                  <tr>
                  <th scope="row">{{$post['id']}}</th>
                  <td>{{$post['title']}}</td>
                  <td>{{$post['posted_by']}}</td>
                  <td>{{$post['created_at']}}</td>
                  <td>
                      <a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a>
                      <a href="{{route('posts.edit',$post['id'])}}" class="btn btn-primary">Edit</a>
                      <form style="display: inline" method="POST" action="{{route('posts.destroy',$post['id'])}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        
@endsection