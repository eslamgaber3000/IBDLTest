@extends('layoutBlog')


@section('css')
<!--Favicon-->
<link rel="shortcut icon" href="{{ asset('Blog') }}/images/favicon.ico" type="image/x-icon">

<!-- THEME CSS
      ================================================== -->
<!-- Bootstrap -->
{{--
<link rel="stylesheet" href="{{ asset('Blog') }}/plugins/bootstrap/css/bootstrap.min.css"> --}}
<!-- Themify -->
<link rel="stylesheet" href="{{asset('Blog')}}/themify/css/themify-icons.css">
<link rel="stylesheet" href="{{asset('Blog')}}/slick-carousel/slick-theme.css">
<link rel="stylesheet" href="{{asset('Blog')}}/slick-carousel/slick.css">
<!-- Slick Carousel -->
<link rel="stylesheet" href="{{asset('Blog')}}/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('Blog')}}/owl-carousel/owl.theme.default.min.css">
<link rel="stylesheet" href="{{asset('Blog')}}/magnific-popup/magnific-popup.css">
<!-- manin stylesheet -->
<link rel="stylesheet" href="{{ asset('Blog') }}/css/style.css">

<!-- style for article  -->

{{--
<link rel="stylesheet" href="{{ asset('blog/css/Article_Content_Style.css') }}"> --}}

<link rel="stylesheet" href="{{ asset('Blog/css/Article_Content_Style.css') }}">
<!-- seewt alert cdn -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@endsection


@section('websit_content')



<!--search overlay end-->



