@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Testing provider accreditation','breadcrumb'=> 'Our Services/Testing provider
accreditation','header'=>'Our services/accreditation.jpg','icon'=>'services.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <P style="text-align: justify;font-size:1.1em">
                    IBDL Learning Group is continuously expanding its network of testing centers. If you currently
                    operate a center and are interested in joining the IBDL Testing Network, please refer to the
                    outlined requirements below. We eagerly anticipate reviewing your application.
                </P>
                <h5>
                    <b>
                        Requirements
                    </b>
                </h5>

                <b>Testing Area</b>
                <ul>
                    <li>
                        The testing area must be situated in a manner that ensures Test Takers are not disturbed by
                        foot traffic, conversations, or external noises.
                    </li>
                    <li>
                        Noise-canceling headphones or disposable earplugs must be provided to Test Takers or be
                        available at each IBDL workstation before the start of the exam.
                    </li>
                    <li>
                        The testing area must remain free from any other activities during a testing session.
                    </li>
                    <li>
                        IBDL prohibits Test Takers from bringing tobacco products, food, drinks, or chewing gum into the
                        testing area.

                    </li>
                </ul>

                <b> Control of Room Temperature and Ventilation
                </b>
                <ul>
                    <li>
                        The testing area must be comfortable and well-ventilated, maintaining a room temperature between
                        70 and 75 degrees Fahrenheit or 20 and 25 degrees Celsius.
                    </li>
                    <li>
                        Ventilation should ensure continuous air circulation.
                    </li>
                </ul>

                <b> Ample Lighting </b>

                <ul>
                    <li>
                        The testing area must have sufficient lighting, allowing Test Takers to easily read test items,
                        materials, and the computer screen without difficulty.
                    </li>

                </ul>


                <b> Sufficient Physical Space </b>
                <ul>
                    <li>
                        The testing area must be large enough to place the testing stations, computer tables, and chairs
                        adequately, such that the Test Taker can easily move about.
                    </li>
                    <li>
                        Each testing workstation must be separated with a partition or spaced apart by 5 feet or 1.5
                        meters to
                        prevent a candidate from viewing another computer screen. If a partition or an adequate amount
                        of space
                        between workstations is not available, an IBDL Test Taker cannot be seated next to another IBDL
                        Test
                        Taker.
                    </li>
                </ul>



                <b>Workspace</b>
                <ul>
                    <li>
                        Workstations/tabletops must be large enough to allow for the monitor, keyboard (if not placed on
                        a
                        slide tray under the desk), mouse and test aids used by a Test Taker.
                    </li>
                    <li>
                        Minimum height should be 30 in (76.2 cm) and minimum width should be 42 in (107 cm). Depth can
                        vary
                        based on whether a slide tray is used under the desk for a keyboard, and the type of monitor
                        being used.
                    </li>
                </ul>

                <br>
                <p class="mt-3"> <b style="color:#e30618"> Become A Testing Center </b>
                    <br>
                    Simply complete the online application and we will begin the qualifying process. Please note: you
                    must
                    complete a separate application for each testing location.
                </p>

                <a href="{{url('pages/'.'contact_acc_team')}}" style="color:#e30618" class="fw-bold mb-2">
                    Contact the accreditation team
                </a>
                <br>
                <a style="color:#e30618" class="fw-bold" href="{{url('accredetation/testing_provider')}}">
                    Apply Now!
                </a>




            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>

@endsection