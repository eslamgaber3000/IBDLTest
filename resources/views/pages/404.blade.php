@extends('layout-new')

@section('websit_content')


<section>
    <div style="margin-top:5em" class="container-fluid">
        <div style="background-color:whitesmoke" class="row">
            <div id="notfound">
                <div class="notfound">
                    <div class="notfound-bg">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <h1>oops!</h1>
                    <h2>Error 404 : Page Not Found</h2>
                    <a href="{{url('/')}}">HOME PAGE</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection