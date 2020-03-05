@extends('layout.app') @section('content')


<h1 class="title themeFont notFound">404 Not Found</h1>
@if($errors->any())
<div class="container" style="width: 50%;">
    <div class="notification is-info ">
        {!! implode('', $errors->all('<div>:message</div>')) !!}

    </div>
    <br>
</div>

@endif


<style>
    html {
        background-image: url("{{asset('/img/campfire.webp')}}");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .notFound {

        padding-top: 40vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>

@endsection