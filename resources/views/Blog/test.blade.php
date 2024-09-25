<!-- In your Blade view file (e.g., show.blade.php) -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="post">
        <!-- Post content goes here -->
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    
        <!-- Like button -->
        <button class="like-button" data-post-id="{{ $post->id }}">
            Like (<span id="like-count-{{ $post->id }}">{{ $post->likes->count() }}</span>)
        </button>
    </div>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.like-button').on('click', function() {
            var postId = $(this).data('post-id');
            
            $.ajax({
                url: '/post/' + postId + '/like',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.status === 'liked') {
                        alert('Post liked!');
                    } else {
                        alert('Post unliked!');
                    }
    
                    // Update like count
                    var likeCountSpan = $('#like-count-' + postId);
                    var currentCount = parseInt(likeCountSpan.text());
                    
                    if (response.status === 'liked') {
                        likeCountSpan.text(currentCount + 1);
                    } else {
                        likeCountSpan.text(currentCount - 1);
                    }
                }
            });
        });
    });
    </script>
     
</body>
</html>

