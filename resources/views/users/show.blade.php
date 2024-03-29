@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('users.profile')
                @foreach($photos as $photo)
                    @include('photos.partials.photo')
                @endforeach
            </div>
        </div>
    </div>
@endsection
