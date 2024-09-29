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
<link rel="stylesheet" href="{{ asset('Blog/css/Article.test.css') }}">
<link rel="stylesheet" href="{{ asset('Blog') }}/css/style.css">

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
                                        <div class="Ather_container d-flex justify-content-center align-items-center">
                                            <!-- Author Profile Picture -->
                                            <div class="Ather_profile me-3">

                                               
                                                <img src="{{asset('storage/'.$article->auther->image)}}" alt="Profile Picture"
                                                    class="rounded-circle" style="width: 60px; height: 60px;">
                                            </div>

                                            <!-- Author Information -->
                                            <div class="Ather_content text-start">
                                                <h2>{{ $article->auther->name }}, LCSW</h2>
                                                <div class="metadata">
                                                    <span>Published in <strong>IBDL Learning Group</strong></span>
                                                    <span>• 4 min read • Aug 30, 2024</span>
                                                </div>
                                            </div>

                                            <!-- Follow Button -->
                                            <div class="Ather_follow ms-3">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                
                                                            <a href="">
                                                                <i class="fa-brands fa-facebook"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                
                                                            <a href=""> <i class="fa-brands fa-linkedin-in"></i></a>
                                                        </div>
                                                        <div class="col-md-3">
                                                
                                                            <a href="">
                                                                <i class="fab fa-instagram"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                
                                                            <a href=""> <i class="fa-solid fa-x"></i></a>
                                                        </div>
                                                
                                                    </div>
                                                </div>
                                                <span  class="">Follow</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="container">
                                    <div
                                        class="post-actions d-flex justify-content-between align-items-center border-top border-bottom py-3">
                                        <!-- Left Section (Reactions) -->
                                        <div class="left-section d-flex align-items-center">
                                            <!-- Clap Icon and Count -->
                                           
                                            <form action="{{url( 'Article/like/create') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="article_id" id="article_id" value="{{ $article->id }}">
                                                <input type="hidden" name="user_id" id="user_id" value="{{ $article->user->id }}">
                                                <span class="reaction-icon me-2">
                                                    <button type="button" id="like-button" style="border: none ; background:none ; padding:none ;"> <i class="fas fa-hands-clapping h-2 text-success" ></i> </button> 
                                                </span>
                                                <span class="reaction-count me-4 " id="like_count">{{ $article->likes->count() }}</span>
                                            </form>

                                            <!-- Comment Icon and Count -->
                                            <span class="comment-icon me-2">
                                                <i class="fas fa-comment-dots"></i>
                                            </span>
                                            <span class="comment-count">{{  $article->comments->count() }}</span>
                                        </div>

                                        <!-- Right Section (Actions) -->
                                        <div class="right-section d-flex align-items-center">
                                            <!-- Bookmark Button -->
                                            {{-- <a href="">

                                                <span class="me-3">
                                                    <i class="fas fa-bookmark"></i>
                                                </span>
                                            </a> --}}
                                            {{-- <a href="">
                                                <span class="me-3">
                                                    <i class="fas fa-play-circle"></i>
                                                </span>
                                            </a> --}}

                                            <a href="">
                                                <span class="me-3">
                                                    <i class="fas fa-share"></i>
                                                </span>
                                            </a>

                                            {{-- <a href="">
                                                <span>
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </span>
                                            </a> --}}

                                        </div>
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
                        <div class="entry-content">
                            <p> {{  $article->desc}}</p>
                            
                            <p> {{ $article->desc2 }}.</p>
                         

                           
                            <h3 class="mt-5 mb-3">The Power of Thought</h3>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde cum delectus
                                exercitationem
                                natus quidem enim error suscipit. Iure cupiditate nobis quaerat consectetur! Vero
                                aliquam,
                                amet ipsum ullam reiciendis nostrum voluptate accusantium provident ut blanditiis
                                incidunt. </p>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ab ratione animi
                                nobis in et consequatur
                                earum modi repellendus, qui, non debitis pariatur tempora consequuntur!</p>
                        </div>

                    


                       
                    </div>
                </div>

              
                <div class="related-posts-block mt-5">
                    <h3 class="news-title mb-4 text-center">
                        You May Also Like
                    </h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="post-block-wrapper mb-4 mb-lg-0">
                                <a href="blog-single.html">
                                    <img class="img-fluid" src="{{asset("Blog/images/fashion/img-1.jpg")}}"
                                        alt="post-thumbnail" />
                                </a>
                                <div class="post-content mt-3">
                                    <h5>
                                        <a href="blog-single.html">Intel’s new smart glasses actually look good</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="post-block-wrapper mb-4 mb-lg-0">
                                <a href="blog-single.html">
                                    <img class="img-fluid" src="{{ asset('Blog') }}/images/fashion/img-2.jpg"
                                        alt="post-thumbnail" />
                                </a>
                                <div class="post-content mt-3">
                                    <h5>
                                        <a href="blog-single.html">Free Two-Hour Delivery From Whole Foods</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="post-block-wrapper">
                                <a href="blog-single.html">
                                    <img class="img-fluid" src="{{ asset('Blog') }}/images/fashion/img-3.jpg"
                                        alt="post-thumbnail" />
                                </a>
                                <div class="post-content mt-3">
                                    <h5>
                                        <a href="blog-single.html">Snow and Freezing Rain in Paris Forces the</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="comment-area my-5">
                    {{-- <h3 class="mb-4 text-center">{{ $article->comments->count() }} comments </h3> --}}

                    @if ( $article->comments)
                    @foreach ( $article->comments as $comment )


                    <div class="comment-area-box media">
                        <img alt="" src="{{ asset('storage/avatars/'.$article->user->avatar) }}"
                            class="img-fluid float-left mr-3 mt-2">

                        <div class="media-body ml-4">
                            <h4 class="mb-0">{{ $article->user->name }} </h4>
                            <span class="date-comm font-sm text-capitalize text-color"><i class="ti-time mr-2"></i>{{
                                $comment->created_at->format('Y-m-d') }} </span>

                            <div class="comment-content mt-3">
                                <p>{{ $comment->comment}}</p>
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
        url: 'http://127.0.0.1:8000/comment/store',
        type: 'POST',
        data: {
        "_token": "{{ csrf_token() }}",     
            article_id: article_id, comment: comment
         },
        success: function(response) {
            console.log(response);
            $("#comment").val("");
            // console.log(response);
            
            window.alert("your comment has been published");
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
        url: 'http://127.0.0.1:8000/Article/like/create',
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



    // $.ajax({
    //     url: '/post/' + articleId + '/like',
    //     method: 'POST',
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     },
    //     success: function(response) {
    //         if (response.status === 'liked') {
    //             alert('Post liked!');
    //         } else {
    //             alert('Post unliked!');
    //         }
    //     }
    // });
});

</script>
@endsection