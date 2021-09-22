@extends('master')
@section('title','Welcome UserView')
@section('content')
<!-- if files in views folder is .php -->
    <?= $name ?>
    <?= $title ?>
<!-- if files in views folder is .blade.php  -->
    {{$name}}
    {{$title}}
@stop