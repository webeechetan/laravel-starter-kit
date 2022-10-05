@extends('admin.layouts.app')
@section('title','Dashboard')
@section('content')
    <x-alert type='primary' message="Welcome to the {{ env('APP_URL') }}"/>
@endsection
