@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>$page->title,'breadcrumb'=>
$page->breadcrumb,'header'=>$page->header,'icon'=>$page->icon])

<section>
    <div class="container-fluid">
        <div style="background-color: whitesmoke;" class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row d-flex">
                    @foreach($trustees as $key => $person )
                    <div style="margin:0 auto" class="col-10 col-sm-8 col-md-4 col-lg-6 col-xl-4">
                        <div class="card b_o_t-card">
                            <img src="../../storage/{{$person['image']}}" class="card-img-top b_o_t-card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted b_o_t-card-subtitle">{{$person['position']}}
                                </h6>
                                <h4 class="card-title b_o_t-card-title">{{$person['name']}}</h4>
                                <div class="b_o_t-card-text content-text2 transition mb-0" id="content{{$key}}">
                                    @php
                                    echo $person['bref']
                                    @endphp
                                </div>
                                @if(strlen($person['bref']) > 100)
                                <a onclick="readMore(this)" class="read-btn" id="{{$key}}">
                                    Read More
                                </a>
                                @else
                                <a style="visibility: hidden" onclick="readMore(this)" class="read-btn" id="{{$key}}">
                                    Read More
                                </a>
                                @endif
                                <div class="d-flex mt-4">
                                    @if($person['linked'])
                                    <div class="social-wrapper">
                                        <a target="_blank" href="{{$person['linked']}}">
                                            <i class="fa-brands fa-linkedin-in social-circle"
                                                style="color: #ffffff;"></i>
                                        </a>
                                    </div>

                                    @endif
                                    @if($person['twitter'])
                                    <div class="social-wrapper">
                                        <a target="_blank" href="{{$person['twitter']}}">
                                            <i class="fa-brands fa-twitter social-circle" style="color: #ffffff;"></i>
                                        </a>
                                    </div>
                                    @else
                                    <i class="fa-brands fa-twitter social-circle"
                                        style="color: #ffffff; visibility:hidden"></i>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
<script>
    const modal = document.getElementById("myModal");
    const modalImg = document.getElementById("img01");
    const span = document.getElementsByClassName("close")[0];
    span.onclick = function() { 
        modal.style.display = "none";
    }
    function perviewImg(img){
        modal.style.display = "block";
        modalImg.src = img.src;
    };

    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        }
    }

    function readMore(btn){
        if(btn.innerText == 'Read Less'){
            btn.innerText = 'Read More';
        }else{
            btn.innerText = 'Read Less';
        }
        var id =  'content'+btn.id
        console.log(id)
        const content = document.getElementById(id);
        content.classList.toggle("content-text-viewed2");
    }
      
</script>
@endsection