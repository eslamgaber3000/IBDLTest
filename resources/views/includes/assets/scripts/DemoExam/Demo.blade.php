<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


@if(session()->has('message'))
    <script type="text/javascript">
        swal({
            title:'Message',
            text:"{{Session::get('message')}}",
            timer:5000,
            type:'errors'
        }).then((value) => {
            //location.reload();
        }).catch(swal.noop);

    </script>
@endif
