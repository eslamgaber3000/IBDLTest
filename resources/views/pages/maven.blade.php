@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Maven','breadcrumb'=> 'Our
Products/Maven','header'=>'Our services/business simulation.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">

                    <div class="col-lg-6 mb-5 col-12 offset-lg-0 offset-0 cert-first order-lg-0 order-1">
                        <p>
                            Step into the world of business and test your skills like never before with Maven! As the
                            manager of a startup, you'll make critical marketing decisions on pricing, quality, and
                            promotion, as well as vital non-marketing choices on production and borrowing. With two
                            versions of the game, Maven Team and Maven Solo, you can challenge real human-managed
                            companies or computer-run ones. Each decision-round represents three intense months of
                            operations, and with realistic competition and hands-on problem solving, you'll learn to
                            make smart and informed choices. So join the game and become a Maven of the business world
                            today!
                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0 d-flex flex-column order-lg-1 order-0">
                        <div class="cert-img col-lg-12  m-auto col-7">
                            <img src="../../images/Services/Maven.jpg" width="100%" height="auto" alt="">
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
                            Participating in the "Maven" game helps participants to deal with a complete set of
                            variables that needs to develop outstanding decisions to succeed in the business world.
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
                            The Maven program uses mathematical formulas and rules to simulate real-world business
                            decisions. As a player in Maven, you will make decisions about marketing two products in
                            three sales territories per quarter. Your objective is to analyze your results, identify
                            errors, and modify decisions to optimize performance. The program challenges players to
                            improve their decision-making and analytical skills in a safe yet authentic business
                            environment.
                        </p>
                        <b>Maven’s three stages in a decision-round:</b> <br>
                        There are three stages involved in working with the Maven simulation:
                        <ol>
                            <li class="my-2">
                                <b> The Forecasting Stage.</b> <br>
                                You enter decisions to test “what if” assumptions and then modify those decisions until
                                you arrive at a set of decisions you think are acceptable.
                                <br>
                            </li>
                            <li class="mb-2">
                                <b> The Processing Stage.</b> <br>
                                The program assesses the decisions of all competitors to determine market share
                                allocations for
                                each company and the consequent profitability of each company. (In Maven
                                Team, other participant-run teams supply competitors’ decisions while in Maven Solo the
                                computer
                                generates competitors’ decisions.)
                                <br>
                            </li>
                            <li>
                                <b> The Results Stage.</b><br>
                                In the Results Stage, you analyze the results of your processed decisions, looking at
                                your
                                company’s reports to evaluate your actual performance versus what you anticipated during
                                the
                                Forecasting Stage. You then use your analysis in a new Forecasting Stage as you begin
                                the next
                                decision round.
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
                        By working with Maven Team and Maven Solo, you will gain the following experiences and
                        knowledge:
                        <br>
                        <ul class="mt-2" style="text-align: left">

                            <li> Experience in managing a marketing-driven enterprise and dealing with the problems and
                                issues that arise in that environment. </li>
                            <li> Understanding the importance of a sound marketing plan in guiding marketing decisions,
                                including developing a common vision and strategy for product development, and the need
                                for tactical planning to adapt to changing conditions.</li>
                            <li> Acquiring experiences to enhance your understanding of marketing concepts and theories.
                            </li>
                            <li> Understanding the relationships between marketing, operations, and finance, and how
                                they affect each other</li>
                            <li> Understanding the connections between financial statements such as the cash flow
                                statement, the income statement, and the balance sheet, and their relevance to marketing
                                reports.</li>
                            <li> Experience in the dynamics of competing in a constantly-changing market landscape and
                                performing market research to stay ahead of competitors.</li>


                        </ul>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0">
                        <p class="cert-main-title">
                            Develop...!
                        </p>
                        By using Maven Team and Maven Solo, you can expect to:
                        <br>
                        <ul class="left-align mt-2">
                            <li> Enhance your skills in planning and running a small business. </li>
                            <li> Make informed decisions in areas such as marketing, finance, and production scheduling
                                and inventory control.</li>
                            <li> Utilize "what-if" scenarios to test your decision-making abilities and see how your
                                choices would impact your business.</li>
                            <li> Monitor the outcomes of your decisions and adjust your approach accordingly in the
                                upcoming quarters of operation.</li>

                        </ul>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection