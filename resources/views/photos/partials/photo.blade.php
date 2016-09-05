<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <div class="row">
            <div class="col-md-10">
                <a href="{{ route('photos.show', $photo->id) }}">{{ $photo->title }}</a> por {{ $photo->author->name }}
            </div>
            <div class="col-md-2">
                @can('destroy', $photo)
                    <form
                            action="{{ route('photos.destroy', $photo->id) }}"
                            method="POST"
                    >
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-danger">Borrar esta foto</button>
                    </form>
                @endcan
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