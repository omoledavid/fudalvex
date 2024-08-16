@php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
@endphp
@extends('layouts.basic.header')
@section('title', $settings->site_title)
@section('content')
    @include('basic.sections.hero')
@endsection
