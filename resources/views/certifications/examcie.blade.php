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
                                <div class="col-md-4 col-8 text-center offset-md-1 offset-2 ">
                             <p style="font-size: 18px;">
                                {{-- @php
                                dd ($img);
                                @endphp --}}
                            
                              Name:  {{ strtoupper($one_exam->name) }}
                            
                            </p>
                                </div>
                                <div class="col-md-4 col-8 text-center offset-2 ">
                                    <p  style="font-size: 18px;">
                                        Logbook NO. &nbsp;&nbsp;{{ $one_exam->logbook }}
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap mt-3">
                                <div class="col-md-4 text-center col-10 offset-1">
                                    <p>Certified Industrial Engineering</p>
                                </div>
                                <div class="col-md-4 col-8 text-center offset-md-1 offset-0">
                                    {{-- Determine overall status based on highest scores --}}
                                    @php
                                    $overallStatus = 'Pass';
                                    foreach($highestScores as $score) {
                                    if ($score->highest_score < 50) { $overallStatus='Failed' ; break; } } @endphp
                                        <span> Status: </span>&nbsp;
                                        @if ($overallStatus == 'Pass')
                                        <span style="font-weight:600; color:rgb(10, 212, 10)"> Passed </span>
                                        @else
                                        <span style="font-weight:600; color:red"> Failed </span>
                                        @endif
                                </div>

                            </div>
                        </div>
                        <div class="col-md-2 col-6 m-auto page-btn my-4 my-md-0 text-center">
                            @if ($overallStatus == 'Pass')

                            <a class="btn btn-success button" style="font-size: 15px;"
                                href="{{url('storage/cert/'. $one_exam->logbook .'.jpg') }}" target="_blank"
                                download>Download certificate</a>
                            @endif
                        </div>
                    </div>

                </div>


                <table class="table text-center">
                    <thead class="table-header">
                        <tr>
                            <th scope="col">Part NO.</th>
                            <th scope="col">Part Name</th>

                            <th scope="col"> Result % </th>
                            {{-- <th scope="col">Date</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0
                        ?>

                        @foreach ($highestScores as $score)
                        <?php
                        $i++
                        ?>
                        <tr>
                            <td>{{ $score->part }}</td>
                            <td>{{ $titles[$score->part] }}</td>
                            <td>{{ $score->highest_score }}</td>
                            {{-- <td>{{ $score->highest_date }}</td> --}}
                        </tr>
                        @endforeach


                    </tbody>
                </table>


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