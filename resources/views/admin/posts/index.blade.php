@extends('admin.master')

@section('content')
    <h1>Posts</h1>

    <section class="row placeholders">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection