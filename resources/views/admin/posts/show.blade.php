@extends('admin.master')

@section('custom_stylesheet')
    <link href="{{ asset('/css/val_custom.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

    <section class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-block" id="img_inherit">
                    <h4 class="card-title"><a href="{{route('pages.blogShow', $post->slug)}}">{{$post->title}}</a></h4>
                    <h6 class="card-subtitle mb-2 text-muted">{{$post->created_at->DiffForHumans() . ' | ' . $post->category->name}}</h6>
                    <p class="card-text">
                        {!!Michelf\Markdown::defaultTransform($post->body)!!}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-block">
                    <a href="{{route('posts.create')}}" class="btn btn-block btn-success">Create</a>
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-block btn-primary">Edit</a>
                    <button type="submit" form="delete_post_form" class="btn btn-block btn-danger">Delete</button>

                    <form action="{{route('posts.destroy', $post->id)}}" method="POST" id="delete_post_form">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection