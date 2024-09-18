@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'FAQs','breadcrumb'=> 'Media/FAQs','header'=>'products.jpg','icon'=>'products.png'])

<section>
  <div class="container-fluid">
    <div style="background-color: whitesmoke;" class="row">
      <div style="margin:5em auto" class="col-lg-7 col-11 offset-0">

        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-container">
            <h2 class="" id="heading">
              <button class="d-flex justify-content-between accordion-button collapsed"
                style="background-color: transparent;width:100%" type="button" data-bs-toggle="collapse"
                data-bs-target="#heading1" aria-expanded="true" aria-controls="heading1">
                Accordion Item 1
              </button>
            </h2>
            <div id="heading1" class="accordion-collapse collapse " aria-labelledby="heading">
              <div class="accordion-body">
                is shown by default, until the collapse plugin adds the appropriate classes that we use to style each
                element. These classes control the overall appearance, as well as the showing and hiding via CSS
                transitions. You can modify any of this with custom CSS or overriding our default variables.
              </div>
            </div>
          </div>


          <div class="accordion-container">
            <h2 class="" id="heading-2">
              <button class="d-flex justify-content-between accordion-button collapsed"
                style="background-color: transparent;width:100%" type="button" data-bs-toggle="collapse"
                data-bs-target="#heading2" aria-expanded="true" aria-controls="heading2">
                Accordion Item 1
              </button>
            </h2>
            <div id="heading2" class="accordion-collapse collapse" aria-labelledby="heading-2">
              <div class="accordion-body">
                is shown by default, until the collapse plugin adds the appropriate classes that we use to style each
                element. These classes control the overall appearance, as well as the showing and hiding via CSS
                transitions. You can modify any of this with custom CSS or overriding our default variables.
              </div>
            </div>
          </div>

          <div class="accordion-container" style="border-bottom: 1px solid lightgrey;">
            <h2 class="" id="heading-3">
              <button class="d-flex justify-content-between accordion-button collapsed"
                style="background-color: transparent;width:100%" type="button" data-bs-toggle="collapse"
                data-bs-target="#heading3" aria-expanded="true" aria-controls="heading3">
                Accordion Item 1
              </button>
            </h2>
            <div id="heading3" class="accordion-collapse collapse" aria-labelledby="heading-3">
              <div class="accordion-body">
                is shown by default, until the collapse plugin adds the appropriate classes that we use to style each
                element. These classes control the overall appearance, as well as the showing and hiding via CSS
                transitions. You can modify any of this with custom CSS or overriding our default variables.
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