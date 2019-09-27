@extends('layout')

@section('title','Hello title')


@section('header')
@parent
@endsection


@section('content','this is come from middle user child page')


@section('footer')
@parent
@endsection