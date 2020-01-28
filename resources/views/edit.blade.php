{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Edit Client')

@section('content_header')
<h1>Edit Client</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <form role="form" method="POST">
                <div class="box-body">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Id</label>
                        <input type="text" class="form-control" name="id_form" value="{{$id}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name_form" value="{{$nome}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="text" class="form-control" name="phone_form" value="{{$telefone}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Age</label>
                        <input type="number" class="form-control" name="age_form" value="{{$idade}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control" name="email_form" value="{{$email}}" required>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>

    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
