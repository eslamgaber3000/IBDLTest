@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Solutions For Business','breadcrumb'=> 'Our Services/Solutions For
Business','header'=>'Our services/learning solutions.jpg','icon'=>'services.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row learning-solutions-main">
                    <div class="col-lg-5 col-10 offset-1 offset-lg-0 mb-4">
                        <p class="learning-solutions-main-title">
                            Social Learning Platform:
                        </p>
                        <ul>
                            <li>
                                <b>
                                    For learners:
                                </b>
                                <p>
                                    IBDL offers Social Learning Platform which allow employees to collaborate, share,
                                    and learn with each other in a virtual space. In addition, this allows learners to
                                    access a wide range of resources, activities, and tools that can help them to
                                    develop their knowledge and skills. It also provides a safe and secure environment
                                    for learners to explore and express their ideas, opinions, and experiences.
                                </p>
                            </li>
                            <li>
                                <b>
                                    For educators:
                                </b>
                                <p>
                                    Social learning platform can help to create a more engaging and interactive learning
                                    environment. It can also provide a way to track learner progress and provide
                                    feedback. Additionally, it can be used to help learners to collaborate on projects,
                                    providing a platform for learners to work together and share their knowledge and
                                    skills.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-10 offset-1 offset-lg-1 mb-4">
                        <p class="learning-solutions-main-title">
                            Learning Management Systems:
                        </p>
                        <p>
                            IBDL provides a comprehensive system for tracking, managing, and assessing employee
                            progress. IBDL offers a variety of benefits for organizations, including cost savings,
                            scalability, and increased efficiency. So organizations can create and deliver training
                            materials quickly and easily, and track progress and results in real time. In addition to
                            providing organizations with the ability to measure the impact of the training programs,
                            this can lead to improved organizational performance and increased employee engagement.
                        </p>
                    </div>
                </div>
                <div class="row learning-solutions-main">
                    <div class="col-lg-5 col-10 offset-1 offset-lg-0 mb-4">
                        <p class="learning-solutions-main-title">
                            Employee Data Analytics:
                        </p>
                        <p>
                            IBDL provides organizations with a better understanding of their workforce. It can help
                            identify areas of improvement and identify potential areas of growth. By leveraging data,
                            organizations can develop strategies to improve employee engagement, identify skills gaps,
                            and develop targeted training programs. In addition to identifying trends in employee
                            performance and identify areas of opportunity. By leveraging data, organizations can develop
                            strategies to optimize performance, increase efficiency, and reduce costs.
                        </p>
                    </div>
                    <div class="col-lg-5 col-10 offset-1 offset-lg-1 mb-4">
                        <p class="learning-solutions-main-title">
                            Online Learning Platforms:
                        </p>
                        <p>
                            Which provide businesses with access to online courses, learning materials, and interactive
                            exercises on a variety of topics related to business.

                        </p>

                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection