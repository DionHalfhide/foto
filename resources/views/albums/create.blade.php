@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    @if (Route::has('login'))
                        @auth
                    <div  style="margin-bottom: 20px;" class="panel-heading">voeg album</div>

                    <div class="panel-body">
                        @if ($errors->count() > 0)
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif


                                    <form style="width: 400px; border-radius: 25px ;padding:20px 50px; background-color: white;box-shadow: 0px 10px 22px 0px rgba(0,0,0,0.09);" action="{{ route('albums.store') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <br />
                                         naam:
                                        <br />
                                        <input style="border: 1px solid yellow;" type="text" name="name" value="{{ old('name') }}" />
                                        <br /><br />
                                         image:
                                        <br />
                                        <input type="text" name="cover_image" value="{{ old('cover_image') }}" />
                                        <br />
                                        <br />
                                        <input type="file" name="cover_image" class="form-control" value="{{ old('cover_image') }}"/>
                                        <br /><br />
                                        <input style="border: 1px solid lightgreen; background-color: lightgreen" type="submit" value="voeg toe" class="btn btn-default" />
                                    </form>
                                @else
                                    wat doe je
                                @endauth
                            @endif



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection