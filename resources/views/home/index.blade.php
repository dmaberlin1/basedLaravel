@extends('layouts.main')



@section('title')
    {{$title}}
@endsection


@section('description')
    <meta name="description" content="{{$description}}">
@endsection


@section('content')
    <h1>Home page</h1>
    @isset($users)
    @foreach($users as $user)

        <span @class(['text-danger'=>$loop->even])><div> {{$loop ->index}}  - {{$user['name']}}</div></span>
    @endforeach
    @endisset

    @if(!empty($users))

    @endif

    @php
    $users2=[];

    @endphp
    @forelse($users2 as $user)
        {{$user['name']}}
    @empty
        <p>No users</p>
    @endforelse

{{--    @for($i=1;$i<=10;$i++)--}}
{{--    <span> {{$i}} <br></span>--}}
{{--        @if($i==5)--}}
{{--            @continue--}}
{{--        @endif--}}
{{--    @endfor--}}
@endsection



