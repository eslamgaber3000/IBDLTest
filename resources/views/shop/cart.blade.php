@extends('layout-new')

@section('websit_content')


<script>
    function cartdata(){
    let data = {{ Js::from($cartItems) }};
    let dataToArr = Object.values(data) ;
    let chargeItems = [];
    for (let index = 0; index < dataToArr.length; index++) {
        const element = dataToArr[index];
            let id = element.id.toString() ;
            let description = element.name ;
            let price = element.price ;
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
                <div class="col-lg-5 col-auto mx-auto align-self-center">
                    <div style="width: fit-content;" class="d-flex flex-column align-content-center">
                        <img class="m-auto" width="80" height="auto"
                            src="{{asset('storage/avatars/'.Auth::user()->avatar)}}" alt="">
                        <h4 class="text-center" style="color:white">{{Auth::user()->name}}</h4>
                        <p class="text-center" style="color:#e30618"> {{Auth::user()->email}} </p>
                    </div>
                </div>
                <div class="col-lg-7 col-12 align-self-center d-flex flex-column">
                    <div class="align-self-end col-auto d-flex flex-wrap mb-3">
                        <a class="mx-2 cart" href="">
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
                                {{Cart::total();}} EGP</p>

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
                            <a href="{{url('shop')}}">
                                <button class="shop-btn mb-3">
                                    View Store
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(session('success'))
        <div style="width:80%;text-align: center;" class="alert alert-success" role="alert">
       A simple success alert—check it out!
           </div>
       @endif
        <div class="px-lg-5 px-0 mx-auto my-5">

            <h3> <b>
                    Shopping Cart
                </b>
            </h3>
            <div class="table-responsive ">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th> </th>
                            <th class="muted" scope="col">Product</th>
                            <th class="muted" scope="col">Price</th>
                            <th class="muted" scope="col">Quantity</th>
                            <th class="muted" scope="col">Subtotal</th>
                            <th class="muted" scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($cartItems as $row)

                        <tr>
                            <th scope="row" style="padding-top:1em;width: 22%;" class="text-start">
                                <img class="cart-product-img" src="{{asset('storage/'.$row->model->img)}}" alt="">

                            </th>
                            <td class="border-none">
                                <h6 class="fw-bold"> {{$row->name}}</h6>
                            </td>
                            <td class="border-none fw-bold"> {{$row->price}} EGP</td>
                            <td class="border-none fw-bold"> {{$row->qty}} EGP</td>
                            <td class="border-none fw-bold"> {{$row->qty * $row->price}} EGP</td>
                            <td class="border-none">
                                <form method="POST" action="{{ route('cart.destroy',$row->rowId) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="fa-solid fa-trash-can fa-lg" style="color: #e30618;"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot style="border-bottom: 2px solid black;
                    border-top: 2px solid black;">
                        <tr class="text-center">
                            <td class="border-none fw-bold py-3"></td>
                            <td class="border-none fw-bold py-3"></td>
                            <td class="border-none fw-bold py-3"></td>
                            <td class="border-none fw-bold py-3"> {{cart::count()}}</td>
                            <td class="border-none fw-bold py-3"> {{cart::total()}} EGP</td>
                            <td class="border-none fw-bold py-3"></td>
                        </tr>
                    </tfoot>
                </table>

                <div class="mx-auto w-75">
                    <div style="width:fit-content" class="ms-auto">
                        <p class="border-btm"> <b class="red">Subtotal:</b> <b> {{cart::subtotal()}} EGP </b></p>
                        <hr class="my-2">
                        <p class="border-btm"> <b class="red">Tax:</b><b> {{cart::tax()}} EGP</b> </p>
                        <hr class="my-2">
                        <p class="border-btm"> <b class="red">Total:</b><b> {{cart::total()}} EGP</b> </p>
                        <hr class="my-2">
                        {{-- <p class="border-btm"> <b class="red">Total in EGP:</b><b> {{cart::total() * 30.19}} LE</b>
                        </p> --}}
                    </div>
                    <div style="width:fit-content" class="ms-auto mt-4 d-flex flex-column flex-wrap">
                        <button
                            style="border-radius: 10px;font-weight: 600;font-size: 15px;width:fit-content;margin: 0px 20px;padding: 10px 25px;"
                            {{ cart::count()> 0 ? '' : 'disabled' }} class="shop-btn
                            mb-3" onclick="checkout();"
                            id="fawry-payment-btn">
                            Pay 
                        </button>
                        {{-- <button
                            style="border-radius: 10px;font-weight: 600;font-size: 15px;width:fit-content;margin: 0px 20px;padding: 10px 25px;"
                            {{ cart::count()> 0 ? '' : 'disabled' }} class="shop-btn
                            mb-3" onclick="checkout();"
                            id="fawry-payment-btn">
                            Pay With PayPal
                        </button> --}}

                        {{-- <a target="_blank" href="{{route('make.payment')}}">
                            <button
                                style="border-radius: 10px;font-weight: 600;font-size: 15px;width:fit-content;margin: 0px 20px;padding: 10px 25px;"
                                {{ cart::count()> 0 ? '' : 'disabled' }} class="shop-btn mb-3" >
                                Pay With PayPal
                            </button>
                        </a> --}}

                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection