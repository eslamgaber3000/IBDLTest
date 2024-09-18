@extends('layout-new')

@section('websit_content')


<script>
    function checkout() {
    const configuration = {
        locale: "en",  //default en
        mode: DISPLAY_MODE.POPUP,  //required, allowed values [POPUP, INSIDE_PAGE, SIDE_PAGE]
    };
    console.log(buildChargeRequest());
    FawryPay.checkout(buildChargeRequest(), configuration);
}
function buildChargeRequest() {
    let date = new Date('2023-08-21');
    let timestamp = date.getTime();
    let merchantRefNum = Math.floor((Math.random() * 100000000) + 1);
    var chargeRequest = {
        merchantCode: '770000014956',
        merchantRefNum: merchantRefNum,
        customerProfileId: '22',
        customerMobile: '01554776347',
        customerEmail: 'e.ibrahim@ibdl.net',
        customerName: 'eslam',
        chargeItems: [
            {
                itemId: '1',
                description: 'IBDL Essential is your gateway to the business world, giving you an engaging educational experience specially designed for you. Moving from understanding the fundamentals of business, to studying examples of leading organizations globally, to allow you to acquire the knowledge and abilities you need for your next move to boost your career potential and/or start your own business.',
                price: 200.00,
                quantity: 1
            },
            {
                itemId: '2',
                description: 'IBDL Professional is your powerful tool to develop the skills and knowledge that will help you to move forward in your professional career. IBDL Professional enables organizations to prepare second-line leaders and managers through developing their management skills, which enable them to lead their organizations efficiently. Specially designed in an interactive and enjoyable way, in which you move from studying the management skills, through understanding the basics of planning and strategic management, providing you with the knowledge and skills you need to grow on the personal and professional levels and invest in your future',
                price: 200.00,
                quantity: 1
            }
        ],
        returnUrl: 'https://www.ibdl.net',
        // paymentMethod: "PayAtFawry,CARD,MWALLET",
        authCaptureModePayment: false,
        // description: "test description",
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
                                ${{Cart::total();}}</p>

                        </div>
                        <div class="col-lg-8 col-6 d-flex align-self-center flex-wrap">
                            <form method="POST" action="{{ route('cart.destroy',1) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="shop-btn mb-3">
                                    Empty Cart
                                </button>
                            </form>
                            {{-- <input class="shop-btn mb-3" type="image" onclick="checkout();"
                                src="https://www.atfawry.com/assets/img/FawryPayLogo.jpg" alt="pay-using-fawry"
                                id="fawry-payment-btn" /> --}}
                            <form action="">
                                <button class="shop-btn mb-3" onclick="checkout();" id="fawry-payment-btn">
                                    Proceed to Payment
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-page d-flex flex-wrap">
            <div class="col-auto col-lg-auto  mx-auto d-flex flex-column flex-wrap mb-5 mb-lg-0">
                <h4 class="red fw-bold mb-4">Filter The Products</h4>
                <form action="">
                    <div class="form-check mb-3">
                        <input class="form-check-input " type="checkbox" value="" id="radio1">
                        <label class="form-check-label" for="radio1">
                            All Products
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input " type="checkbox" value="" id="radio2">
                        <label class="form-check-label" for="radio2">
                            Full Kits
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input " type="checkbox" value="" id="radio3">
                        <label class="form-check-label" for="radio3">
                            Certificates
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input " type="checkbox" value="" id="radio4">
                        <label class="form-check-label" for="radio4">
                            Assessments
                        </label>
                    </div>

                    <button style="background-color: #e30618;color:white" class="btn mt-4 py-2 px-5">Apply
                        Filters</button>
                </form>
            </div>
            <div class="col-12 col-lg-9 offset-lg-0 d-flex flex-wrap">
                @foreach ($products as $product)
                <div class="col-12 col-lg-5 py-4 px-5 product mb-3">
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
                                <small class="fw-bold"> ${{$product->price}} </small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="col-auto me-2">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                                style="background-color: #1d1a3d;color:white" class="btn btn-sm py-1 px-4">
                                Details
                            </button>
                        </div>
                        <div class="col-auto">
                            <form method="POST" action="{{ route('cart.store',['product'=>$product->id]) }}">
                                @csrf
                                <button type="submit" style="background-color: #1d1a3d;color:white"
                                    class="btn btn-sm py-1 px-4">
                                    Add to Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade pt-0" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel"
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
                                <p class="ps-1"><b>$ {{$product->price}}</b> </p>
                                <div class="d-flex flex-column mt-3 ps-4">
                                    <div class="d-flex mb-2  flex-wrap">
                                        <div class="col-auto">
                                            <small> <b> Description: </b></small>
                                        </div>
                                        <div class="col-12">
                                            <small style="text-align: justify"> {{$product->description}}</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="col-auto">
                                            <small><b> You Get:</b></small>
                                        </div>
                                        <div class="col-12 ">
                                            <small>
                                                @php
                                                echo $product->obtain ;
                                                @endphp
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button style="background-color: #1d1a3d;color:white" class="btn btn-sm px-4 mb-2">
                                    Add To Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Modal -->



            {{-- @foreach(Cart::content() as $row)
            {{$row->name}}
            @endforeach --}}
            {{-- <tfoot>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td>Subtotal</td>
                    <td>
                        <?php echo Cart::subtotal(); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td>Tax</td>
                    <td>
                        <?php echo Cart::tax(); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td>Total</td>
                    <td>
                        <?php echo Cart::total(); ?>
                    </td>
                </tr>
            </tfoot> --}}
        </div>

        {{-- <div class="row">
            <div class="contan">
                <header>
                    <div class="logo">
                        <img src="./images/IMG-20230528-WA0015.jpg" alt="" />
                        <h1>IBDL</h1>
                    </div>
                    <div class="link">
                        <a href="#"><i class="fa-solid fa-cart-shopping"></i>Store</a>
                        <a href="#"><i class="fa-solid fa-user"></i> Sign in
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <a href="#">Demo Exam</a>
                        <a href="#">language<i class="fas fa-chevron-down"></i></a>
                    </div>
                </header>
                <div class="mainheader">
                    <a href="#">Who We Are<i class="fas fa-chevron-down"></i></a>
                    <a href="#">Membership<i class="fas fa-chevron-down"></i></a>
                    <a href="#">Our Services<i class="fas fa-chevron-down"></i></a>
                    <a href="#">Certifications<i class="fas fa-chevron-down"></i></a>
                    <a href="#">STORIES<i class="fas fa-chevron-down"></i></a>
                    <a href="#">CONTACT US</a>
                </div>
            </div>
            <div class="imgheader"></div>
            <div class="aside3">
                <main>
                    <div class="main">
                        <img class="person" src="./images/imgs.jpg" alt="" />
                        <h3>Mohamed Moneim</h2>
                            <a class="act" href="#">M.Moneim@ibdl.net</a>
                    </div>
                    <div class="infoo">
                        <div class="icon">
                            <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
                            <a href="#"><i class="fa-sharp fa-solid fa-house"></i></a>
                        </div>
                        <div class=" info1">
                            <div class="info2">
                                <span>Cart Items:</span>
                                <span>3 items</span>
                                <br>
                                <span>Total price:</span>
                                <span>$600</span>
                            </div>
                            <div class="inpuut">
                                <a href="#">Empty Cart</a>
                                <a href="#">Proceed to payment</a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <section class="sect contan">
                <div class="sides">
                    <h4>Filter The Products</h4>
                    <div class="filter">
                        <input type="radio" name="Filter" value="All Products">
                        <span> All Products</span>
                        <input type="radio" name="Filter" value="Full Kits">
                        <span> Full Kits</span>
                        <input type="radio" name="Filter" value="Certificates">
                        <span> Certificates</span>
                        <input type="radio" name="Filter" value="Assessments">
                        <span> Assessments</span>
                    </div>
                </div>
                <main class="secti">
                    <div class="items">
                        <div class="logo">
                            <img src="./images/IMG-20230528-WA0015.jpg" alt="" />
                            <h3>ESSENTIAL</h3>
                        </div>
                        <div class="info">
                            <h5>IBDL ESSENTIAL CERTIFICATE</h5>
                            <div class="spa">
                                <span>Quantity:</span>
                                <span>2</span>
                            </div>
                            <div class="spa">
                                <span>cost:</span>
                                <span>$200</span>
                            </div>
                            <div class="form-row">
                                <input type="submit" value="Details">
                                <input type="submit" value="Add to Card">
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="logo">
                            <img src="./images/IMG-20230528-WA0015.jpg" alt="" />
                            <h3>PROFESSIONAL</h3>
                        </div>
                        <div class="info">
                            <h5>IBDL ESSENTIAL CERTIFICATE</h5>
                            <div class="spa">
                                <span>Quantity:</span>
                                <span>2</span>
                            </div>
                            <div class="spa">
                                <span>cost:</span>
                                <span>$200</span>
                            </div>
                            <div class="form-row">
                                <input type="submit" value="Details">
                                <input type="submit" value="Add to Card">
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="logo">
                            <img src="./images/IMG-20230528-WA0015.jpg" alt="" />
                            <h3>MASTER</h3>
                        </div>
                        <div class="info">
                            <h5>IBDL ESSENTIAL CERTIFICATE</h5>
                            <div class="spa">
                                <span>Quantity:</span>
                                <span>2</span>
                            </div>
                            <div class="spa">
                                <span>cost:</span>
                                <span>$200</span>
                            </div>
                            <div class="form-row">
                                <input type="submit" value="Details">
                                <input type="submit" value="Add to Card">
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="logo">
                            <img src="./images/IMG-20230528-WA0015.jpg" alt="" />
                            <h3>CIE</h3>
                        </div>
                        <div class="info">
                            <h5>IBDL ESSENTIAL CERTIFICATE</h5>
                            <div class="spa">
                                <span>Quantity:</span>
                                <span>2</span>
                            </div>
                            <div class="spa">
                                <span>cost:</span>
                                <span>$200</span>
                            </div>
                            <div class="form-row">
                                <input type="submit" value="Details">
                                <input type="submit" value="Add to Card">
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="logo">
                            <img src="./images/IMG-20230528-WA0015.jpg" alt="" />
                            <h3>CE</h3>
                        </div>
                        <div class="info">
                            <h5>IBDL ESSENTIAL CERTIFICATE</h5>
                            <div class="spa">
                                <span>Quantity:</span>
                                <span>2</span>
                            </div>
                            <div class="spa">
                                <span>cost:</span>
                                <span>$200</span>
                            </div>
                            <div class="form-row">
                                <input type="submit" value="Details">
                                <input type="submit" value="Add to Card">
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="logo">
                            <img src="./images/IMG-20230528-WA0015.jpg" alt="" />
                            <h3>CPAT</h3>
                        </div>
                        <div class="info">
                            <h5>IBDL ESSENTIAL CERTIFICATE</h5>
                            <div class="spa">
                                <span>Quantity:</span>
                                <span>2</span>
                            </div>
                            <div class="spa">
                                <span>cost:</span>
                                <span>$200</span>
                            </div>
                            <div class="form-row">
                                <input type="submit" value="Details">
                                <input type="submit" value="Add to Card">
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="logo">
                            <img src="./images/IMG-20230528-WA0015.jpg" alt="" />
                            <h3>PQP</h3>
                        </div>
                        <div class="info">
                            <h5>IBDL ESSENTIAL CERTIFICATE</h5>
                            <div class="spa">
                                <span>Quantity:</span>
                                <span>2</span>
                            </div>
                            <div class="spa">
                                <span>cost:</span>
                                <span>$200</span>
                            </div>
                            <div class="form-row">
                                <input type="submit" value="Details">
                                <input type="submit" value="Add to Card">
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="logo">
                            <img src="./images/IMG-20230528-WA0015.jpg" alt="" />
                            <h3>CPAT</h3>
                        </div>
                        <div class="info">
                            <h5>IBDL ESSENTIAL CERTIFICATE</h5>
                            <div class="spa">
                                <span>Quantity:</span>
                                <span>2</span>
                            </div>
                            <div class="spa">
                                <span>cost:</span>
                                <span>$200</span>
                            </div>
                            <div class="form-row">
                                <input type="submit" value="Details">
                                <input type="submit" value="Add to Card">
                            </div>
                        </div>
                    </div>
                    <div>
                        sadsad
                    </div>
                </main>
            </section>
            <div class="big" id="hide-show">
                <div id="close">
                    <span class="frist"></span>
                    <span class="sacand"></span>
                </div>

                <div class="t">
                    <div class="box">
                        <div class="box1">
                        </div>
                        <div class="box2">
                        </div>
                    </div>
                    <h1>CERTIFICATE</h1>
                    <h4>OF ATTENDENCE</h6>
                        <span>That is Certify Tat</span>
                        <h3>Mohammed Abdelmmoneim Ahmed</h3>
                        <p>Has Successflly Completed All E-learning Courses and
                            <br> recelved passing Grades For a Verified Cerificate in
                        </p>
                        <img src="./images/IMG-20230528-WA0029.jpg" alt="">
                        <p>UNDESTANDING BUSINESS</p>
                        <P>A Program Offerd By IBDL Learing Group
                            <br>
                            in Online Learing in Partnership With ILTC and MSU
                        </P>
                        <div class="log">
                            <img class="logo" src="./images/IMG-20230528-WA0015.jpg" alt="">
                            <h2>IBDL</h2>
                        </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
@endsection