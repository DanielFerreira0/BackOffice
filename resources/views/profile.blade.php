{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'New Client')

@section('content_header')
<h1>Your Profile</h1>
<br>


@stop

@section('content')
<table class="table table-hover">
    <tbody>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <tr>
            <td>{{ Auth::user()->name }}</td>
            <td>{{ Auth::user()->email }}</td>
            <td>#</td>
        </tr>
    </tbody>
</table><br>

<form class="form-horizontal">
    <h5>Forget your Password? </h5>
    <a class="btn btn-info pull-right" href="{{ route('password.request') }}">Click here!</a>
    <!-- /.box-footer -->
</form>

<br><br>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop