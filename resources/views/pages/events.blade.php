@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Events','breadcrumb'=> 'Media/Events','header'=>'media.jpg','icon'=>'media2.png'])

<section>
    <div class="container-fluid">
        <div style="background-color: whitesmoke;" class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="col-12">

                    @foreach ($events as $key => $event)
                    <div class="card coll-card mb-5">
                        <div class="row g-0">
                            <div style="text-align: center;" class="col-md-4">
                                <img onclick="perviewImg(this)" id="myImg" src="../images/{{$event->img}}"
                                    class="img-fluid rounded-start coll-card-img" alt="...">

                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div style="text-align: justify" class="card-body  coll-card-body">
                                    <h5 class="card-subtitle mb-2 coll-card-subtitle">
                                        {{$event->title}}
                                    </h5>
                                    <h6 class="card-title mb-2 coll-card-title"> {{$event->from}}
                                    </h6>
                                    <div class="content-text transition" id="content{{$key}}">
                                        {{$event->content}}
                                    </div>
                                    <div>
                                        <a onclick="readMore(this)" class="read-btn" id="{{$key}}">
                                            Read More
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
                {{$events->links()}}
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
        content.classList.toggle("content-text-viewed");
    }
      
</script>
@endsection