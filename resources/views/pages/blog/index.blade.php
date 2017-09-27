@extends('master')

@section('content')

    <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-8">
            @foreach($posts as $post)
                <div class="media pb-3">
                    {{--<img class="d-flex mr-3 rounded-circle hidden-sm-down"--}}
                         {{--src="http://placehold.it/94x94"--}}
                         {{--alt="Generic placeholder image" style="width: 94px; height: 94px; ">--}}
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><a href="{{route('pages.blogShow', $post->slug)}}">{{$post->title}}</a></h5>
                        <p class="text-muted small mb-1">23 comments . {{$post->created_at->diffForHumans() . " | " . $post->category->name}}</p>
                        <p class="mt-0">
                            {{str_limit($post->body, 180)}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection