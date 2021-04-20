@extends('Layout.main')

@section('sub-header')
    @include('AboutUS.SubHeader')
@endsection

@section('content')

    <div id="content" class="no-bottom no-top">
        @include('AboutUS.introduce')
        @include('AboutUS.Team')
        @include('AboutUS.customer')
    </div>
@endsection


@section('title','Demo_About_Us_Contructure')
@section('idBody')class = "page-about"@endsection
@section('header-bg')class = "header-bg"@endsection
