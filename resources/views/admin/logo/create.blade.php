@extends('layouts.admin')

@section('conteudo')



    @include('errors._check')

    {!! Form::open(['route' => 'admin.logo.store', 'files' => true, 'class' => '']) !!}

    @include('admin.logo._form')

    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}

    {!! Form::close() !!}
@endsection