@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    </div>

                    <div class="panel-body">
                        <table class="table table-bordered">

                            @forelse($albums as $album)
<div style=" width: 300px;">
                                        <a href='/bezoeker/{{$album->id}}'><img src="{{ asset('images/' . $album->cover_image) }}" width="200px" height="200px"></a>

                                        <a href='/bezoeker/{{$album->id}}'>{{ $album->name }}</a>
</div>
                            @empty
                                <tr>
                                    <td colspan="3">No entries found.</td>
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