@extends('exam-layout-in')
@section('exam_in_content')

@php

$imagePaths = [
1 => 'Essential.png',
2 => 'Professional.png',
3 => 'Essential.png',
9 => 'Essential.png',
21 => 'Professional.png',
22 => 'Master.png',
24 => 'Professional.png',
20 => 'Master.png',
30 => 'CE.png',
31 => 'CIE.png',
32 => 'CIE.png',
33 => 'CIE.png',
34 => 'CIE.png',
35 => 'CIE.png',
36 => 'CIE.png',
37 => 'CIE.png',
38 => 'CIE.png',
];

$imagePath = $imagePaths[$exam_level] ?? 'Essential.png';
$imageSrc = asset("images/certs/{$imagePath}");


if (session('demo_exam_lang') == 2) {
$back = 'العودة للصفحة الرئيسية';
} elseif (session('demo_exam_lang') == 11) {
$back = 'Précédente';
} else {
$back = 'Back to Home Page';
}


$name = $examiner_data->name;
$parts = [];
while (strlen(trim($name)) > 0) {
$name = trim($name);
$string = preg_replace('#.*\s([\w-]*)$#', '$1', $name);
$parts[] = $string;
$name = trim(preg_replace('#' . preg_quote($string, '#') . '#', '', $name));
}
if (empty($parts)) {
return false;
}
$parts = array_reverse($parts);
$name = [];
$name['first_name'] = $parts[0];
$name['middle_name'] = isset($parts[2]) ? $parts[1] : '';

@endphp


