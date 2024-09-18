@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'CONTACT US','breadcrumb'=> 'Home/Contact
Us','header'=>$header,'icon'=>$icon])



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
    .swal-text {
        text-align: justify;
    }
</style>

@if(session()->has('message'))
<script type="text/javascript">
    swal({
        title: 'Message',
        text: "{!! Session::get('message') !!}",
        timer: 3000000,
        type: 'errors'
    }).then((value) => {
        //location.reload();
    }).catch(swal.noop);
</script>
@endif
<section>


    <div class="container-fluid">
        <div class="row ">
            <div style="margin:5em 0;padding-left:5em" class="col-lg-9 col-11 offset-0">
                <div style="flex-wrap: wrap" class="d-flex">
                    <div class="col-md-6 col-12 d-flex flex-column">
                        @foreach($contacts as $contact)
                        <div class="mb-5">
                            <h3 style="color:gray">{{$contact->branch}}</h3>
                            <br>
                            <div class="d-flex">
                                <i class="fa-sharp fa-solid fa-location-dot red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding: 10px 12px;"></i>
                                <p style="">

                                    {{$contact->address}}
                                </p>
                            </div>
                            <div class=" d-flex align-items-baseline">
                                <i class="fa-solid fa-envelope red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding:10px"></i>
                                <p style="">
                                    {{$contact->email}}
                                </p>
                            </div>
                            <div class=" d-flex align-items-baseline">
                                <i class="fa-solid fa-phone red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding:10px"></i>
                                <p style="">
                                    {{$contact->phone}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="">
                            <h3 style="color:gray">IBDL HEADQUARTER</h3>
                            <br>
                            <div class="d-flex">
                                <i class="fa-sharp fa-solid fa-location-dot red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding: 10px 12px;"></i>
                                <p style="">

                                    901 S. National Ave. Springfield, MO 65897, Missouri State-USA
                                </p>
                            </div>
                            <div class=" d-flex align-items-baseline">
                                <i class="fa-solid fa-envelope red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding:10px"></i>
                                <p style="">
                                    info@ibdl.net
                                </p>
                            </div>
                            <div class=" d-flex align-items-baseline">
                                <i class="fa-solid fa-phone red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding:10px"></i>
                                <p style="">
                                    +1417-836-5000
                                </p>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h3 style="color:gray">IBDL GULF</h3>

                            <br>
                            <div class="d-flex">
                                <i class="fa-sharp fa-solid fa-location-dot red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding: 10px 12px;"></i>
                                <p style="">
                                    Al Mohammadiyah, 1st Floor, Al-Rayadah Building ,Riyadh 12363 ,Riyadh-Saudi
                                    Arabia
                                </p>
                            </div>
                            <div class=" d-flex align-items-baseline">
                                <i class="fa-solid fa-envelope red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding:10px"></i>
                                <p style="">
                                    gulf@ibdl.net
                                </p>
                            </div>
                            <div class=" d-flex align-items-baseline">
                                <i class="fa-solid fa-phone red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding:10px"></i>
                                <p style="">
                                    +966 11 263 0041
                                </p>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h3 style="color:gray">IBDL MENA</h3>
                            <P class="fw-bold"> </P>
                            <br>
                            <div class="d-flex">
                                <i class="fa-sharp fa-solid fa-location-dot red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding: 10px 12px;"></i>
                                <p style="">
                                    A 109 Linx Business Park Smart Village, Giza, Egypt
                                </p>
                            </div>
                            <div class=" d-flex align-items-baseline">
                                <i class="fa-solid fa-envelope red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding:10px"></i>
                                <p style="">
                                    mena@ibdl.net
                                </p>
                            </div>
                            <div class=" d-flex align-items-baseline">
                                <i class="fa-solid fa-phone red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding:10px"></i>
                                <p style="">

                                    +235372929
                                </p>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h3 style="color:gray">IBDL Scotland</h3>
                            <br>
                            <div class="d-flex">
                                <i class="fa-sharp fa-solid fa-location-dot red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding: 10px 12px;"></i>
                                <p style="">
                                    124 Blackness Road, Dundee, DD1 5PE Dundee-Scotland
                                </p>
                            </div>
                            <div class=" d-flex align-items-baseline">
                                <i class="fa-solid fa-envelope red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding:10px"></i>
                                <p style="">
                                    UK@IBDL.net
                                </p>
                            </div>
                            <div class=" d-flex align-items-baseline">
                                <i class="fa-solid fa-phone red-wrapper me-2 mb-2"
                                    style="color: #ffffff;padding:10px"></i>
                                <p style="">

                                    +44 1382 908070
                                </p>
                            </div>
                        </div> --}}
                    </div>


                    <div style="margin-left: 6%" class="col-md-5 col-11 mt-5 mt-md-0">
                        @if($errors->any())
                        {!! implode('', $errors->all('<div style="color: red;">:message</div>')) !!}
                        @endif
                        <form class="" method="POST" action="{{ route('ContactUs.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <p class="fw-bold"> Send Us A Message</p>
                            <div class="mb-3">
                                <input name="name" class="form-control form-control-lg" type="text"
                                    placeholder="Full Name" aria-label="Full Name">
                            </div>
                            <div class="mb-3">
                                <input name="email" class="form-control form-control-lg" type="email"
                                    placeholder="Email" aria-label="Email">
                            </div>
                            <div class="">
                                <textarea name="message" class="form-control" placeholder="Leave Your Message Here"
                                    id="floatingTextarea" style="height: 300px"></textarea>
                            </div>
                            <div class="text-end mt-5">
                                <button class="btn acc-btn">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="col-md-8">
                    <div style=" width:100%;height: 400px;" id="map"></div>

                </div> --}}
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>

@endsection