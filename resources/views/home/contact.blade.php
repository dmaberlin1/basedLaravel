@extends('layouts.main')

@section('content')
 <h1> <span style="color: blueviolet">Contact</span> page</h1>
@endsection

@section('title',$title ??'Test Title')

@section('navbar')
    @parent
    <div class="container">
        Additional content
    </div>
@endsection

