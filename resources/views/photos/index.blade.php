@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @foreach ($photos as $photo)
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            <div class="row">
                                <div class="col-md-12">
                                    {{ $photo->title }} por {{ $photo->author_id }}
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="photo--image">
                                <img src="{{ $photo->image }}" alt="{{ $photo->title }}">
                            </div>
                            <div class="photo--body">
                                {{ $photo->body }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection