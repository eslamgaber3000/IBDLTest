@extends('layout-new')

@section('websit_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    .sendToPdfFiller {
        display: none !important;
    }
    
     .animated-button {
        animation: vistit_bounce 1.5s ease infinite;
        background-color: #ffcccb; 
      padding-top: 0.5rem!important;
    padding-bottom: 0.5rem!important;
        border: none; 
        color: #000; /* Set text color */
        border-radius: 3px; 
        cursor: pointer;
    }

    @keyframes vistit_bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-10px);
        }
    }
</style>

<script>
    function cartdata(){
    let data = {{ Js::from($cartItems) }};
    let dataToArr = Object.values(data) ;
    let chargeItems = [];
    for (let index = 0; index < dataToArr.length; index++) {
        const element = dataToArr[index];
            let id = element.id.toString() ;
            let description = element.name ;
            let price = element.price;
            let qty = element.qty;
            a = {
                itemId: id ,
                price: price ,
                quantity: qty ,
                description: description 
            }
            chargeItems[index] = a ;
    }
    return chargeItems;
}

    function userData(){
        let data = {{ Js::from(Auth::user())}};
        return data ;
    }

    function checkout() {
    const configuration = {
        locale: "en",  //default en
        mode: DISPLAY_MODE.POPUP,  //required, allowed values [POPUP, INSIDE_PAGE, SIDE_PAGE]
    };
    FawryPay.checkout(buildChargeRequest(), configuration);
}
function buildChargeRequest() {
    let cartItems = cartdata();
    let user = userData() ;
    let merchantRefNum = Math.floor((Math.random() * 100000000) + 1);
    var chargeRequest = {
        merchantCode: '770000014956',
        merchantRefNum: merchantRefNum,
        customerProfileId: user.id,
        customerMobile: user.phone,
        customerEmail: user.email,
        customerName: user.name,
        chargeItems: cartItems,
        returnUrl: 'https://www.ibdl.net/shop',
        authCaptureModePayment: false,
        secKey: "d5515cec-211b-4ee3-8001-7ad3e6076e4e"
    };

    chargeRequest.signature = signRequest(chargeRequest);
    return chargeRequest;
}

function signRequest(chargeRequest) {
    var signString = chargeRequest['merchantCode'] + chargeRequest.merchantRefNum;
    signString += chargeRequest.customerProfileId != null ? chargeRequest.customerProfileId : '';
    signString += chargeRequest.returnUrl != null ? chargeRequest.returnUrl : '';
    var items = chargeRequest.chargeItems.sort(function (x, y) {

        let a = x.itemId.toUpperCase(),
            b = y.itemId.toUpperCase();
        return a == b ? 0 : a > b ? 1 : -1;
    });

    items.forEach((item) => {
        signString += item.itemId + '' + item.quantity + '' + item.price.toFixed(2);
    });
    signString += chargeRequest.secKey;
    return sha256(signString);
}





</script>


<section class="inner-hero">
    <img src="{{ asset('/storage/pages/shop.jpeg') }}" alt="">
    <div class="container">
        <h1 style="left: 8%;right: unset;bottom: 15%;" class="hero-title aos-init aos-animate" data-aos="fade-up"
            data-aos-duration="500">
            IBDL SHOP
            
        </h1>
       
    </div>
</section>


<section>
    <div class="container-fluid">
        <!-- Modal -->
        <div class="modal fade modal-dialog-centered" id="staticBackdrop" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div style="width: fit-content;" class="modal-dialog">
                <div class="">
                    <div class="spinner-border text-danger" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="main">
            <div class="m-auto px-3 px-lg-5 d-flex flex-wrap">
                  @auth
                <div class="col-lg-5 col-auto mx-auto align-self-center">
                    <div style="width: fit-content;" class="d-flex flex-column align-content-center">
                        <img class="m-auto" width="80" height="auto"
                            src="{{asset('storage/avatars/'.Auth::user()->avatar)}}" alt="">
                        <h4 class="text-center" style="color:white">{{Auth::user()->name}}</h4>
                        <p class="text-center" style="color:#e30618"> {{Auth::user()->email}} </p>
                    </div>
                </div>
                     @endauth
                <div class="col-lg-12 col-sm-7 align-self-center d-flex flex-column">
                    <div class="align-self-end col-auto d-flex flex-wrap mb-3">
                        <a class="mx-2 cart" href="{{url('shoppingCart')}}">
                            <span class="count">
                                {{Cart::count();}}
                            </span>
                            <i class="fa-solid fa-cart-shopping material-icons"
                                style="color: #e30618;font-size:1.6em"></i>
                        </a>
                        <a href="{{ url('/') }}" class="mx-2" href="">
                            <i class="fa-solid fa-house" style="color: #c2c2c2;font-size:1.6em"></i>
                        </a>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-4 align-self-center col-6 d-flex flex-column">
                            <p class=""> <b style="color:#e30618"> Cart Items: </b> {{Cart::count();}} Items </p>

                            <p class=""> <b style="color:#e30618"> Total Price: </b>

                                @if(session('shop_ver') == 'egy')
                                {{Cart::total();}} EGP</p>
                            @endif
                            @if(session('shop_ver') == 'africa')
                            {{Cart::total();}} $</p>
                            @endif
                            @if(session('shop_ver') == 'other')
                            {{Cart::total();}} $</p>
                            @endif



                        </div>
                        <div class="col-lg-8 col-6 d-flex align-self-center flex-wrap">
                            <form method="POST" action="{{ route('cart.destroy',1) }}">
                                @csrf
                                @method('delete')
                                <button {{ cart::count()> 0 ? '' : 'disabled' }} data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop" type="submit"
                                    class="shop-btn mb-3">
                                    Empty Cart
                                </button>
                            </form>
                            <a href="{{url('shoppingCart')}}">
                                <button class="shop-btn mb-3">
                                    View Cart
                                </button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="shop-page d-flex flex-wrap">-->
        <!--    <div class="col-auto col-lg-auto mx-auto d-none d-lg-flex flex-column flex-wrap mb-5 mb-lg-0">-->
        <!--        <h4 class="red fw-bold mb-4">Filter The Products</h4>-->
        <!--        <form method="POST" action="{{ route('shopType') }}">-->
        <!--            @csrf-->
        <!--            <div class="form-check mb-3">-->
        <!--                <input class="form-check-input " type="radio" {{ $type=='all' ? 'checked' : '' }} name="type"-->
        <!--                    value="all" id="radio1">-->
        <!--                <label class="form-check-label" for="radio1">-->
        <!--                    All Products-->
        <!--                </label>-->
                    </div>
                    <!--<div class="form-check mb-3">-->
                    <!--    <input class="form-check-input " type="radio" {{ $type=='kit' ? 'checked' : '' }} name="type"-->
                    <!--        value="kit" id="radio2">-->
                    <!--    <label class="form-check-label" for="radio2">-->
                    <!--        Study & Learn-->
                    <!--    </label>-->
                    <!--</div>-->
                    <!--<div class="form-check mb-3">-->
                    <!--    <input class="form-check-input " type="radio" {{ $type=='certificate' ? 'checked' : '' }} name="type"-->
                    <!--        value="certificate" id="radio3">-->
                    <!--    <label class="form-check-label" for="radio3">-->
                    <!--        Exams-->
                    <!--    </label>-->
                    <!--</div>-->
                <!--    <div class="form-check mb-3">-->
                <!--        <input class="form-check-input " type="radio" {{ $type=='assessment' ? 'checked' : '' }}-->
                <!--            name="type" value="assessment" id="radio4">-->
                <!--        <label class="form-check-label" for="radio4">-->
                <!--            Assessment-->
                <!--        </label>-->
                <!--    </div>-->

                <!--    <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="submit"-->
                <!--        style="background-color: #e30618;color:white" class="btn mt-4 py-2 px-5">Apply-->
                <!--        Filters</button>-->
                <!--</form>-->
            <!--</div>-->
                <div class="col-md-6 offset-md-3">
                    
            <div class="container">
    <div class="row">
        <div class="col-12" style="margin-top: 30px; margin-bottom: 20px; text-align: center;">
            <h1 style="color: #fff; background-color: #1d1a3d; padding: 20px; border-radius: 10px; font-family: Arial, sans-serif;">
                IBDL Qualifications
            </h1>
        </div>
    </div>
</div>
            </div>
            <div class="col-12 col-lg-12 offset-lg-0 d-flex flex-wrap">
                
                @foreach ($products as $product)
                    @if ($product->type == 'certificate')
                <div class="  py-4 px-5 product col-12 col-md-6 col-lg-4 mb-3">
                    <div class="m-auto">
                        <img class="" width="200" height="auto" src="../../storage/{{$product->img}}"
                            alt="{{$product->title}}">
                    </div>
                    <div class="d-flex flex-column mt-4">
                        <h5 class="fw-bold"> {{$product->title}}</h5>
                        <div class="d-flex mt-3">
                            <div class="col-2">
                                <small class="fw-bold" style="color: #8b8b8b">Store:</small>
                            </div>
                            <div class="col-5">
                                <small class="fw-bold"> available</small>
                            </div>
                        </div>
                        <div class="d-flex mt-2">
                            <div class="col-2">
                                <small class="fw-bold" style="color: #8b8b8b">Cost:</small>
                            </div>
                            <div class="col-5">
                                @if(session('shop_ver') == 'egy')
                                <small class="fw-bold"> {{$product->price}} EGP </small>
                                @endif
                                @if(session('shop_ver') == 'africa')
                                <small class="fw-bold"> {{$product->africa_price}} $ </small>
                                @endif
                                @if(session('shop_ver') == 'other')
                                <small class="fw-bold"> {{$product->gulf_price}} $ </small>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="col-auto me-2">
                            <button data-bs-toggle="modal" data-bs-target="#{{$product->id}}"
                                style="background-color: #1d1a3d;color:white" class="btn btn-sm py-1 px-4">
                                Details
                            </button>
                        </div>
                        <div class="col-auto">
                            <form method="POST" action="{{ route('cart.store',['product'=>$product->id]) }}">
                                @csrf
                                <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="submit"
                                    style="background-color: #1d1a3d;color:white" class="btn btn-sm py-1 px-4">
                                    Add to Cart
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach
                @foreach($products as $product)
                <div class="modal fade pt-0" id="{{$product->id}}" tabindex="1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div style="width: 100%;height:auto;border:14px solid rgba(0, 0, 0, 0.4);padding:1em 1em;margin:100px auto"
                            class="modal-content">
                            <div class="">
                                <button style="top: 0%;position: absolute;right: 0;" type="button" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="mb-3" width="220" height="auto" src="../../storage/{{$product->img}}"
                                    alt="{{$product->title}}">
                                <br>
                                <small class="text-muted ps-1"> <b> {{$product->title}} </b></small>
                                @if(session('shop_ver') == 'egy')
                                <p class="ps-1"><b> {{$product->price}} EGP</b> </p>
                                @endif
                                @if(session('shop_ver') == 'africa')
                                <p class="ps-1"><b> {{$product->africe_price}} $</b> </p>
                                @endif
                                @if(session('shop_ver') == 'other')
                                <p class="ps-1"><b> {{$product->gulf_price}} $</b> </p>
                                @endif

                                <div class="">
                                    <div style="text-align: start" class="cert-flyer col-12">
                                        @if(isset($product->ar_flyer) || isset($product->flyer) ||
                                        isset($product->fr_flyer))
                                        <p class="mb-1"> <b> Download Flyers</b></p>
                                        @endif
                                        @if(isset($product->ar_flyer))
                                        <a target="_blank" href="{{ route('getFile',$product->ar_flyer)}}"> <img
                                                src="../../images/icon1.png" width="30px" height="auto" alt=""> </a>
                                        @endif
                                        @if(isset($product->flyer))
                                        <a target="_blank" href="{{ route('getFile',$product->flyer)}}"> <img
                                                src="../../images/icon2.png" width="40px" height="auto" alt=""></a>
                                        @endif
                                    </div>
                                </div>
                                <div class="d-flex flex-column mt-3 ps-4">
                                    <div class="d-flex mb-2  flex-wrap">
                                        <div class="col-auto">
                                            <small> <b> Description: </b></small>
                                        </div>
                                       <div class="col-12">
                                            <small style="text-align: justify"> @php
                                          echo $product->description
                                            
                                            @endphp
                                            </small>
                                        </div>
                                    </div>
                                    <!--<div class="d-flex flex-wrap">-->
                                    <!--    <div class="col-auto">-->
                                    <!--        <small><b> You Get:</b></small>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-12 ">-->
                                    <!--        <small>-->
                                    <!--            @php-->
                                    <!--            echo $product->obtain ;-->
                                    <!--            @endphp-->
                                    <!--        </small>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div> 
                            </div>

                            <div class="row justify-content-end mt-2" >
                                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                                            <div class="product_link" style="background-color: #0000; text-align: center;">
                                                <a style="background-color: #1d1a3d; color: white;" class="animated-button btn btn-sm py-2 px-4 btn-block" href=" @php echo $product->product_link; @endphp" target="_blank">
                                              Visit Product 
                                              <i class="fas fa-external-link-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                                            <form method="POST" action="{{ route('cart.store',['product'=>$product->id]) }}">
                                                @csrf
                                                <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="submit" style="background-color: #1d1a3d; color: white;" class="btn btn-sm py-2 px-4 btn-block">
                                                    Add to Cart  
                                                    <i class="fas fa-cart-plus"></i>
                                                </button>
                                            </form>
                                        </div>
                            </div>
                                                            </div>
                    </div>
                </div>
                @endforeach
            </div>
            
                <div class="col-md-6 offset-md-3">
               <div class="container">
    <div class="row">
        <div class="col-12" style="margin-top: 30px; margin-bottom: 20px; text-align: center;">
            <h1 style="color: #fff; background-color: #1d1a3d; padding: 20px; border-radius: 10px; font-family: Arial, sans-serif;">
                IBDL Assessments
            </h1>
        </div>
    </div>
</div>
            </div>

    <div class="col-12 col-lg-12 offset-lg-0 d-flex flex-wrap">
                @foreach ($products as $product)
                    @if ($product->type == 'assessment')
                <div class="  py-4 px-5 product col-12 col-md-6 col-lg-4 mb-3">
                    <div class="m-auto">
                        <img class="" width="200" height="auto" src="../../storage/{{$product->img}}"
                            alt="{{$product->title}}">
                    </div>
                    <div class="d-flex flex-column mt-4">
                        <h5 class="fw-bold"> {{$product->title}}</h5>
                        <div class="d-flex mt-3">
                            <div class="col-2">
                                <small class="fw-bold" style="color: #8b8b8b">Store:</small>
                            </div>
                            <div class="col-5">
                                <small class="fw-bold"> available</small>
                            </div>
                        </div>
                        <div class="d-flex mt-2">
                            <div class="col-2">
                                <small class="fw-bold" style="color: #8b8b8b">Cost:</small>
                            </div>
                            <div class="col-5">
                                @if(session('shop_ver') == 'egy')
                                <small class="fw-bold"> {{$product->price}} EGP </small>
                                @endif
                                @if(session('shop_ver') == 'africa')
                                <small class="fw-bold"> {{$product->africa_price}} $ </small>
                                @endif
                                @if(session('shop_ver') == 'other')
                                <small class="fw-bold"> {{$product->gulf_price}} $ </small>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="col-auto me-2">
                            <button data-bs-toggle="modal" data-bs-target="#{{$product->id}}"
                                style="background-color: #1d1a3d;color:white" class="btn btn-sm py-1 px-4">
                                Details
                            </button>
                        </div>
                        <div class="col-auto">
                            <form method="POST" action="{{ route('cart.store',['product'=>$product->id]) }}">
                                @csrf
                                <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="submit"
                                    style="background-color: #1d1a3d;color:white" class="btn btn-sm py-1 px-4">
                                    Add to Cart
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach
                @foreach($products as $product)
                <div class="modal fade pt-0" id="{{$product->id}}" tabindex="1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div style="width: 100%;height:auto;border:14px solid rgba(0, 0, 0, 0.4);padding:1em 1em;margin:100px auto"
                            class="modal-content">
                            <div class="">
                                <button style="top: 0%;position: absolute;right: 0;" type="button" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="mb-3" width="220" height="auto" src="../../storage/{{$product->img}}"
                                    alt="{{$product->title}}">
                                <br>
                                <small class="text-muted ps-1"> <b> {{$product->title}} </b></small>
                                @if(session('shop_ver') == 'egy')
                                <p class="ps-1"><b> {{$product->price}} EGP</b> </p>
                                @endif
                                @if(session('shop_ver') == 'africa')
                                <p class="ps-1"><b> {{$product->africe_price}} $</b> </p>
                                @endif
                                @if(session('shop_ver') == 'other')
                                <p class="ps-1"><b> {{$product->gulf_price}} $</b> </p>
                                @endif

                                <div class="">
                                    <div style="text-align: start" class="cert-flyer col-12">
                                        @if(isset($product->ar_flyer) || isset($product->flyer) ||
                                        isset($product->fr_flyer))
                                        <p class="mb-1"> <b> Download Flyers</b></p>
                                        @endif
                                        @if(isset($product->ar_flyer))
                                        <a target="_blank" href="{{ route('getFile',$product->ar_flyer)}}"> <img
                                                src="../../images/icon1.png" width="30px" height="auto" alt=""> </a>
                                        @endif
                                        @if(isset($product->flyer))
                                        <a target="_blank" href="{{ route('getFile',$product->flyer)}}"> <img
                                                src="../../images/icon2.png" width="40px" height="auto" alt=""></a>
                                        @endif
                                    </div>
                                </div>
                                <div class="d-flex flex-column mt-3 ps-4">
                                    <div class="d-flex mb-2  flex-wrap">
                                        <div class="col-auto">
                                            <small> <b> Description: </b></small>
                                        </div>
                                       <div class="col-12">
                                            <small style="text-align: justify"> @php
                                          echo $product->description
                                            
                                            @endphp
                                            </small>
                                        </div>
                                    </div>
                                    <!--<div class="d-flex flex-wrap">-->
                                    <!--    <div class="col-auto">-->
                                    <!--        <small><b> You Get:</b></small>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-12 ">-->
                                    <!--        <small>-->
                                    <!--            @php-->
                                    <!--            echo $product->obtain ;-->
                                    <!--            @endphp-->
                                    <!--        </small>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div> 
                            </div>

                            <div class="row justify-content-end mt-2" >
                                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                                            <div class="product_link" style="background-color: #0000; text-align: center;">
                                                <a style="background-color: #1d1a3d; color: white;" class="animated-button btn btn-sm py-2 px-4 btn-block" href=" @php echo $product->product_link; @endphp" target="_blank">
                                              Visit Product 
                                              <i class="fas fa-external-link-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                                            <form method="POST" action="{{ route('cart.store',['product'=>$product->id]) }}">
                                                @csrf
                                                <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="submit" style="background-color: #1d1a3d; color: white;" class="btn btn-sm py-2 px-4 btn-block">
                                                    Add to Cart  
                                                    <i class="fas fa-cart-plus"></i>
                                                </button>
                                            </form>
                                        </div>
                            </div>
                                                            </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>
@endsection