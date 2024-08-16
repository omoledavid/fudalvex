@php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    };
   function formatPhoneNumber($phoneNumber)
{
	$phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

	if (strlen($phoneNumber) > 10) {
		$countryCode = substr($phoneNumber, 0, strlen($phoneNumber) - 10);
		$areaCode = substr($phoneNumber, -10, 3);
		$nextThree = substr($phoneNumber, -7, 3);
		$lastFour = substr($phoneNumber, -4, 4);

		$phoneNumber = '+' . $countryCode . ' (' . $areaCode . ') ' . $nextThree . '-' . $lastFour;
	} else if (strlen($phoneNumber) == 10) {
		$areaCode = substr($phoneNumber, 0, 3);
		$nextThree = substr($phoneNumber, 3, 3);
		$lastFour = substr($phoneNumber, 6, 4);

		$phoneNumber = '(' . $areaCode . ') ' . $nextThree . '-' . $lastFour;
	} else if (strlen($phoneNumber) == 7) {
		$nextThree = substr($phoneNumber, 0, 3);
		$lastFour = substr($phoneNumber, 3, 4);

		$phoneNumber = $nextThree . '-' . $lastFour;
	}

	return $phoneNumber;
}

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
    @include('snappy.sections.topInvestors')
    @include('snappy.sections.counter')
    @include('snappy.sections.testimonies')
    @include('snappy.sections.marketChart')
    @include('snappy.sections.paymentMethod')
@endsection
