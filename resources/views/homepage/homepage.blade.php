@extends('Layout.main')

@section('content')
    <div id="content" class="no-bottom no-top">

        @include('homepage.carousel')
        @include('homepage.wedo')
        @include('homepage.process')
        @include('homepage.galery')
        @include('homepage.customer')

    </div>
@endsection


@section('title','Demo_Homepage_Contructure')

@section('idBody')id = "page-about"@endsection

