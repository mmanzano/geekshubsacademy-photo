@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <div class="row">
                            <div class="col-md-12">
                                {{ $user->name }}
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($photos as $photo)
                    @include('photos.partials.photo')
                @endforeach
            </div>
        </div>
    </div>
@endsection
