<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <div class="row">
            <div class="col-sm-8">
                {{ $user->name }}
            </div>
            <div class="col-sm-4">
                @if(Auth::check() && (Auth::id() !== $user->id))
                    @if($user->is_friend)
                        <form
                                action="{{ route('friends', $user->name) }}"
                                method="POST"
                        >
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger">Dejar de ser amigo</button>
                        </form>
                    @else
                        <form
                            action="{{ route('friends', $user->name) }}"
                            method="POST"
                            >
                            {{ csrf_field() }}

                            <button type="submit" class="btn btn-success">Añadir como amigo</button>
                        </form>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>