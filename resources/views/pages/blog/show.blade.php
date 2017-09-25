@extends('master')

@section('custom_stylesheet')
    <link href="{{ asset('/css/val_custom.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-8" id="img_inherit">
            <h4 class="text-center">{{$post->title}}</h4>
            <p class="text-muted small text-center">23 Comments . {{$post->created_at->diffForHumans() . " | " . $post->category->name}}</p>

            {!!Michelf\Markdown::defaultTransform($post->body)!!}

        </div>
    </div>
@endsection