
@include('header')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <title>{{$page->title}}</title>
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <p class="mt-4">{{$page->title}}</p>
            <hr>
            

            @if(!empty($page->picture))
            <img width="200px" height="40%" src="{{asset('image/'.$page->picture)}}">
            @endif

            <hr>


            <blockquote class="blockquote">
                <p class="mb-0">{!!$page->body!!}</p>
            </blockquote>
        </div>
      </div>
                 </div>
             </div>
         </div>
     </div>
