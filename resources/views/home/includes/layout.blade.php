<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    @include('home.includes.head')
    @yield('headerarea')
    <style>
        .inner-page-banner-area {
        position: relative;
        height: 300px; /* Set the desired height */
        background: url('https://lnmubed.ac.in/home/FrontAssets/img/banner/about-us.jpg') center/cover no-repeat;
        display: flex;
        align-items: center;
        color: #fff;
        }

        .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Adjust opacity as needed */
        }

        .breadcrumb-container {
        z-index: 1;
        text-align: center;
        }

        .pagination-area ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .pagination-area ul li {
        display: inline-block;
        margin: 0 5px;
        }

        .pagination-area ul li a {
        color: #fff;
        text-decoration: none;
        }





    </style>
</head>

<body class="home-page" style="background-image: url('{{ asset('frontend/assets/images/icon/bg_img2.jpg')}}');background-size: cover;">
    <!-- <div class="wrapper">
            ******HEADER****** -->
    @include('home.includes.header')
    <!--//header-->
    <!-- ******NAV****** -->
    @include('home.includes.menu')

    @if(Route::currentRouteName() != 'home')
        @include('home.includes.breadcrumb')
    @endif

    <div class="content container" >

        @yield('content')

    </div>

    @include('home.includes.popup')
    </div>
    <!--//wrapper-->
    <!-- ******FOOTER****** -->
    @include('home.includes.footer')
    <!--//footer-->

    @include('home.includes.foot')
    @yield('scriptarea')

</body>

</html>
