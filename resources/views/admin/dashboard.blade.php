@extends('admin.layouts.app')
@section('title','Dashboard')
@section('content')
    <x-alert type='primary' message="Welcome {{ auth()->user()->name }}"/>
@endsection
