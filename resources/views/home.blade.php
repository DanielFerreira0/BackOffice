{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Backoffice')

@section('content_header')
<h1>Clients</h1>
@stop

@section('content')
<p>Welcome to Client Backoffice</p>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Options</th>
                        </tr>

                        @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->telefone}}</td>
                            <td>{{$cliente->idade}}</td>
                            <td>{{$cliente->email}}</td>
                            <td>
                                <a class="btn btn-block btn-primary btn-xs" href="editar/{{$cliente->id}}">Edit</a>
                                <a class="btn btn-block btn-danger btn-xs" href="delete/{{$cliente->id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
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