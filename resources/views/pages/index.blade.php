@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>$page->title,'breadcrumb'=>
$page->breadcrumb,'header'=>$page->header,'icon'=>$page->icon])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                @php
                echo $page->paragraph_1
                @endphp
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection