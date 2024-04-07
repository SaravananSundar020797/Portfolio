@extends('app')

@section('title')

Yummy Delicious Food

@endsection

@section('styles')

<!-- Fav icon -->

<link rel="shortcut icon" href="{{ asset('img/yummy.png') }}">

<!-- Bootstrap Css -->

<!-- <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> -->

<!-- Optional Css -->


<link rel="stylesheet" href="./css/yummyProject/homepage.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

@endsection

@section('content')

@include('yummyProject.layouts.navbarLayout.nav')
@include('yummyProject.layouts.homePageLayout.firstFold')
@include('yummyProject.layouts.homePageLayout.secondFold')
@include('yummyProject.layouts.homePageLayout.thirdFold')
@include('yummyProject.layouts.homePageLayout.fourthFold')
@include('yummyProject.layouts.homePageLayout.fivthFold')
@include('yummyProject.layouts.footerPageLayout.footerBlock')

@endsection

@section('script')




{{-- <script src="/js/yummyProject/controllers/loginRegisterController.js"></script> --}}
{{-- <script src="{{ mix('js/yummyProject/controllers/loginRegisterController.js') }}"></script> --}}
<script src="{{ mix('js/yummyProject/bootstrap.js') }}"></script>
<script src="{{ mix('js/yummyProject/homePage.js') }}"></script>


<!-- Bootstrap Jquery -->

<!-- <script src="./bootstrap/js/jquery.slim.min.js"></script> -->

<!-- Optional Js  -->

<!-- <script src="/js/yummyProject/homePage.js"></script> -->

<!-- Bootstrap Popper  -->

<!-- <script src="./bootstrap/js/popper.min.js"></script> -->

<!-- Bootstrap js -->

<!-- <script src="./bootstrap/js/bootstrap.min.js"></script> -->

@endsection


