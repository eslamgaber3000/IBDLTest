@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>$page->title,'breadcrumb'=>
$page->breadcrumb,'header'=>$page->header,'icon'=>$page->icon])
<div class="container-fluid">
    <div class="row">
        <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
            <p>
                IBDL Learning Group’s in-house training courses which are tailored to your business needs are delivered
                at your convenient and preferred location to save you time, money, and travel hassles. In-house training
                courses are cost-effective and provide a great opportunity to build a strong bond between the team
                members making your business compliant and competitive. Our customized in-house training courses that
                are designed specifically to meet your organization’s unique needs can help solve business challenges
                and enhance leadership skills throughout your firm. You can benefit from our expert solutions ranging
                from short capability-building workshops to multi-disciplinary leadership training courses, consulting,
                coaching, and more.
            </p>
            <p>
                The rules of business have been rewritten. The need of the day is leaders who effectively lead
                collaborative teams that work towards customer-centric solutions. Smart businesses nurture an
                environment where their people engage in lifelong learning and upskilling to keep abreast with change
                and disruption while maximizing their own potential. This is no longer a luxury but a necessity.
            </p>
            <br>
            <b>IBDL Learning Group invites you to explore its short training programs, which are built on:</b>

            <ul>
                <li>
                    <b style="color: #e30618">
                        World-class content,
                    </b>
                    expertly produced by top B-school educators and industry thought leaders.
                </li>
                <li>
                    <b style="color: #e30618">
                        Engaging learner experience
                    </b>
                    with data-driven recommendations your employees will actually want to use.
                </li>
                <li>
                    <b style="color: #e30618">
                        Strategic insights
                    </b>
                    that help business leaders lead effectively.
                </li>
            </ul>
            <br>
            <p>
                <b style="color: gray">
                    These programs can be facilitated through two formats:
                </b>
            </p>
            <ul>
                <li>
                    <b style="color: #e30618">
                        Customized Development Programs
                    </b>
                    developed for a particular member company based on an organization’s specific requirements.
                </li>
                <li>
                    <b style="color: #e30618">
                        Open Development Programmes
                    </b>
                    are announced at regular intervals bearing in mind the business environment
                    and can be attended by individuals across various member companies.
                </li>
            </ul>
            <br>
            <p>
                For more details, <b><a href="" style="color: #e30618">download the Customized Development Programmes
                        brochure</a></b> or view the individual web
                pages given below.
            </p>

            <p>
                <a style="color: #e30618;font-weight:600" href="/custom_training_form">
                    Apply Now
                </a>
            </p>
        </div>
        @include('include.sidebar')
    </div>
</div>
@endsection