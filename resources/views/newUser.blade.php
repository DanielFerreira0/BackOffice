
@extends('adminlte::page')

@section('title', 'New Admin')

@section('content_header')
<h1>New Admin</h1>
@stop
{{-- resources/views/admin/dashboard.blade.php --}}

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <form role="form" method="POST">
                <div class="box-body">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name_form" id="name_form" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" class="form-control" name="email_form" id="email_form" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password_form" id="password_form" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_form" id="confirm_form" required>
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