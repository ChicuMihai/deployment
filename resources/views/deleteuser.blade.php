@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                  @if(Session::has('message'))
                      <div class="alert alert-success">
                          {{ Session::get('message') }}
                      </div>
                  @endif
                  <table class="table">
                  <thead>
                      <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td scope="row">{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <th><a href="{{url('deleteuser',$user->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                      <a href="{{url('edituser',$user->id)}}"><button type="button" class="btn btn-info">Update</button>
                      </a></th>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