<div class="section">
    <div class="title">
        <h1 class="title-text">
            DEMO EXAM
        </h1>
    </div>
    <div class="container-sec d-flex">
        <div class="col-5 d-flex flex-column mt-5">
            <h1 class="text-w mb-3">
                {{ $name['first_name'] }} {{ $name['middle_name'] }}
            </h1>
            <h3 class="text-w mb-3">
                {{ $examiner_data->logBook }}
            </h3>
            <h3 class="text-w mb-3">
                @php
                echo date('F jS \, Y');
                @endphp
            </h3>

        </div>
        <div class="question-sec">
            <div class="d-flex flex-column question-inner py-4 px-5">
                <div class="img col-6 mx-auto">
                    <img width="100%" height="auto" src="{{$imageSrc}}" alt="">
                </div>
                @if($score <= 60) <div class="col-12 mt-5">
                    @if(session('demo_exam_lang') == 2)
                    <p style="font-size:1.2em" class="fw-bold text-center">
                        <span style="color:#e30618;font-size:1.3em">
                            للأسف لم تنجح في الاختبار
                        </span>
                    </p>

                    @else
                    <p style="font-size:1.2em" class="fw-bold text-center">

                        Unfortunately, you didn`t pass the demo exam
                    </p>
                    @endif
            </div>
            @if(session('demo_exam_lang') == 2)
            <div class="d-flex flex-column mt-4">
                <div class="d-flex mb-2 align-items-baseline justify-content-end">
                    <div class="col-5 text-end">
                        <span style="font-size: 2em;color:red;font-weight:700"> {{$score}}</span>%
                    </div>
                    <h6 class="col-6 text-end" style="font-size:1em;font-weight:700;color:black">
                        النتيجة
                    </h6>

                </div>
                <div class="d-flex mb-2 align-items-baseline justify-content-end">
                    <div class="col-5 text-end">
                        <span style="font-size: 2em;color:green;font-weight:700"> {{$all_right_count}} </span>
                        /{{$all_answer_count}}
                    </div>
                    <h6 class="col-6 text-end" style="font-size:1em;font-weight:700;color:green">
                        الاجابات الصحيحة
                    </h6>

                </div>
                <div class="d-flex mb-2 align-items-baseline justify-content-end">
                    <div class="col-5 text-end">
                        <span style="font-size: 2em;color:red;font-weight:700"> {{$all_answer_count -
                            $all_right_count}} </span> /{{$all_answer_count}}
                    </div>
                    <h6 class="col-6 text-end" style="font-size:1em;font-weight:700;color:red">
                        الاجابات الخاطئة
                    </h6>

                </div>
            </div>
            @else
            <div class="d-flex flex-column mt-4">
                <div class="d-flex mb-2 align-items-baseline">
                    <h6 class="col-6" style="font-size:1em;font-weight:700;color:black">
                        RESULT
                    </h6>
                    <div class="col-5">
                        <span style="font-size: 2em;color:red;font-weight:700"> {{$score}}</span>%
                    </div>
                </div>
                <div class="d-flex mb-2 align-items-baseline">
                    <h6 class="col-6" style="font-size:1em;font-weight:700;color:green">
                        CORRECT ANSWERES
                    </h6>
                    <div class="col-5">
                        <span style="font-size: 2em;color:green;font-weight:700"> {{$all_right_count}} </span>
                        /{{$all_answer_count}}
                    </div>
                </div>
                <div class="d-flex mb-2 align-items-baseline">
                    <h6 class="col-6" style="font-size:1em;font-weight:700;color:red">
                        WRONG ANSWERES
                    </h6>
                    <div class="col-5">
                        <span style="font-size: 2em;color:red;font-weight:700"> {{$all_answer_count -
                            $all_right_count}} </span> /{{$all_answer_count}}
                    </div>
                </div>
            </div>
            @endif


            @else

            <div class="col-12 mt-5">
                @if(session('demo_exam_lang') == 2)
                <p style="font-size:1.2em" class="fw-bold text-center">
                    <span style="color:green;font-size:1.3em">
                        تهانينا؛ لقد نجحت في الاختبار
                    </span>
                </p>

                @else
                <p style="font-size:1.2em" class="fw-bold text-center">
                    <span style="color:green;font-size:1.3em">
                        Congratulations, you have successfully passed the demo exam
                    </span>
                </p>
                @endif
            </div>
            @if(session('demo_exam_lang') == 2)
            <div class="d-flex flex-column mt-4">
                <div class="d-flex mb-2 align-items-baseline justify-content-end text-end">
                    <div class="col-5">
                        <span style="font-size: 2em;color:green;font-weight:700"> {{$score}}</span>%
                    </div>
                    <h6 class="col-6" style="font-size:1em;font-weight:700;color:black">
                        النتيجة
                    </h6>

                </div>
                <div class="d-flex mb-2 align-items-baseline justify-content-end text-end">
                    <div class="col-5">
                        <span style="font-size: 2em;color:green;font-weight:700"> {{$all_right_count}} </span>
                        /{{$all_answer_count}}
                    </div>
                    <h6 class="col-6" style="font-size:1em;font-weight:700;color:green">
                        الاجابات الصحيحة
                    </h6>

                </div>
                <div class="d-flex mb-2 align-items-baseline justify-content-end text-end">
                    <div class="col-5">
                        <span style="font-size: 2em;color:red;font-weight:700"> {{$all_answer_count -
                            $all_right_count}} </span> /{{$all_answer_count}}
                    </div>
                    <h6 class="col-6" style="font-size:1em;font-weight:700;color:red">
                        الاجابات الخاطئة
                    </h6>

                </div>
            </div>
            @else
            <div class="d-flex flex-column mt-4">
                <div class="d-flex mb-2 align-items-baseline">
                    <h6 class="col-6" style="font-size:1em;font-weight:700;color:black">
                        RESULT
                    </h6>
                    <div class="col-5">
                        <span style="font-size: 2em;color:green;font-weight:700"> {{$score}}</span>%
                    </div>
                </div>
                <div class="d-flex mb-2 align-items-baseline">
                    <h6 class="col-6" style="font-size:1em;font-weight:700;color:green">
                        CORRECT ANSWERES
                    </h6>
                    <div class="col-5">
                        <span style="font-size: 2em;color:green;font-weight:700"> {{$all_right_count}} </span>
                        /{{$all_answer_count}}
                    </div>
                </div>
                <div class="d-flex mb-2 align-items-baseline">
                    <h6 class="col-6" style="font-size:1em;font-weight:700;color:red">
                        WRONG ANSWERES
                    </h6>
                    <div class="col-5">
                        <span style="font-size: 2em;color:red;font-weight:700"> {{$all_answer_count -
                            $all_right_count}} </span> /{{$all_answer_count}}
                    </div>
                </div>
            </div>
            @endif
            @endif








            <div class="d-flex flex-wrap mt-3 mb-2">
                <div class="mt-5 mb-3 m-auto ">
                    <a href="{{ route('Demo.Index') }}" style="width: 200px" class="btn move-btn nxt mx-3">
                        {{ $back }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div style="" class=" d-flex justify-content-center text-white ">
        2023 IBDL
        Learning Group. All Rights
        Reserved</div>
</footer>
</div>