@extends('Layout.main')

@section('sub-header')
        @include('Project.SubHeader')
@endsection

@section('content')
    @include('Project.ProjectGalery')
    @include('Project.GoBlog')
@endsection


@section('title','Project_Contructure')
@section('idBody')class = "page-projects"@endsection
@section('header-bg')class = "header-bg"@endsection
