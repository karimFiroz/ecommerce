@extends('master')
@section('content')

    <h1 align="center">Login Page</h1>
    <div class="container">
        <div class="row">

            <div class="col-md-6 offset-md-3">
                <div class="well">

{{---validation--}}
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session()->has('message'))
<div class="alert alert-{{ session('type') }}">
{{ session('message') }}
</div>
@endif

{{--validation end--}}

            <form action="{{ route('login') }}" method="post" class="form form-horizontal">
                @csrf


                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" name="email" value="{{ old('email') }} class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password"name="password"value="{{ old('password') }} class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Log In</button>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
