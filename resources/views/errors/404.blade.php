<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error page</title>
</head>
<body>
<h2 style="font-family:'Bitstream Charter',sans-serif;font-weight: bold">
    {{$exception->getMessage() ??"Route isn't found;
    404-Page not found"}}
    </h2>





{{--<?php--}}
{{--dump($exception->getMessage())--}}
{{--?>--}}


</body>
</html>
