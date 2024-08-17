@php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    };
@endphp
@extends('snappy.layouts.header')
@section('title', $settings->site_title)
@section('content')
    @include('snappy.sections.hero')
    @include('snappy.sections.accessAccount')
    @include('snappy.sections.howItWorks')
    @include('snappy.sections.aboutUs')
    @include('snappy.sections.ourServices')
    @include('snappy.sections.topStocks')
    @include('snappy.sections.plans')
    @include('snappy.sections.marketAnalysis')
    @include('snappy.sections.referer')
    @include('snappy.sections.certification')
    @include('snappy.sections.topInvestors')
    @include('snappy.sections.counter')
    @include('snappy.sections.testimonies')
    @include('snappy.sections.marketChart')
    @include('snappy.sections.paymentMethod')
@endsection
