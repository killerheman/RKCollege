@extends('home.includes.layout', ['title' => 'Organogram'])

@section('content')
    <div class="page-wrapper">

        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.about', ['active' => 8])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h3 class="title">Oganogram</h3>
                    <p>
                        The organogram of the college extends a brief outline of the administrative set-up of the college. The structure of the governance is visualised in this organogram.  It is an administrative diagram of the College providing a decentralised governance structure. The principal occupies the head of the institution. Teaching and non-teaching staffs along with students remain an integral part of the same.  They together work towards fulfilling the vision and mission of the college.  As the Head of the institution, the Principal supervises all academic and administrative works. The institution has set up various committees including Internal Quality Assurance Cell (IQAC), College Advisory Committee, Women’s Cell, Internal Complaints Committee, Purchase Committee, Development committee, Cultural Committee, etc. The day to day functioning of different committees and cells are being supervised by the Principal.  The organogram of the college presents a brief structure of the functioning of the college.
                    </p>
                    {{-- <object data="{{ asset('data/Organogram C M College.pdf') }}" width="1000" height="1000">
                    </object> --}}


                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
