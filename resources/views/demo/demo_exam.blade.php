@extends('exam-layout-in')
@inject('ArTime', 'App\Libs\ArTime')
@include('demo.exam_style')
@section('exam_in_content')

<script type="text/javascript" src="../../js/moment/moment.js"></script>
<script type="text/javascript" src="{{ asset('js/moment/moment-timezone-with-data.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    setTimeout(function() {
            window.location.reload(1);
        }, 300000);
</script>
@php
use Carbon\Carbon;
$start = new Carbon(session('demo_start_time'));
$end_time = new Carbon(session('demo_end_time'));
$num_questions = $exam_setting->no_of_questions;
$last_questions = $num_questions - 1;
$counter_timer = $remaining / 60;
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

$levelColors = [
1 => ['#29a84a', '15px 0 0 15px'],
2 => ['#29a84a', '0 15px 15px 0'],
3 => ['#29a84a', '0 15px 15px 0'],
9 => ['#29a84a', '15px 0 0 15px'],
25 => ['#29a84a', '0 15px 15px 0'],
];
$levelColor = $levelColors[$exam_level] ?? ['#3c4065', '0 15px 15px 0'];
$textAlign = session('demo_exam_lang') == 2 ? 'right' : 'left';
$Direction = session('demo_exam_lang') == 2 ? 'rtl' : 'ltr';
$padding = session('demo_exam_lang') == 2 ? 'padding-right' : 'padding-left';

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

if (session('demo_exam_lang') == 2) {
$nextLabel = 'التالي';
$lastLabel = 'إنهاء الأختبار';
$prevLabel = 'السابق';
} elseif (session('demo_exam_lang') == 11) {
$nextLabel = 'Prochaine';
$lastLabel = 'Terminer l\'examen';
$prevLabel = 'Précédente';
} else {
$nextLabel = 'Next';
$lastLabel = 'Finish Exam';
$prevLabel = 'Previous';
}

@endphp
{{-- @if (session('demo_exam_lang') == 2)
<script>
    var intervalID = setInterval(myCallback, 2000);

            function myCallback() {
                var value = 111;
                $.ajax({
                    url: "{{ route('Demo.DemoTimer') }}",
                    method: "GET",
                    data: {
                        value: value
                    },
                    success: function(data) {
                        if (data) {
                            var finish = "{{ route('Demo.FinishExam') }}"
                            window.location.href = finish;
                        }
                    }
                });
            }

            function eArabic(x) {
                return x.toLocaleString('ar-EG');
            }

            function startTimer(duration, display) {
                var timer = duration,
                    minutes, seconds;
                setInterval(function() {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);
                    minutes = minutes < 10 ? +minutes : minutes;
                    seconds = seconds < 10 ? +seconds : seconds;
                    minutes = eArabic(minutes);
                    seconds = eArabic(seconds);
                    display.textContent = " " + minutes + ":" + seconds;
                    // alert(timer);
                    if (--timer <= 0) {}
                }, 1000);
            }
            window.onload = function() {
                var fiveMinutes = 60 * {{ $counter_timer }};
                display = document.querySelector('#time');
                startTimer(fiveMinutes, display);
            }
</script>
@else --}}
<script>
    var intervalID = setInterval(myCallback, 2000);

            function myCallback() {
                var value = 111;
                $.ajax({
                    url: "{{ route('Demo.DemoTimer') }}",
                    method: "GET",
                    data: {
                        value: value
                    },
                    success: function(data) {
                        if (data) {
                            var finish = "{{ route('Demo.FinishExam') }}"
                            window.location.href = finish;
                        }
                    }
                });
            }

            function startTimer(duration, display) {
                var timer = duration,
                    minutes, seconds;
                setInterval(function() {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);
                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;
                    display.textContent = " " + minutes + ":" + seconds;
                    if (--timer <= 0) {}
                }, 1000);
            }
            window.onload = function() {

                var fiveMinutes = 60 * {{ $counter_timer }};
                display = document.querySelector('#time');
                startTimer(fiveMinutes, display);
            }
</script>
{{-- @endif --}}

<style>
    .q_active {
        background-color: red !important;
    }
</style>

<div class="section">
    <div class="title">
        <h1 class="title-text">
            DEMO EXAM
        </h1>
    </div>
    <div class="container-sec d-flex">
        <div class="col-5 d-flex flex-column mt-4">
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
            <div class="mt-2 text-w d-flex align-items-baseline">
                <h2 class="me-4">
                    Time Remaining <br>
                </h2>
                <div class="d-flex flex-column me-2 align-items-center">
                    <h1>
                        <div class="clock"
                            style="direction: ltr ; text-align: center;color: white; font-size: 25px; font-weight: bold;"
                            id="time">
                        </div>

                    </h1>
                    {{-- <small class="fw-bold" style="color:#1d1a3d">Min</small> --}}
                </div>
                {{-- <div style="align-self:end" class="d-flex flex-column">
                    <h1 style="font-size: 2.2em">
                        21
                    </h1>
                    <small class="fw-bold" style="color:#1d1a3d">Sec</small>
                </div> --}}

            </div>
        </div>

        <div class="question-sec">
            <div class="d-flex flex-column question-inner py-4 px-5">
                <div class="img col-6 mx-auto">
                    <img width="100%" height="auto" src="{{$imageSrc}}" alt="">
                </div>
                <div class="col-12 mt-4">
                    @if(session('demo_exam_lang') == 2)
                    <p style="text-align: right">
                        {{ $question['question'] }}


                    </p>
                    @else
                    <p style="text-align: left">
                        {{ $question['question'] }}
                    </p>
                    @endif
                </div>
                {{-- @if( $question_num == $last_questions && $ununswered_questions_num > 0)
                <form method="POST" id="formId" action="{{ route('Demo.submit') }}">
                    @else --}}
                    <form method="POST" id="formId" action="{{ route('Demo.UpdateExamQuestion') }}">
                        {{-- @endif --}}
                        @CSRF
                        <div id="new_chq"></div>
                        <input type='hidden' name='question_id' value='{{ $question[' id'] }}'>
                        <input type='hidden' name='question_num' value='{{ $question_num }}'>
                        <input type='hidden' name='unanswered_question' value='{{ $ununswered_questions_num }}'>
                        @if(session('demo_exam_lang') == 2)
                        <div dir="rtl" class="col-12 mt-1">
                            <div style="padding-right: 1.5em;" class="form-check mb-2">
                                <input @if($user_question_ans==1) checked="checked" @endif value="1"
                                    style="float: right;margin-right: -1.5em;" class="form-check-input" type="radio"
                                    name="answer" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    {{ $question['ans1'] }}
                                </label>
                            </div>
                            <div style="padding-right: 1.5em;" class="form-check mb-2">
                                <input @if($user_question_ans==2) checked="checked" @endif value="2"
                                    style="float: right;margin-right: -1.5em;" class="form-check-input" type="radio"
                                    name="answer" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    {{ $question['ans2'] }}
                                </label>
                            </div>
                            @if ($question['ans3'] != null || $question['ans3'] != '')
                            <div style="padding-right: 1.5em;" class="form-check mb-2">
                                <input @if($user_question_ans==3) checked="checked" @endif value="3"
                                    style="float: right;margin-right: -1.5em;" class="form-check-input" type="radio"
                                    name="answer" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    {{ $question['ans3'] }}
                                </label>
                            </div>
                            @endif
                            @if ($question['ans4'] != null || $question['ans4'] != '')
                            <div style="padding-right: 1.5em;" class="form-check mb-2">
                                <input @if($user_question_ans==4) checked="checked" @endif value="3"
                                    style="float: right;margin-right: -1.5em;" class="form-check-input" type="radio"
                                    name="answer" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    {{ $question['ans4'] }}
                                </label>
                            </div>
                            @endif
                            @if ($question['ans5'] != null || $question['ans5'] != '')
                            <div style="padding-right: 1.5em;" class="form-check mb-2">
                                <input @if($user_question_ans==5) checked="checked" @endif value="3"
                                    style="float: right;margin-right: -1.5em;" class="form-check-input" type="radio"
                                    name="answer" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    {{ $question['ans5'] }}
                                </label>
                            </div>
                            @endif
                        </div>

                        @else
                        <div class="col-12 mt-1">
                            <div class="form-check mb-2">
                                <input @if($user_question_ans==1) checked="checked" @endif value="1"
                                    class="form-check-input" type="radio" name="answer" id="flexRadioDefault1">
                                <label style="font-size: 0.9em;" class="form-check-label" for="flexRadioDefault1">
                                    {{ $question['ans1'] }}
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input @if($user_question_ans==2) checked="checked" @endif value="2"
                                    class="form-check-input" type="radio" name="answer" id="flexRadioDefault1">
                                <label style="font-size: 0.9em;" class="form-check-label" for="flexRadioDefault1">
                                    {{ $question['ans2'] }}
                                </label>
                            </div>
                            @if ($question['ans3'] != null || $question['ans3'] != '')
                            <div class="form-check mb-2">
                                <input @if($user_question_ans==3) checked="checked" @endif value="3"
                                    class="form-check-input" type="radio" name="answer" id="flexRadioDefault1">
                                <label style="font-size: 0.9em;" class="form-check-label" for="flexRadioDefault1">
                                    {{ $question['ans3'] }}
                                </label>
                            </div>
                            @endif
                            @if ($question['ans4'] != null || $question['ans4'] != '')
                            <div class="form-check mb-2">
                                <input @if($user_question_ans==4) checked="checked" @endif value="4"
                                    class="form-check-input" type="radio" name="answer" id="flexRadioDefault1">
                                <label style="font-size: 0.9em;" class="form-check-label" for="flexRadioDefault1">
                                    {{ $question['ans4'] }}
                                </label>
                            </div>
                            @endif
                            @if ($question['ans5'] != null || $question['ans5'] != '')
                            <div class="form-check mb-2">
                                <input @if($user_question_ans==5) checked="checked" @endif value="5"
                                    class="form-check-input" type="radio" name="answer" id="flexRadioDefault1">
                                <label style="font-size: 0.9em;" class="form-check-label" for="flexRadioDefault1">
                                    {{ $question['ans5'] }}
                                </label>
                            </div>
                            @endif
                        </div>
                        @endif
                        <div class="col-12 mt-4">
                            <div class="d-flex justify-content-between">

                                <div class=""> <span class="fw-bold" style="font-size: 2em"> {{ $question_num + 1
                                        }}</span>
                                    /{{ $num_questions }}</div>

                                <div class="">
                                    @if ($question_num != 0)
                                    {{-- <button type="submit" name="prev" class="btn move-btn per">
                                        {{ $prevLabel }}
                                    </button> --}}
                                    <input type="submit" name="prev" value="{{ $prevLabel }}" class="btn move-btn per">
                                    @endif

                                    @if ($question_num == $last_questions)
                                    {{-- <button type="submit" name="finish" class="btn  move-btn nxt">
                                        {{ $lastLabel }}
                                    </button> --}}
                                    <input type="submit" name="finish" value="{{ $lastLabel }}"
                                        class="btn move-btn nxt">
                                    @endif
                                    @if ($question_num != $last_questions)
                                    {{-- <button type="submit" name="next" class="btn  move-btn nxt">
                                        {{ $nextLabel }}
                                    </button> --}}
                                    <input type="submit" name="next" value="{{ $nextLabel }}" class="btn move-btn nxt">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="d-flex mt-3 justify-content-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input answered" type="radio" disabled>
                            <label class="form-check-label text-b"> Answered Questions</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input unanswered" type="radio" disabled>
                            <label class="form-check-label text-b">Unanswered Questions</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input unvisited" type="radio" disabled>
                            <label class="form-check-label text-b"> Unvisited Questions</label>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap mt-3 ">

                        @php
                        $x = 0;
                        @endphp
                        @for ($i = 0; $i < $num_questions; $i++) @php $question_type=$old_ans[$x]; @endphp <span
                            class="question-num @if($question_type==9) q_left @elseif($question_type) q_asnwered @endif">
                            <a style="padding: 2px 7px" onClick="submitDetailsForm({{ $i + 1 }}) ">
                                @if (session('demo_exam_lang') == 2)
                                {{ $ArTime->Time($i + 1) }}
                                @else
                                {{ $i + 1 }}
                                @endif
                            </a>
                            </span>
                            @php
                            $x++;
                            @endphp
                            @endfor



                            {{-- @for ($i = 1; $i <= 60; $i++) <span class="question-num">{{$i}}</span>
                                @endfor --}}
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




{{-- ######################################################################################################### --}}




@endsection