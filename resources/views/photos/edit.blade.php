@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edita tu foto del día</div>

                    <div class="panel-body">
                        <form
                                action="{{ route('photos.update', $photo->id) }}"
                                method="POST"
                                enctype="multipart/form-data"
                        >
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="control-label">Título</label>
                                <input type="text" id="title" name="title" value="{{ old('title', $photo->title) }}" class="form-control">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="photo--image">
                                <img src="{{ $photo->image_url }}" alt="{{ $photo->title }}">
                            </div>

                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <label for="body" class="control-label">Mensaje</label>
                                <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ old('body', $photo->body) }}</textarea>
                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" name="upload" class="btn btn-primary">Editar información</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection