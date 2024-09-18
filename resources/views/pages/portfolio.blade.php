@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>$page->title,'breadcrumb'=>
$page->breadcrumb,'header'=>$page->header,'icon'=>$page->icon])

<section>
    <div class="container-fluid">
        <div style="background-color: whitesmoke;" class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="col-12">


                    @foreach ($clients as $key => $client)
                    <div class="card coll-card mb-5">
                        <div class="row align-items-center g-0">
                            <div style="text-align: center;" class="col-md-4">
                                <img width="70%" height="auto" src="../storage/{{$client->logo}}"
                                    class="img-fluid rounded-start coll-card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div style="text-align: justify" class="card-body  coll-card-body">
                                    <h6 class="card-title mb-2 coll-card-title red">
                                        Project Details
                                    </h6>
                                    <div class="content-text ">

                                        {{$client->project_details}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    @endforeach



                </div>
                {{$clients->links()}}
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection