@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>


                  @if(Session::has('success'))
                <label for="formGroupExampleInput">{{Session::gets('success')}}</label>
                 @endif
                <form method="post" action="{{route('insert')}}">
                    @csrf
                    {{--<input name="_token" value="{{csrf_token()}}">--}}
                    <div class="form-group">
                        <label for="formGroupExampleInput">name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="name" name="name">
                        @error('name')
                        <label for="formGroupExampleInput">{{$message}}</label>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">photo</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="photo" name="photo">
                    </div>


                    <button type="submit" class="btn btn-primary">insert</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
