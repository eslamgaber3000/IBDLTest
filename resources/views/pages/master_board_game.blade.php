@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Master Board Game','breadcrumb'=> 'Our Products/Master Board
Game','header'=>'Our services/business simulation.jpg','icon'=>'products.png'])
<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div class="col-lg-6 mb-5 col-12 offset-lg-0 offset-0 cert-first order-lg-0 order-1">
                        <p>
                            Looking for a fun and interactive way to improve your decision-making, team building and
                            communication skills? Look no further than Master Board Game, one of the most efficient
                            business simulation games. In this exciting game, teams are presented with real-world
                            problems and must develop the necessary plans to solve them. This game offers an engaging
                            and interactive experience that helps individuals improve their management and leadership
                            capabilities in a funny and learning way.
                            <br>
                            Get ready to test your skills and boost your professional development with Master Board
                            Game.
                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0 d-flex flex-column order-lg-1 order-0">
                        <div class="cert-img col-lg-12  m-auto col-7">
                            <img src="../../images/Services/MBG-01.png" width="100%" height="auto" alt="">
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

                            Participating in the "Master Board Game" helps participants explore and feel the risks, make
                            decisions, and see the impact of their actions to gain a better vision in their
                            organizations.

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
                                Audio and visual tools for presentation throughout the game.
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0">
                        <p class="cert-main-title">
                            How to play!
                        </p>

                        <ul class="left-align">
                            <li> Participants are divided into teams, with each team representing a branch of a company.
                            </li>
                            <li>
                                Each team takes over the management of the branch for a certain period of time with the
                                aim of achieving the goals requested by the leader.
                            </li>
                            <li>
                                The trainer changes the game environment continuously in order to stimulate
                                participants' skills.
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row cert-main">
                    <div class="col-lg-5 mb-5 col-12 offset-lg-0 offset-0">
                        <p class="cert-main-title">
                            Explore...!
                        </p>
                        Exploring the skills of the work team in your organization that include:
                        <ul class="left-align">

                            <li>Leadership skills.</li>
                            <li>Decision-making abilities.</li>
                            <li>Conflict resolution strategies.</li>
                            <li>Planning.</li>
                            <li>Collaborative.</li>
                            <li>Creative thinking.</li>
                            <li>Stress tolerance.</li>
                            <li>Team building.</li>

                        </ul>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0">
                        <p class="cert-main-title">
                            Develop...!
                        </p>
                        Playing Master Board Game will help you to:
                        <ul class="left-align">
                            <li>Develop your team's in leadership abilities. </li>
                            <li>The game encourages risk-taking and provides valuable experience in resource utilization
                                and analysis of the competitive environment. </li>
                            <li>Additionally, the game fosters negotiation and conflict resolution skills, encourages
                                collaboration and interaction, and fosters innovation and creativity. </li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection