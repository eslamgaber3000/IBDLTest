<script src="{{ asset('site/js/modernizr-3.6.0.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"
    integrity="sha512-oL84kLQMEPIS350nZEpvFH1whU0HHGNUDq/X3WBdDAvKP7jn06gHTsCsymsoPYKF/duN8ZxzzvQgOaaZSgcYtQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.0/jquery-migrate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
<script src="{{ asset('site/plugins/aos.js') }}"></script>
<script src="{{ asset('site/plugins/headroom.js/headroom.min.js') }}"></script>
<script src="{{ asset('site/plugins/headroom.js/jQuery.headroom.min.js') }}"></script>
<script src="{{ asset('site/plugins/jssocials.min.js') }}"></script>
<script src="{{ asset('site/plugins/plyr.min.js') }}"></script>
<script src="{{ asset('site/js/scripts.0.0.1.js') }}"></script>
{{-- <script src="//code.tidio.co/zk6slgwkeuewuvwrymttufgx2rnhbgto.js" async></script> --}}

@if (isset($assets))
@include('includes.assets.scripts.' . $assets)
@endif

@if (isset($scripts))
@include('includes.assets.scripts.' . $scripts)
@endif