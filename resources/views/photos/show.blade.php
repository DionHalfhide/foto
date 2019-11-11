@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if (Route::has('login'))
                        @auth
                            <div class="panel-heading">Voeg nieuwe foto toe</div>

                            <div class="panel-body">
                                @if ($errors->count() > 0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif


                                <form style="width: 400px; border-radius: 25px ;padding:20px 50px; background-color: white;box-shadow: 0px 10px 22px 0px rgba(0,0,0,0.09);" action="{{ route('photos.store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="album_id" value="{{$album_id}}" />
                                    <br /><br />
                                    Photo:
                                    <br />
                                    <input type="text" name="photo" value="{{ old('photo') }}" />
                                    <input type="file" name="photo" class="form-control" value="{{ old('photo') }}"/>
                                    <br /><br />
                                    <input style="border: 1px solid lightgreen;background-color: lightgreen" type="submit" value="Submit" class="btn btn-default" />
                                </form>
                                @else
                                    geen toegang
                                @endauth
                                @endif



                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection