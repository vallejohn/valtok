@extends('admin.master')

@section('content')
    <h1>Create Post</h1>

    <section class="row">
        <div class="col-lg-8">
            <form action="{{route('posts.store')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Enter Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                </div>

                <div class="form-group">
                    <label for="exampleTextarea">Content</label>
                    <textarea class="form-control" id="exampleTextarea" name="body" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-success">Publish</button>
                <button type="submit" class="btn btn-primary btn-outline-primary">Save</button>
                <button type="submit" class="btn btn-primary btn-outline-danger">Cancel</button>
            </form>
        </div>
    </section>
@endsection