<section class="single-block-wrapper section-padding">
    <div class="container d-flex justify-content-center">
        <div class="row  justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
                <div class="single-post">
                    <div class="post-header mb-5 text-center">
                        <div class="meta-cat">
                            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1"
                                href="#">Health ,</a>
                            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1"
                                href="#">lifestyle</a>
                        </div>
                        <div class="container my-3">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    @if (session()->has('error'))
                                    <div class="alert alert-danger">
                                        <strong>Warning!</strong> This article has been removed from the system.
                                    </div>
                                    @endif
                                    <!-- Content Block: Title, Subtitle, Author Section -->
                                    <div class="content-block text-center p-4">
                                        <!-- Article Title -->
                                        <h2 class="post-title my-3">
                                            {{ $article->title }}
                                        </h2>

                                        <!-- Subtitle -->
                                        <p class="letter-spacing-1">
                                            {{ $article->subtitle }}
                                        </p>

                                        <!-- Author Section -->
                                        <div
                                            class="Ather_container d-flex justify-content-center align-items-center mt-3">
                                            <!-- Author Profile Picture -->
                                            <div class="Ather_profile me-3">


                                                <img src="{{asset('storage/'.$article->auther->image)}}"
                                                    alt="Profile Picture" class="rounded-circle"
                                                    style="width: 60px; height: 60px;">
                                            </div>

                                            <!-- Author Information -->
                                            <div class="Ather_content text-start">
                                                <h3>{{ $article->auther->name }}</h3>
                                                <div class="metadata">
                                                    <span>Published in <strong>IBDL Learning Group</strong></span>
                                                    <span>• {{ $article->time_to_read }} min read • {{
                                                        \Carbon\Carbon::parse($article->auther->created_at)->format('M
                                                        d, Y') }}</span>
                                                </div>
                                            </div>

                                            <!-- Follow Button -->
                                            <div class="Ather_follow ms-3">
                                                @if ($article->auther->facebook || $article->auther->x ||
                                                $article->auther->instagram|| $article->auther->linkedin)
                                                <button disabled class="auther-follow-word"
                                                    style="disabled">Follow</button>
                                                @endif

                                                <div class="container mt-1">
                                                    <div class="row">
                                                        @if ($article->auther->facebook)
                                                        <div class="col-md-3">

                                                            <a href="{{$article->auther->facebook }}">
                                                                <i class="fa-brands fa-facebook"></i>
                                                            </a>
                                                        </div>
                                                        @endif
                                                        @if ($article->auther->linkedin)
                                                        <div class="col-md-3">

                                                            <a href="{{ $article->auther->linkedin }}"> <i
                                                                    class="fa-brands fa-linkedin-in"></i></a>
                                                        </div>
                                                        @endif

                                                        @if ($article->auther->instagram)
                                                        <div class="col-md-3">

                                                            <a href="{{$article->auther->instagram }}">
                                                                <i class="fab fa-instagram"></i>
                                                            </a>
                                                        </div>
                                                        @endif

                                                        @if ($article->auther->x)
                                                        <div class="col-md-3">

                                                            <a href="{{ $article->auther->x }}"> <i
                                                                    class="fa-solid fa-x"></i></a>
                                                        </div>
                                                        @endif


                                                    </div>
                                                </div>
                                                {{-- <span class="">Follow</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container ">
                                    <div
                                        class="post-actions d-flex justify-content-between align-items-center border-top border-bottom py-3">
                                        <!-- Left Section (Reactions) -->
                                        <div class="left-section d-flex align-items-center">
                                            <!-- Clap Icon and Count -->

                                            <form action="{{url( 'Article/like/create') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="article_id" id="article_id"
                                                    value="{{ $article->id }}">
                                                {{-- <input type="hidden" name="user_id" id="user_id"
                                                    value="{{ $article->user->id }}"> --}}
                                                <span class="reaction-icon me-2">
                                                    <button type="button" id="like-button"
                                                        style="border: none ; background:none ; padding:none ;"> <i
                                                            class="fa-solid fa-thumbs-up "></i> </button>
                                                </span>
                                                <span class="reaction-count me-4 " id="like_count">{{
                                                    $article->likes->count() }}</span>
                                            </form>
                                            <!-- Comment Icon and Count -->
                                            <span class="comment-icon me-2">
                                                <i class="fas fa-comment-dots"></i>
                                            </span>
                                            <span class="comment-count">{{ $article->comments->count() }}</span>
                                        </div>
                                        <!-- Right Section (Actions) -->
                                        <div class="right-section d-flex align-items-center">

                                            <div style="position: relative;">

                                                @if ($article->article_audio)
                                                <a href="javascript:void(0);" id="play-audio">
                                                    <span class="me-3">
                                                        <i class="fas fa-play-circle"></i>
                                                    </span>
                                                </a>
                                                @endif

                                                <audio controls style="display: none;" id="audio-player">
                                                    <source src="{{ Storage::url( $article->article_audio) }}"
                                                        type="audio/mpeg">
                                                    Your browser does not support the audio element.
                                                </audio>
                                                <a href="#" id="share-icon" >
                                                    <span class="me-3">
                                                        <i class="fa-solid fa-share-nodes"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="share-buttons" style="display: none;">
                                        <span class="share-icon-span text-info" style="color:green;">
                                            {!! $shareComponent !!}
                                        </span>
                                    </div>
                                    

                                </div>
                            </div>

                        </div>






                        <div class="post-featured-image mt-5">
                            <img src="{{ asset("storage/$article->article_image") }}" class="img-fluid w-100"
                            alt="featured-image">
                        </div>
                    </div>

                    <div class="post-body">
                        <div class="rich-editor-content">
                            @php
                            echo $article->desc
                            @endphp

                    </div>
                </div>


                <div class="related-posts-block mt-5">
                    <h3 class="news-title mb-4 text-center">
                        You May Also Like
                    </h3>
                    <div class="row">
                        @if ($similartArticles)
                        @foreach ($similartArticles as $similartArticle )
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="post-block-wrapper mb-4 mb-lg-0">
                                <a href="{{ url("Articles/show/$similartArticle->id") }}">
                                    <img class="img-fluid" src="{{asset("storage/$similartArticle->image")}}"
                                    alt="post-thumbnail" />
                                </a>
                                <div class="post-content mt-3">
                                    <h5>
                                        <a href="{{ url("Articles/show/$similartArticle->id") }}">{{
                                            $similartArticle->title }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif



                    </div>
                </div>

                <div class="comment-area my-5">
                  

                    @if ( $article->comments)
                    @foreach ( $article->comments as $comment )


                    <div class="comment-area-box media">
                        <img alt="" src="{{ asset('storage/avatars/'.$comment->user->avatar) }}"
                            class="img-fluid float-left" width="50px" height="50px">

                        <div class="media-body ml-4">
                            <h4 class="mb-0">{{ $comment->user->name }} </h4>
                            <span class="date-comm font-sm text-capitalize text-color"><i class="ti-time mr-2"></i>{{
                                $comment->created_at->format('Y-m-d') }} </span>

                            <div class="comment-content mt-3">
                                <p style="color: black">{{ $comment->comment}}</p>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    @endif




                </div>

                @auth
                <form class="comment-form mb-5 gray-bg p-5" me id="comment-form" method="POST"
                    action="{{ url('comment/store') }}">

                    @csrf
                    <h3 class="mb-4 text-center">Leave a comment</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                            <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5"
                                placeholder="Comment"></textarea>
                        </div>

                    </div>

                    <input class="btn btn-primary" type="button" name="submit-contact" id="submit_contact"
                        value="Submit Message">
                </form>
                @endauth

            </div>




        </div>
    </div>
</section>
@endsection

@section('scripts')

<!-- THEME JAVASCRIPT FILES
================================================== -->
<!-- initialize jQuery Library -->
<script src="plugins/jquery/jquery.js"></script>
<!-- Bootstrap jQuery -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<!-- Owl caeousel -->
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="plugins/slick-carousel/slick.min.js"></script>
<script src="plugins/magnific-popup/magnific-popup.js"></script>
<!-- Instagram Feed Js -->
<script src="plugins/instafeed-js/instafeed.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js"></script>
<!-- main js -->
<script src="js/custom.js"></script>

<script>
    $("#submit_contact").click(function(){

    let article_id = $("input[name='article_id']").val();
    let comment = $("#comment").val();


    $.ajax({
        url: '/comment/store',
        type: 'POST',
        data: {
        "_token": "{{ csrf_token() }}",     
            article_id: article_id, comment: comment
         },
        success: function(response) {
            console.log(response);
            $("#comment").val("");
            // console.log(response);
            
                Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Your comment  has been saved",
                showConfirmButton: false,
                timer: 1500
                });

            window.location.reload();
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });

});
        
$('#like-button').on('click', function() {

    let user_id=$('#user_id').val();
    let article_id=$('#article_id').val();
   

    $.ajax({
        url: '/Article/like/create',
        type: 'POST',
        data: {
        "_token": "{{ csrf_token() }}",     
            article_id: article_id,user_id:user_id
         },
        success: function(response) {
           
            $("#like_count").text("{{ $article->likes->count() +1 }}");
            $("#like-button").css( "cursor", "not-allowed" );
            

        //    window.alert(response);
            
          
           
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });

});

</script>
{{-- use icon for play audio instead of audio tag --}}
<script>
    var playButton = document.getElementById('play-audio');
var audioPlayer = document.getElementById('audio-player');
var icon = playButton.querySelector('i');

// console.log(audioPlayer);
playButton.addEventListener('click', function() {

if (audioPlayer.paused) {
    audioPlayer.play();
    icon.classList.remove('fa-play-circle');
    icon.classList.add('fa-pause-circle');
}else{
    audioPlayer.pause();
    icon.classList.remove('fa-pause-circle');
    icon.classList.add('fa-play-circle');
}
})
</script>


<script>
    document.getElementById('share-icon').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior
        var shareButtons = document.getElementById('share-buttons');
        shareButtons.style.display = shareButtons.style.display === 'none' ? 'block' : 'none';
    });
</script>
@endsection