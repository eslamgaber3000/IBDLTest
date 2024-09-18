@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Sparta','breadcrumb'=> 'Our
Products/Sparta','header'=>'Our services/business simulation.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div class="col-lg-6 mb-5 col-12 offset-lg-0 offset-0 cert-first order-lg-0 order-1">
                        <p>
                            Are you ready to lead your team to success? Sparta is the game that can help you get there.
                            This unique combination of assessment, simulation, and training is designed to give leaders
                            like you the tools you need to understand your team members' personality types, communicate
                            with them effectively, and help them grow. With Sparta, you'll have access to an electronic
                            evaluation system, experienced trainers, and top-of-the-line game tools. You'll be able to
                            put trainees into real-world situations, practice your coaching skills, and learn how to
                            give constructive criticism. Employees will also have the opportunity to learn how to deal
                            with leaders and managers in a positive way and express their opinions more effectively.
                            With Sparta, you'll be well-equipped to address each employee's unique personality type and
                            lead your team to victory.
                            <br> Are you ready to level up your leadership skills and try Sparta?
                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0 d-flex flex-column order-lg-1 order-0">
                        <div class="cert-img col-lg-12  m-auto col-7">
                            <img src="../../images/Services/Sparta-01.png" width="100%" height="auto" alt="">
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

                            "Sparta" aims to help participants know more about personality types, coaching styles, and
                            handling difficult situations.

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
                            <li>Electronic evaluation system.</li>
                            <li>Trainers to lead and run the game.</li>
                            <li>Game tools that are provided by the "IBDL" learning group.</li>
                            <li>Audio and visual tools for presentation during the game.</li>

                        </ul>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0">
                        <p class="cert-main-title">
                            How to play!
                        </p>
                        <b> First stage:</b>
                        <ul class="left-align">
                            <li style="text-align: justify">
                                The simulation starts with an electronic evaluation with training scores aimed at
                                identifying
                                the coaching style followed instinctively out of four personality styles:
                                <ul>
                                    <li>
                                        Direct
                                    </li>
                                    <li>
                                        Considerate
                                    </li>
                                    <li>
                                        Energetic
                                    </li>
                                    <li>
                                        Methodical
                                    </li>
                                </ul>
                            </li>
                            <li style="text-align: justify">
                                Each team takes over the management of the branch for a certain period of time with the
                                aim of achieving the goals requested by the leader.During the simulation, the full
                                interpretation of the evaluation results and action planning
                                is explained.
                            </li>

                        </ul>
                        <b>Second stage:</b> <br>
                        The manager needs seven steps to discover the participants' personalities:
                        <ul>
                            <li> Building mutual trust</li>
                            <li> Opening the meeting</li>
                            <li> Establishing a commitment </li>
                            <li> Exploring alternatives </li>
                            <li> Receiving work commitment </li>
                            <li> Providing treatment excuses </li>
                            <li> Closing the meeting</li>

                        </ul>
                        <b>Third stage:</b>
                        <ul>
                            <li style="text-align: justify">
                                Focusing on discovering the internal coach inside each participant, identifying the
                                necessary skills, and training on coaching in a weekly manner.
                            </li>
                            <li>
                                Teams compete to discover the coach's style in knowing other methods.
                            </li>
                        </ul>
                        <b>Fourth stage:</b><br>
                        The successful team will receive interactive Sparta warrior tools among participants, including:
                        <ul>
                            <li>
                                Using the correct approach in every situation.
                            </li>
                            <li>
                                Choosing the correct answer for any meeting operation.
                            </li>
                            <li>
                                Utilizing the best training capabilities.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row cert-main">
                    <div class="col-lg-5 mb-5 col-12 offset-lg-0 offset-0">
                        <p class="cert-main-title">
                            Explore...!
                        </p>
                        <p>
                            This will help you explore the skills of participants in your organization's work team, such
                            as leadership abilities, coaching skills, decision-making, and conflict resolution methods..
                            They will acquire skills in challenging and adventuring learning environment.
                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0">
                        <p class="cert-main-title">
                            Develop...!
                        </p>
                        <ul class="left-align">
                            <li style="text-align: justify"> Your team's abilities will be developed in many areas
                                related to coaching and
                                leadership such as the ability to analyze, lead, motivate, make decisions, negotiate and
                                resolve conflicts.</li>
                            <li>
                                Acquiring skills on how to handle situations under the influence of power.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection