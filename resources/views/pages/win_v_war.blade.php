@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Win Vs. War','breadcrumb'=> 'Our Products/Win Vs.
War','header'=>'Our services/business simulation.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div class="col-lg-6 mb-5 col-12 offset-lg-0 offset-0 cert-first order-lg-0 order-1">
                        <p>
                            Experience real-life challenges and improve your decision-making with Win vs War. Get
                            started with this epic simulation game today and experience the thrill of victory. Win vs
                            War aims to develop administrative, planning, collaborative, and creative skills.
                            The game allows participants to experience real-life situations and problems and try to find
                            the best solutions, thus helping them to improve their skills, analyze the market, identify
                            needs and trends, improve organizational services and make the right decisions.
                            <br>
                            So what are you waiting for? Join the battle today and emerge victorious with Win vs. War!

                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0 d-flex flex-column order-lg-1 order-0">
                        <div class="cert-img col-lg-12  m-auto col-7">
                            <img src="../../images/Services/WvW-01.png" width="100%" height="auto" alt="">
                        </div>
                        {{-- <div class="cert-flyer col-12">
                            <p class="mb-1"> <b> Download Certification Flyers</b></p>
                            <img src="../../images/icon1.png" width="30px" height="auto" alt="">
                            <img src="../../images/icon2.png" width="40px" height="auto" alt="">
                            <img src="../../images/icon3.png" width="30px" height="auto" alt="">
                        </div> --}}
                    </div>
                </div>
                <div class="row cert-main">
                    <div class="col-lg-5 mb-5 col-12 offset-lg-0 offset-0">
                        <p class="cert-main-title">
                            Participate...!
                        </p>
                        <p>

                            Participating in Win vs. War game helps participants keep up with the recent changes in
                            business world.

                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0">
                        <p class="cert-main-title">
                            Game time:
                        </p>
                        <p>
                            Full training day

                        </p>
                    </div>
                </div>
                <div class="row cert-main">
                    <div class="col-lg-5 mb-5 col-12 offset-lg-0 offset-0">
                        <p class="cert-main-title">
                            Tools and resources:
                        </p>
                        <ul class="left-align">
                            <li>
                                Trainers to lead and run the game.
                            </li>
                            <li>
                                Game tools provided by the "IBDL" learning group.
                            </li>
                            <li>
                                Audiovisual equipments for presentation during the game.
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0">
                        <p class="cert-main-title">
                            How to play!
                        </p>

                        <ul class="left-align">
                            <li> Participants are divided into teams, with each team representing the government of a
                                country.
                            </li>
                            <li>
                                Each government takes control for a certain period of time to use the game resources to
                                achieve their goals through planning, distribution of roles within the team,
                                negotiations,
                                communication, and many other skills.
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row cert-main">
                    <div class="col-lg-5 mb-5 col-12 offset-lg-0 offset-0">
                        <p class="cert-main-title">
                            Explore...!
                        </p>
                        Win vs. War will help you explore the skills of your workplace team members such as:

                        <ul class="left-align">

                            <li>
                                Planning,
                            </li>
                            <li>
                                Cooperation
                            </li>
                            <li>
                                Creativity that they need to succeed in business management. They will also acquire
                                skills such as how to deal with customers and meet their needs
                            </li>
                            <li>
                                Sense of servicing, as well as how to deal with competitors and identify appropriate
                                strategies to improve the organization's position in the market.
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0">
                        <p class="cert-main-title">
                            Develop...!
                        </p>
                        Your team's capabilities will grow in many business-related areas such as:

                        <ul class="left-align">
                            <li> Planning</li>
                            <li> Organization</li>
                            <li>Resources utilization</li>
                            <li>Competitive environment analysis</li>
                            <li>Leadership</li>
                            <li>Decision-making</li>
                            <li>Financial management</li>
                            <li>Negotiation skills</li>
                            <li>Interaction and collaboration</li>
                            <li>Innovation and creativity</li>
                            <li>Continuous learning</li>
                            <li>Change adaptability.</li>

                        </ul>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection