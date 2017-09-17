@extends('admin.master')

@section('content')
    <h1>Edit Post</h1>
    <section class="row">
        <div class="col-lg-8">
            <form action="{{route('posts.update', $post->id)}}" method="POST">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="title">Enter Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$post->title}}" required>
                </div>
                <div class="form-group">
                    <select required class="custom-select" style="width: 50%" name="category_id">
                        <option selected>Category</option>
                        @foreach($categories as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategory">
                        Add Category
                    </button>

                </div>

                <div class="form-group">
                    <label for="exampleTextarea">Content</label>
                    <textarea class="form-control" id="exampleTextarea" name="body" rows="5" required>{{$post->body}}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Publish</button>
                <button type="submit" class="btn btn-primary btn-outline-primary">Save</button>
                <a href="{{route('posts.index')}}" class="btn btn-primary btn-outline-danger">Cancel</a>
            </form>

            <!-- Modal -->
            <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add another category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{route('categories.store')}}" method="POST" id="add_category_form">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" required>
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" form="add_category_form">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection