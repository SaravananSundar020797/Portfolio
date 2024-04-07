@extends('app')

@section('title')

My Portfolio

@endsection

@section('styles')

<!-- Fav icon -->

<link rel="shortcut icon" href="{{ asset('img/myportfolio/portfolio.png') }}">

<!-- Bootstrap Css -->

<!-- <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> -->

<!-- Optional Css -->


<link rel="stylesheet" href="./css/myportfolio/homepage.css">

<!-- Font Style -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

@endsection

@section('content')

@include('myportfolio.layouts.navbarLayout.nav')
@include('myportfolio.layouts.homePageLayout.firstFold')
@include('myportfolio.layouts.homePageLayout.secondFold')
@include('myportfolio.layouts.homePageLayout.thirdFold')
@include('myportfolio.layouts.homePageLayout.fourthFold')
@include('myportfolio.layouts.homePageLayout.fivthFold')
@include('myportfolio.layouts.footerPageLayout.footerBlock')

@endsection

@section('script')

<script src="{{ mix('js/myportfolio/bootstrap.js') }}"></script>
<script src="{{ mix('js/myportfolio/homePage.js') }}"></script>


<!-- Bootstrap Jquery -->

<!-- <script src="./bootstrap/js/jquery.slim.min.js"></script> -->

<!-- Optional Js  -->

<!-- <script src="/js/yummyProject/homePage.js"></script> -->

<!-- Bootstrap Popper  -->

<!-- <script src="./bootstrap/js/popper.min.js"></script> -->

<!-- Bootstrap js -->

<!-- <script src="./bootstrap/js/bootstrap.min.js"></script> -->

@endsection


