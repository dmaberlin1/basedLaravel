@extends('layouts.main')



@section('title')
    {{$title}}
@endsection


@section('description')
    <meta name="description" content="{{$description}}">
@endsection


@section('content')

    @php
        /**
         * @var \Illuminate\Support\Collection $post
        * @var \App\Models\Post $post
         */
 @endphp

    @isset($posts)
    <div class="row my-3">
                        @foreach($posts as $post)
                            <div class="col-md-4">
                         <span style="font-size: small;color: #8ac8e5"> {{$post->isPublished()}}</span>      {{$post['title']}} <span style="font-weight: bold;color: #2db1e1"> {{$post['content']}}</span>
                            </div>
                        @endforeach
                    </div>
    @endisset
@endsection



{{--@section('content')--}}
{{--    <h1>Home page</h1>--}}
{{--    @isset($products)--}}

{{--        @php--}}
{{--            /**--}}
{{--             * @var \Illuminate\Support\Collection $products--}}
{{--             * */--}}
{{--        @endphp--}}
{{--        @foreach($products->chunk(3) as $chunk)--}}

{{--            <div class="row my-3">--}}
{{--                @foreach($chunk as $product)--}}
{{--                    <div class="col-md-4">--}}
{{--                        {{$product['title']}}--}}
{{--                    </div>--}}
{{--                @endforeach--}}

{{--            </div>--}}
{{--        @endforeach--}}
{{--    @endisset--}}
{{--    <br>--}}
{{--    @isset($filtered)--}}
{{--        @php--}}
{{--            /**--}}
{{--            * @var \Illuminate\Support\Collection $filtered--}}
{{--            */--}}
{{--        @endphp--}}
{{--            <div class="row my-3">--}}
{{--                @foreach($filtered as $filteredOne)--}}
{{--                    <div class="col-md-4">--}}
{{--                        {{$filteredOne['title']}} : {{$filteredOne['price']}}--}}
{{--                    </div>--}}
{{--                @endforeach--}}

{{--            </div>--}}
{{--    @endisset--}}
{{--@endsection--}}
