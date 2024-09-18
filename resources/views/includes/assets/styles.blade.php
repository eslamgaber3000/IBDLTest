<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    crossorigin="anonymous" />
<link rel="stylesheet" href="https://use.typekit.net/cue6snb.css" />
<!-- ALL CSS FILES -->
<link href="{{ asset('site/css/style.css') }}" rel="stylesheet">

@if (isset($assets))
@include('includes.assets.styles.' . $assets)
@endif

@if (isset($styles))
@include('includes.assets.styles.' . $styles)
@endif