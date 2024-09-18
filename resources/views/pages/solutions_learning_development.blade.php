@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Solutions For Learning and Development','breadcrumb'=> 'Our Services/Solutions For
Learning and Development','header'=>'Our services/learning solutions.jpg','icon'=>'services.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row learning-solutions-main">
                    <div class="col-lg-5 col-10 offset-1 offset-lg-0 mb-4">
                        <p class="learning-solutions-main-title">
                            Training and Development
                        </p>
                        <p>
                            By Solutions for Learning and Development IBDL provides customized training programs
                            tailored to the specific needs of each business. IBDL’s experienced team of trainers use the
                            latest technology and methods to ensure that businesses can get the most out of their
                            training.
                            <br> We also offer comprehensive performance management tools that enable businesses to
                            track and measure the progress of their employees. These Tools are designed to help
                            businesses identify areas of improvement and develop effective strategies for achieving
                            their goals.

                        </p>
                    </div>
                    <div class="col-lg-5 col-10 offset-1 offset-lg-1 mb-4">
                        <p class="learning-solutions-main-title">
                            Knowledge Management
                        </p>
                        <p>
                            By Solutions for Learning and Development IBDL offers comprehensive knowledge management
                            solutions. IBDL team help businesses create an effective knowledge management system that
                            allows them to store, share, and access information quickly and easily. We also offer a wide
                            range of tools and resources to help businesses manage their knowledge. These tools are
                            designed to help businesses maximize the value of their knowledge and ensure that it is used
                            effectively.
                        </p>
                    </div>
                </div>
                <div class="row learning-solutions-main">
                    <div class="col-lg-5 col-10 offset-1 offset-lg-0 mb-4">
                        <p class="learning-solutions-main-title">
                            Technology Solutions </p>
                        <p>
                            By Solutions for Learning and Development IBDL offers a wide range of technology solutions
                            to help businesses maximize the value of their training, development, and knowledge
                            management initiatives. IBDL team help businesses identify the most effective technology
                            solutions for their specific needs. We also offer a wide range of tools and resources to
                            help businesses integrate technology into their learning and development initiatives.
                        </p>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection