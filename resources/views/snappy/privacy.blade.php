@php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    };

@endphp
@extends('snappy.layouts.header')
@section('title', $title)
@section('content')
    @include('snappy.layouts.partials.banner')
    <section class="section-padding about-us-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    Privacy and policy
                </div>
                <div><br></div>
                <div class="col-md-12">
                    {!! $terms->description !!}
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
