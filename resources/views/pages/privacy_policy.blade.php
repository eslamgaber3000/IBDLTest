@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Privacy Policy','breadcrumb'=> 'Who We Are/Privacy
Policy','header'=>$header,'icon'=>$icon])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div>
                    <h2>Fair Work Policy</h2>
                    <p class="">
                         processes personal data in a way that complies with the relevant
                        data protection legislation. We may collect some personal data from you through submission forms
                        or surveys hosted on these University webpages.
                        <br>
                        <br>

                        Each time you submit information through the University's webpages, there will be an explanation
                        as to why we need that information. Generally we need your contact details in order to respond
                        to an enquiry, but we may ask you if we can use those details for subsequent communications in
                        relation to the business of the University. If you agree to us retaining your data for this
                        purpose, you retain the right, at any time, to ask us to remove your details from our records
                        either by responding to any email stating that you wish to "unsubscribe".
                        <br>
                        <br>

                        Your personal data will be held securely on University servers and deleted when no longer
                        needed. If we need to send any data to your home address we may provide those details to our
                        third party mailing house in order to meet your request but we will not share your contact
                        details with any other third parties.
                        <br>
                        <br>

                        If you contact the University by email, we keep a record of that correspondence for the purpose
                        of conducting University business. We do not add any email addresses received in this way to any
                        mailing databases and again, we do not provide them to third parties.


                    </p>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection