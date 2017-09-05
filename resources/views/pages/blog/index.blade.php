@extends('master')

@section('content')

    <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-8">
            @for($i = 0; $i <= 5; $i++)
                <div class="media pb-3">
                    <img class="d-flex mr-3 rounded-circle hidden-sm-down"
                         src="http://placehold.it/94x94"
                         alt="Generic placeholder image" style="width: 94px; height: 94px; ">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Nulla vel metus scelerisque ante sollicitudin</h5>
                        <p class="text-muted small mb-1">23 comments . 5 months ago | Technology</p>
                        <p class="mt-0">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            Cras
                            purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                            nisi
                        </p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection