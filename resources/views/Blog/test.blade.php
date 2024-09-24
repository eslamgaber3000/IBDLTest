 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medium Style Blog Post Actions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('Blog/css/Article.test.css') }}"> 
</head>
<body>

<!-- Inside your existing layout -->
<div class="container mt-5">
    <div class="post-actions d-flex justify-content-between align-items-center border-top border-bottom py-3">
        <!-- Left Section (Reactions) -->
        <div class="left-section d-flex align-items-center">
            <!-- Clap Icon and Count -->
            <span class="reaction-icon me-2">
                <i class="fas fa-hands-clapping"></i>
            </span>
            <span class="reaction-count me-4">12.1K</span>

            <!-- Comment Icon and Count -->
            <span class="comment-icon me-2">
                <i class="fas fa-comment-dots"></i>
            </span>
            <span class="comment-count">354</span>
        </div>

        <!-- Right Section (Actions) -->
        <div class="right-section d-flex align-items-center">
            <!-- Bookmark Button -->
            <button class="btn btn-light me-3">
                <i class="fas fa-bookmark"></i>
            </button>

            <!-- Play Button -->
            <button class="btn btn-light me-3">
                <i class="fas fa-play-circle"></i>
            </button>

            <!-- Share Button -->
            <button class="btn btn-light me-3">
                <i class="fas fa-share"></i>
            </button>

            <!-- More Options Button -->
            <button class="btn btn-light">
                <i class="fas fa-ellipsis-h"></i>
            </button>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>  




{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Header</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/6hb6Tp6nI9cVcp+0d5bfLME5nZ7uOkz7s23ab5" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('Blog/css/Article.test.css') }}">
</head>
<body>
    <div class="container mt-4 border-bottom pb-3">
        <div class="row align-items-center">
            <!-- Profile Image -->
            <div class="col-auto">
                <img src="https://via.placeholder.com/50" alt="Profile Picture" class="rounded-circle">
            </div>

            <!-- Content -->
            <div class="col">
                <h5 class="mb-0">Karol Ward, LCSW</h5>
                <small class="text-muted">
                    Published in <strong>Career Paths</strong> • 4 min read • Aug 30, 2024
                </small>
            </div>

            <!-- Follow Button -->
            <div class="col-auto">
                <a href="#" class="btn btn-outline-success btn-sm">Follow</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-WoZUnG74q/w0Jp1KPLddHAqjeEYnpIfJ43PV5gA5R/JVfzrLb8LLztvwzIfNGz3p" crossorigin="anonymous"></script>
</body>
</html> --}}





 <div class="Ather_container d-flex justify-content-center align-items-center">
                                            <!-- Author Profile Picture -->
                                            <div class="Ather_profile me-3">
                                                <img src="{{ asset('images/placeholder.jpg') }}" alt="Profile Picture"
                                                    class="rounded-circle" style="width: 60px; height: 60px;">
                                            </div>

                                            <!-- Author Information -->
                                            <div class="Ather_content text-start">
                                                <h2>Karol Ward, LCSW</h2>
                                                <div class="metadata">
                                                    <span>Published in <strong>IBDL Learning Group</strong></span>
                                                    <span>• 4 min read • Aug 30, 2024</span>
                                                </div>
                                            </div>

                                            <!-- Follow Button -->
                                            <div class="Ather_follow ms-3">
                                                <a href="#" class="btn btn-outline-success">Follow</a>
                                            </div>
                                        </div>