@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Products Information','breadcrumb'=> 'Media/Products
Information','header'=>'pages/media.jpg','icon'=> 'media2.png'])


<style>
    .sendToPdfFiller {
        display: none !important;
    }
</style>
<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-12 offset-0">
                <div class="row cert-main ">
               
                 `
                      <div class="col-lg-10 flex-wrap col-12 mb-5 d-flex justify-content-between align-items-end">
                     <div class=" d-flex align-items-end ">
                        <div class="col-8 mb-3 col-lg-5">
                         <img src="../../storage/pages/IBDL-logo.png" width="57%" height="auto" alt="">
                        </div>
                    <div class="col-12 col-md-6 mb-3">
                      <span><b> Company Profile </b></span>
                      <a target="_blank" href="{{ route('getFile','IBDL Profile 2024.pdf')}}">
                        <img src="../../images/icon2.png" width="30px" height="auto" alt="">
                      </a>
                     
                   
                     
                    </div>
                  </div>
                </div>
                    <hr>
                   <div class="col-lg-10 flex-wrap col-12 mb-5 d-flex justify-content-between align-items-end">
                  <div class="d-flex align-items-end ">
                    <div class="col-8 mb-3 col-lg-5">
                      <img src="../../storage/pages/Essential.png" width="80%" height="auto" alt="">
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                      <span><b> Body Of Knowledge</b></span>
                      <a target="_blank" href="{{ route('getFile','Essential_BoK.pdf')}}">
                        <img src="../../images/icon2.png" width="30px" height="auto" alt="">
                      </a>
                      <a target="_blank" href="{{ route('getFile','Essential_BoK_Arabic.pdf')}}">
                        <img src="../../images/icon1.png" width="30px" height="auto" alt="">
                      </a>
                      <br> <br>
                      <span><b> Flyer</b></span>
                      <a target="_blank" href="{{ route('getFile','Essential_Flyer.pdf')}}">
                        <img src="../../images/icon2.png" width="30px" height="auto" alt="">
                      </a>
                      <a target="_blank" href="{{ route('getFile','Essential_Flyer_Arabic.pdf')}}">
                        <img src="../../images/icon1.png" width="30px" height="auto" alt="">
                      </a>
                    </div>
                  </div>
                </div>
                    <hr>

      <div class="col-lg-10 flex-wrap col-12 mb-5 d-flex justify-content-between align-items-end">
                  <div class="d-flex align-items-end">
                    <div class="col-8 mb-3 col-lg-5">
                      <img src="../../storage/pages/Professional.png" width="96%" height="auto" alt="">
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                      <span><b> Body Of Knowledge</b></span>
                      <a target="_blank" href="{{ route('getFile','Professional_BoK.pdf')}}">
                        <img src="../../images/icon2.png" width="30px" height="auto" alt="">
                      </a>
                      <a target="_blank" href="{{ route('getFile','Professional_BoK_Arabic.pdf')}}">
                        <img src="../../images/icon1.png" width="30px" height="auto" alt="">
                      </a>
                      <br> <br>
                      <span><b> Flyer</b></span>
                      <a target="_blank" href="{{ route('getFile','Professional_Flyer.pdf')}}">
                        <img src="../../images/icon2.png" width="30px" height="auto" alt="">
                      </a>
                      <a target="_blank" href="{{ route('getFile','Professional_Flyer_Arabic.pdf')}}">
                        <img src="../../images/icon1.png" width="30px" height="auto" alt="">
                      </a>
                    </div>
                  </div>
                </div>
                    <hr>
                    
                          <div class="col-lg-10 flex-wrap col-12 mb-5 d-flex justify-content-between align-items-end">
                  <div class="d-flex align-items-end">
                    <div class="col-8 mb-3 col-lg-5">
                      <img src="../../storage/pages/Master.png" width="70%" height="auto" alt="">
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                      <span><b> Body Of Knowledge</b></span>
                      <a target="_blank" href="{{ route('getFile','Master_BoK.pdf')}}">
                        <img src="../../images/icon2.png" width="30px" height="auto" alt="">
                      </a>
                      <a target="_blank" href="{{ route('getFile','Master_BoK_Arabic.pdf')}}">
                        <img src="../../images/icon1.png" width="30px" height="auto" alt="">
                      </a>
                      <br> <br>
                      <span><b> Flyer</b></span>
                      <a target="_blank" href="{{ route('getFile','Master_Flyer.pdf')}}">
                        <img src="../../images/icon2.png" width="30px" height="auto" alt="">
                      </a>
                      <a target="_blank" href="{{ route('getFile','Master_Flyer_Arabic.pdf')}}">
                        <img src="../../images/icon1.png" width="30px" height="auto" alt="">
                      </a>
                    </div>
                  </div>
                </div>
                    <hr>
                    
                    
                    
                          <div class="col-lg-10 flex-wrap col-12 mb-5 d-flex justify-content-between align-items-end">
                  <div class="d-flex align-items-end">
                    <div class="col-8 mb-3 col-lg-5">
                      <img src="../../storage/pages/CIE.png" width="48%" height="auto" alt="">
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                      <span><b> Body Of Knowledge</b></span>
                      <a target="_blank" href="{{ route('getFile','CIE_BoK.pdf')}}">
                        <img src="../../images/icon2.png" width="30px" height="auto" alt="">
                      </a>
                     
                      <br> <br>
                      <span><b> Flyer</b></span>
                      <a target="_blank" href="{{ route('getFile','CIE_Flyer.pdf')}}">
                        <img src="../../images/icon2.png" width="30px" height="auto" alt="">
                      </a>
                      <a target="_blank" href="{{ route('getFile','CIE_Flayer_Arabic.pdf')}}">
                        <img src="../../images/icon1.png" width="30px" height="auto" alt="">
                      </a>
                    </div>
                  </div>
                </div>
                    <hr>
                    
                    
                          <div class="col-lg-10 flex-wrap col-12 mb-5 d-flex justify-content-between align-items-end">
                  <div class="d-flex align-items-end">
                    <div class="col-8 mb-3 col-lg-5">
                      <img src="../../storage/pages/CE.png" width="48%" height="auto" alt="">
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                      <span><b> Body Of Knowledge</b></span>
                      <a target="_blank" href="{{ route('getFile','CE_BoK.pdf')}}">
                        <img src="../../images/icon2.png" width="30px" height="auto" alt="">
                      </a>

                      <br> <br>
                      <span><b> Flyer</b></span>
                      <a target="_blank" href="{{ route('getFile','CE_Flyer.pdf')}}">
                        <img src="../../images/icon2.png" width="30px" height="auto" alt="">
                      </a>
                      <a target="_blank" href="{{ route('getFile','CE_Flayer_Arabic.pdf')}}">
                        <img src="../../images/icon1.png" width="30px" height="auto" alt="">
                      </a>
                    </div>
                  </div>
                </div>
                    <hr>
                    
                  

                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection