@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Giff','breadcrumb'=> 'Our
ProductS/Giff','header'=>'products.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-7 col-11 offset-0">
                <div>
                    <p class="about-content">
                        GIFF is an executive program that targets decision-makers in
                        government interested in future foresight. The participants will
                        acknowledge the value of staying up-to-date with the latest
                        intellect, management visions of the international expertise
                        leadership Missouri State University and IBDL Group Egypt.
                        The program designed by leading experts in leadership,
                        government innovation, technology, and sustainable development
                        from Missouri State University in collaboration with practitioners
                        and Experts from Egypt to focus on practical approaches to joint
                        growth and development experience.
                    </p>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection