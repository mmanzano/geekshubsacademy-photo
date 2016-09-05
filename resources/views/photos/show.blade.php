@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ route('photos.show', $photo->id) }}">{{ $photo->title }}</a> por {{ $photo->author->name }}
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="photo--image">
                            <img src="{{ $photo->image_url }}" alt="{{ $photo->title }}">
                        </div>
                        <div class="photo--body">
                            {{ $photo->body }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection