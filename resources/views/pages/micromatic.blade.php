@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Micromatic','breadcrumb'=> 'Our
Products/Micromatic','header'=>'Our services/business simulation.jpg','icon'=>'products.png'])


<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div class="col-lg-6 mb-5 col-12 offset-lg-0 offset-0 cert-first order-lg-0 order-1">
                        <p>
                            Are you in the market for an engaging and dynamic approach to learning the ins and outs of
                            running a successful business? If so, look no further than Micromatic. With Micromatic, you
                            have the option to play alone or in a group, as you manage your company and compete with
                            other companies in the marketplace. Through multiple decision rounds and months of
                            operation, you'll learn how to make critical business decisions and beat out your
                            competition. Plus, with the solo version, you'll even challenge companies managed by the
                            computer. With Micromatic, you'll have a blast while gaining essential business skills.
                            <br> Are
                            you ready to take on the competition?
                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0 d-flex flex-column order-lg-1 order-0">
                        <div class="cert-img col-lg-12  m-auto col-7">
                            <img src="../../images/Services/micromatic.png" width="100%" height="auto" alt="">
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
                            Participating in Micromatic helps participants to develop their strategic thinking and adopt
                            the strategic mindset which is crucial to succeed in today's business world.
                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0">
                        <p class="cert-main-title">
                            Tools and resources:
                        </p>
                        <ul class="left-align">
                            <li>PC / Laptop</li>
                            <li>Internet connection</li>
                            <li>Student Manual </li>

                        </ul>
                    </div>
                </div>
                <div class="row cert-main">
                    <div class="col-lg-11 mb-5 col-12 offset-lg-0 offset-0">
                        <p class="cert-main-title">
                            How to play!
                        </p>

                        <p style="text-align: justify">
                            The Micromatic Team and Micromatic Solo programs use mathematical formulas and sets of rules
                            to simulate the outcomes of business decisions. This allows participants to determine how a
                            company's sales would be impacted by the price set for its products compared to its
                            competitors' products. Participants are required to make approximately 100 decisions for
                            each period of operation, which represents one quarter (three months) of a calendar year.
                            Participants begin managing Micromatic operations in Quarter 1 and can make decisions until
                            Quarter 20. The goal is to manage the Micromatic Company as efficiently and effectively as
                            possible.

                        </p>

                        <b> There are three stages involved in working with the Micromatic simulations:
                        </b>
                        <ol>
                            <li class="pt-2">
                                <b> The Forecasting Stage:</b> <br>
                                in this Stage, you enter decisions to test “what if” assumptions and then modify those
                                decisions until you enter a preferred set of decisions you think are the best.

                            </li>
                            <li class="pt-2">
                                <b> The Processing Stage:</b> <br>
                                in this Stage, an administrator program assesses the decisions of all competitors to
                                determine market share allocations for each company and the consequent profitability of
                                each company based on its operational performance.

                            </li>

                            <li class="pt-2">
                                <b> The Results Stage:</b> <br>
                                in this Stage you respond to the results of the processing of your decisions, looking at
                                your company’s reports to assess your actual versus forecasted performance. You then use
                                your analysis in a new Forecasting Stage as you begin the next decision round.

                            </li>


                        </ol>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0">

                    </div>
                </div>
                <div class="row cert-main">
                    <div class="col-lg-5 mb-5 col-12 offset-lg-0 offset-0">
                        <p class="cert-main-title">
                            Explore...!
                        </p>
                        Micromatic will help you decide your company mission, vision, goals, policies, and strategies.
                        Micromatic helps discovering your team skills such as planning, organizing, staffing, directing,
                        and controlling a business. As well as making decisions in some areas of:

                        <br>
                        <ul class="mt-2" style="text-align: left">

                            <li>Marketing, including market research and sales forecasts.</li>
                            <li> Finance, including short-term and long-term loans.</li>
                            <li>Manufacturing, including raw materials, production, scheduling, staffing, and inventory
                                control.</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0">
                        <p class="cert-main-title">
                            Develop...!
                        </p>
                        <ul class="left-align mt-2">
                            <li>Micromatic helps participants develop and practice their skills in problem solving,
                                teamwork, and human relations.</li>
                            <li>Participants will be able to put into practice the knowledge they have acquired in their
                                previous business studies.</li>
                            <li>The program allows participants to see the relationships among different areas of the
                                business, such as how marketing and operating decisions can impact the financial side of
                                the business.</li>
                            <li>Participants will sharpen their analytical skills in dealing with problems of
                                organization and make decisions under conditions of uncertainty, often with a lack of
                                sufficient information. </li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection