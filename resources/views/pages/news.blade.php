@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>$page->title,'breadcrumb'=>
$page->breadcrumb,'header'=>$page->header,'icon'=>$page->icon])


<section>
    <div class="container-fluid">
        <div style="background-color: whitesmoke;" class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <form action="{{ route('news') }}" method="POST" class="form-inline ms-auto d-flex mb-5">
                    @csrf
                    <input required name="searchInput" class="form-control ms-auto w-25 mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="border: 1px solid lightgray;">
                    <button class="btn my-2 my-sm-0" type="submit" style="background-color: #e30618;color: white;">Search
                    </button>
                </form>
                
                <div class="col-12">
                    @foreach ($news as $key => $new)
                    <div class="card coll-card mb-5">
                        <div class="row g-0">
                            <div style="text-align: center;" class="col-md-4">
                                <img onclick="perviewImg(this)" id="myImg" src="../storage/{{$new->img}}"
                                    class="img-fluid rounded-start coll-card-img" alt="...">

                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div style="text-align: justify" class="card-body  coll-card-body">
                                    <h5 class="card-subtitle mb-2 coll-card-subtitle">
                                        {{$new->title}}
                                    </h5>
                                    <h6 class="card-title mb-2 coll-card-title">
                                        @if($new->date == '0000-00-00')

                                        @else
                                        {{$new->date}}
                                        @endif
                                    </h6>
                                    <div class="content-text transition" id="content{{$key}}">

                                        {{$new->content}}
                                    </div>
                                    <div>
                                        @if(strlen($new->content) > 400)
                                        <a onclick="readMore(this)" class="read-btn" id="{{$key}}">
                                            Read More
                                        </a>
                                        @endif
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
                {{$news->links()}}
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