@extends('home.includes.layout', ['title' => 'About College'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="About College">
                <span>AQAR</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <p> <a href="{{ asset('uploads/uploads/2019/01/AQAR-2014-15.docx')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i> AQAR 2014-2015</a></p>
            <p> <a href="{{ asset('uploads/uploads/2019/01/AQAR-2015-16.docx')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i> AQAR 2015-2016</a></p>
            <p> <a href="{{ asset('uploads/uploads/2023/07/AQAR-2016-17-ONLINE.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i> AQAR 2016-2017</a></p>
            <p> <a href="{{ asset('uploads/uploads/2023/07/2017-18.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i> AQAR 2017-2018</a></p>
            <p> <a href="{{ asset('uploads/uploads/2023/07/2018-19-1.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i> AQAR 2018-2019 </a></p>
            <p> <a href="{{ asset('uploads/uploads/2023/07/AQAR-Report-2019-20-online-submission.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i> AQAR 2019-2020</a></p>
            <p> <a href="{{ asset('uploads/uploads/2023/07/AQAR-2020-21-Online.pdf') }}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i> AQAR 2020-2021</a></p>
            <p> <a href="{{ asset('uploads/uploads/2023/08/AQAR2021-22pdf.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i> AQAR 2021-2022</a></p>
                                        
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
