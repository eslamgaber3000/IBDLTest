@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>$page->title,'breadcrumb'=>
$page->breadcrumb,'header'=>$page->header,'icon'=>$page->icon])


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

                    <div class="col-10 m-auto">
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
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection