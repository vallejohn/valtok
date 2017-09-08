@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-8">
            <h4 class="text-center">{{$post->title}}</h4>
            <p class="text-muted small text-center">23 Comments . {{$post->created_at->diffForHumans() . " | " . $post->category->name}}</p>
            <p class="text-justify">
                {{$post->body}}
            </p>

        </div>
    </div>
@endsection