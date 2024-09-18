@extends('layout-new')

<style>
    #invoice {
        width: 100% !important;
    }
</style>

@section('websit_content')
@include('include.header',['title'=>'Certifications','breadcrumb'=> 'Home/Certifications','header' =>
'pages/qulifications.jpg','icon'=> 'about.png'])
<div class="container-fluid">
    <div class="row">

        <div style="margin:auto;padding:0" class="col-lg-9 col-12 offset-0">

            <div style="margin-bottom: 8em">

                <div class="page-header">
                    <div class="d-flex h-100 flex-wrap">
                        <div class="col-md-10 col-12 page-sub-header">
                            <div class="d-flex flex-wrap">
                                <div class="col-md-5 col-8 text-center offset-md-1 offset-2 ">
                                    <p style="font-size: 17px;">
                                      Name:   {{ strtoupper($certif->name) }}
                                    </p>
                                </div>
                                <div class="col-md-4 col-8 text-center offset-2 ">
                                    <p style="font-size: 17px;">
                                        Logbook NO. &nbsp;&nbsp;{{ $certif->logBook }}
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap mt-3">
                                <div class="col-md-4 text-center col-10 offset-1">
                                    <p>{{$certName}}</p>
                                </div>
                                <div class="col-md-3 text-center col-6">
                                    @if ($certif->score >= 60)
                                    <span> Score:&nbsp;</span>
                                    <span style="color:green"> {{ $certif->score }} % </span>
                                    @else
                                    <span> Score:&nbsp;</span>
                                    <span style="color:red"> {{ $certif->score }} %</span>
                                    @endif
                                </div>
                                <div class="col-md-3 col-6 text-center offset-md-1 offset-0">
                                    @if ($certif->score >= 60)
                                     <span> Status: </span>&nbsp;<strong style="color:green;"> Passed </strong>
                                    @else
                                    <span> Status: </span>&nbsp;
                                    <span style="color:red"> Failed </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 m-auto page-btn my-4 my-md-0 text-center">
                            @if ($certif->score >= 60)
                            {{-- <img id="invoice" src="{{url('storage/cert/' . $certif->logBook . '.jpg') }}">
                            <button class="btn btn-warning button" onclick="generatePDF()">Download</button> --}}
                            <a class="btn btn-success button "style="font-size: 14px;"
                                href="{{url('storage/cert/' . $certif->logBook . '.jpg') }}" target="_blank"
                                download>Download certificate</a>

                            @endif
                        </div>
                    </div>

                </div>


                <table class="table text-center">
                    <thead class="table-header">
                        <tr>
                            <th scope="col">Chapter NO.</th>
                            <th scope="col">Chapter Name</th>
                            <th scope="col"> Result %</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0
                        ?>
                        @foreach($chapters as $chapter => $result)
                        <?php
                        $i++
                        ?>
                        <tr>
                            <td> {{$i}} </td>
                            <td>{{$chapter}}</td>
                            <td>{{$result}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                {{-- @if ($certif == null)

                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>Error
                                    Sorry , No results like this log Book , Try using another search

                                </h4>
                            </div>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @else --}}
                {{-- @if ($certif->score < 70) <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>{{ $certif->name }} Didn't pass yet
                                </h4>
                            </div>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @else --}}


        </div>
    </div>

    @include('include.sidebar')
</div>

</div>

<script src="{{ asset('js/html2pdf.bundle.min.js') }}"></script>

<script>
    function generatePDF() {
            // Choose the element that our invoice is rendered in.
            const element = document.getElementById('invoice');
            // Choose the element and save the PDF for our user.
            var opt = {
                margin: 10,
                filename: 'Cert.pdf',
                image: {
                    type: 'jpeg',
                    quality: 1000
                },
                html2canvas: {
                    scale: 5
                },
                jsPDF: {
                    unit: 'in',
                    format: 'A4',
                    orientation: 'landscape'
                }
            };

            html2pdf().set(opt).from(element).save();
        }
</script>


@endsection