@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    @if (session('message'))
                        <div class="alert alert-info">{{ session('message') }}</div>
                    @endif
                    <div style="width: 100%; text-align: center;" class="panel-heading">{{$albums->name}}
                        <a style="border:1px solid lightgreen; background-color: lightgreen;" href="{{ route( 'photos.show', $albums->id  ) }}" class="btn btn-default">voeg nieuwe foto toe</a>
                    </div>

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>

                                <th>foto</th>
                                <th>actie</th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse($albums->photo as $photo)
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/' . $photo->photo) }}" width="200px" height="200px">
                                    </td>

                                    @if (Route::has('login'))
                                        @auth
                                            <td>
                                                <form action="{{ route('photos.destroy', $photo->id) }}" method="POST"
                                                      style="display: inline"
                                                      onsubmit="return confirm('Are you sure?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    {{ csrf_field() }}
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        @else
                                        @endauth
                                    @endif

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No entries found.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection