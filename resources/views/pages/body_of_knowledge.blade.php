@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>$page->title,'breadcrumb'=>
$page->breadcrumb,'header'=>$page->header,'icon'=>$page->icon])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="about-content">
                    The body of knowledge (BoK) refers to the collective knowledge and understanding within a specific
                    field or discipline. It encompasses the theories, principles, concepts, practices, and research
                    findings that have been accumulated and validated over time by experts and professionals in the
                    field. The BoK serves as a foundation for education, research, and professional practice, providing
                    a framework for understanding and advancing the discipline.
                    The body of knowledge concept helps to define and structure a field of study, ensuring that there is
                    a common understanding of the fundamental concepts and principles that underpin it. It provides a
                    comprehensive overview of what professionals in the field should know, enabling them to apply the
                    knowledge effectively in practical situations.

                    <br> <br>
                    Enjoy exploring the body of knowledge of our professional qualifications:
                    <br>
                </div>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-container">
                        <h2 class="" id="heading">
                            <button class="d-flex justify-content-between accordion-button collapsed"
                                style="background-color: transparent;width:100%" type="button" data-bs-toggle="collapse"
                                data-bs-target="#heading1" aria-expanded="true" aria-controls="heading1">
                                <img src="../../images/certs/Essential.png" style="width: 8em" height="auto" alt="">
                            </button>
                        </h2>
                        <div id="heading1" class="accordion-collapse collapse " aria-labelledby="heading">
                            <div style="text-align: justify" class="accordion-body">
                                IBDL Essential is your gateway to the business world, giving you an engaging educational
                                experience specially designed for you. Moving from understanding the fundamentals of
                                business, to studying examples of leading organizations globally, to allow you to
                                acquire the knowledge and abilities you need for your next move to boost your career
                                potential and/or start your own business.
                            </div>
                        </div>
                    </div>


                    <div class="accordion-container">
                        <h2 class="" id="heading-2">
                            <button class="d-flex justify-content-between accordion-button collapsed"
                                style="background-color: transparent;width:100%" type="button" data-bs-toggle="collapse"
                                data-bs-target="#heading2" aria-expanded="true" aria-controls="heading2">
                                <img src="../../images/certs/Professional.png" style="width: 10em" height="auto" alt="">
                            </button>
                        </h2>
                        <div id="heading2" class="accordion-collapse collapse" aria-labelledby="heading-2">
                            <div style="text-align: justify" class="accordion-body">
                                IBDL Professional is your powerful tool to develop the skills and knowledge that will
                                help you to move along your professional career. IBDL Professional enables organizations
                                to prepare second-line leaders and managers through developing their management skills,
                                which enable them to lead their organizations efficiently.
                                Specially designed in an interactive and enjoyable way, in which you move from studying
                                the management skills, through understanding the basics of planning and strategic
                                management, providing you with the knowledge and skills you need to grow on the personal
                                and professional levels and invest in your future.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-container" style="border-bottom: 1px solid lightgrey;">
                        <h2 class="" id="heading-3">
                            <button class="d-flex justify-content-between accordion-button collapsed"
                                style="background-color: transparent;width:100%" type="button" data-bs-toggle="collapse"
                                data-bs-target="#heading3" aria-expanded="true" aria-controls="heading3">
                                <img src="../../images/certs/Master.png" style="width: 6.8em" height="auto" alt="">
                            </button>
                        </h2>
                        <div id="heading3" class="accordion-collapse collapse" aria-labelledby="heading-3">
                            <div style="text-align: justify" class="accordion-body">
                                IBDL Master is the business leaders' path to develop and implement accurate business
                                strategies by providing the knowledge and skills necessary to make efficient decisions
                                that contribute to the success of their organizations.
                                IBDL Master enables leaders to enhance the competitive position of the organization and
                                lead in such a way that guarantees excellence in the business world.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-container" style="border-bottom: 1px solid lightgrey;">
                        <h2 class="" id="heading-4">
                            <button class="d-flex justify-content-between accordion-button collapsed"
                                style="background-color: transparent;width:100%" type="button" data-bs-toggle="collapse"
                                data-bs-target="#heading4" aria-expanded="true" aria-controls="heading4">
                                <img src="../../images/certs/CE.png" style="width: 4.4em" height="auto" alt="">
                            </button>
                        </h2>
                        <div id="heading4" class="accordion-collapse collapse" aria-labelledby="heading-4">
                            <div style="text-align: justify" class="accordion-body">
                                Certified Educator is the teachers' tool for providing a rich and personalized learning
                                experience for students.
                                It enables schools to improve teachers' qualities by improving teaching skills,
                                knowledge, and pedagogical strategies, which enhance the quality of teachers in the
                                schools.
                                Certified Educator helps the teacher to develop new skills and strategies, improve
                                classroom management, and how to better communicate effectively with students, passing
                                by learning modern and effective ways to provide information to different students
                                within the same class, leading to the ability to motivate students to interact during
                                the entire educational stages.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-container" style="border-bottom: 1px solid lightgrey;">
                        <h2 class="" id="heading-5">
                            <button class="d-flex justify-content-between accordion-button collapsed"
                                style="background-color: transparent;width:100%" type="button" data-bs-toggle="collapse"
                                data-bs-target="#heading5" aria-expanded="true" aria-controls="heading5">
                                <img src="../../images/certs/CIE.png" style="width: 4.5em" height="auto" alt="">
                            </button>
                        </h2>
                        <div id="heading5" class="accordion-collapse collapse" aria-labelledby="heading-5">
                            <div style="text-align: justify" class="accordion-body">
                                Certified Industrial Engineering is your one of a kind qualification that gives you the
                                opportunity to take the next step in your manufacturing field. You will acquire the
                                knowledge and experience necessary to improve your efficiency in managing industrial
                                processes, and to gain a deeper understanding of the basic elements of operations
                                management, quality management, project management, and supply chain management, thus
                                improving your ability to identify, formulate and solve problems of industrial
                                processes, and takes your career to another level.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection