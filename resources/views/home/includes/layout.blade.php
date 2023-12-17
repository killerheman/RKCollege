<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    @include('home.includes.head')
    @yield('headerarea')
</head>

<body class="home-page" style="background-image: url('{{ asset('frontend/assets/images/icon/bg_img2.jpg')}}');background-size: cover;">
    <!-- <div class="wrapper">
            ******HEADER****** -->
    @include('home.includes.header')
    <!--//header-->
    <!-- ******NAV****** -->
    @include('home.includes.menu')


    <div class="content container" >

        @yield('content')

    </div>

    @include('home.includes.popup')
    </div>
    <!--//wrapper-->
    <!-- ******FOOTER****** -->
    @include('home.includes.footer')
    <!--//footer-->

    @yield('scriptarea')
    @include('home.includes.foot')

</body>

</html>
