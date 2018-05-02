
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Show pages</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<main role="main">
       @foreach($pages as $page)
        <div class="container">
          <div class="row">
            <div class="col-md-8">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-body">
                      <h3 class="my-0 font-weight-normal">{{$page->title}}</h3>
                        <a href="{{url('pages',$page->id)}}" class="btn btn-success" role="button">View</a>
                        <a href="{{url('pages/delete',$page->id)}}" class="btn btn-danger" role="button">Delete</a>
                        <a href="{{url('pages/edit',$page->id)}}" class="btn btn-info" role="button">Edit</a>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    <hr>
        @endforeach

    </div> <!-- /container -->

</main>
</div>
           </div>
       </div>
   </div>
</div>
@endsection
