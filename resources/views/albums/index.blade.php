@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    @if (session('message'))
                        <div class="alert alert-info">{{ session('message') }}</div>
                    @endif
                    <div  style=" text-align: center; display: inline-block; width: 100%;" class="panel-heading">
                        <a  style="background-color: lightgreen; font-weight: bold ; text-align: center; display: inline-block; border: 1px solid black; width: 300px;" href="{{ route('albums.create') }}" class="btn btn-default">Voeg nieuwe album</a>

                    </div>



                            @forelse($albums as $album)
                                <div style="display: grid;"  class="sss">
                                    <div style="width: 500px; border: 1px;">
                                            <a href="{{ route( 'albums.show', $album->id  ) }}"><img src="{{ asset('images/' . $album->cover_image) }}" width="200px" height="200px"></a>

                                          <span>Name:  <a href="{{ route( 'albums.show', $album->id  ) }}"> {{ $album->name }}</a></span>


                                    @if (Route::has('login'))
                                        @auth
                                            <td>
                                                <a style="border: 1px solid black; background-color: lightgray; float:  bottom;" href="{{ route('albums.edit', $album->id) }}" class="btn btn-default">Edit</a>
                                                <form action="{{ route('albums.destroy', $album->id) }}" method="POST"
                                                      style="display: inline"
                                                      onsubmit="return confirm('Are you sure?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    {{ csrf_field() }}
                                                    <button style="float: bottom ;" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        @else
                                        @endauth
                                    @endif


                            @empty

                                    <td colspan="4">No entries found.</td>

                            @endforelse

                        </div>
                    </div>






                </div>
            </div>
        </div>
    </div>








@endsection

@section('scripts')
    <script>
        function getIDs()
        {
            var ids = [];
            $('.checkbox_delete').each(function () {
                if($(this).is(":checked")) {
                    ids.push($(this).val());
                }
            });
            $('#ids').val(ids.join());
        }

        $(".checkbox_all").click(function(){
            $('input.checkbox_delete').prop('checked', this.checked);
            getIDs();
        });

        $('.checkbox_delete').change(function() {
            getIDs();
        });
    </script>
@endsection