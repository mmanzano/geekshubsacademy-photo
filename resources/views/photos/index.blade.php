@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @foreach($photos as $photo)
                    @include('photos.partials.photo')
                @endforeach
            </div>
        </div>
    </div>
@endsection
