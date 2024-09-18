@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Become a Member','breadcrumb'=> 'Who We Are/Become a
Member','header'=>'services.jpg','icon'=>'services.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row ">
                    <div class="member col-lg-5 m-auto d-flex flex-column">
                        <div class="member-main text-center">
                            <h5> <b> REGISTERED USER </b> </h5>
                            Free
                        </div>
                        <div class="member-body">
                            <ul>
                                <li>
                                    Be part of the global network essential for any profession or field of study and
                                    track your certification status with IBDL
                                </li>
                                <li>
                                    Download monthly magazines and newsletters free
                                </li>
                                <li>
                                    Download abstracts of bestsellers
                                </li>
                                <li>
                                    Download audiobooks on business administration and personal development
                                </li>
                                <li>
                                    Save on career-advancing certifications
                                </li>
                                <li>
                                    Participated in many meetings and gatherings for professional development
                                </li>
                                <li>
                                    Opportunity to join local IBDL chapters for educational and networking opportunities
                                </li>
                            </ul>
                        </div>
                        <div class="member-button">
                            <button style="color: white;" class="btn button">
                                JOIN NOW
                            </button>
                        </div>
                    </div>

                    <div class="member col-lg-5 m-auto d-flex flex-column">
                        <div class="member-main text-center">
                            <h5> <b> IBDL Membership </b></h5>
                            $25.00/year
                        </div>
                        <div class="member-body">
                            <ul>
                                <li>
                                    Be part of the global network essential for any profession or field of study and
                                    track your certification status with IBDL
                                </li>
                                <li>
                                    Download monthly magazines and newsletters free
                                </li>
                                <li>
                                    Download abstracts of bestsellers
                                </li>
                                <li>
                                    Download audiobooks on business administration and personal development
                                </li>
                                <li>
                                    Save on career-advancing certifications
                                </li>
                                <li>
                                    Participated in many meetings and gatherings for professional development
                                </li>
                                <li>
                                    Opportunity to join local IBDL chapters for educational and networking opportunities
                                </li>
                            </ul>
                        </div>
                        <div class="member-button">
                            <button style="color: white;" class="btn button">
                                SUBSCRIBE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection