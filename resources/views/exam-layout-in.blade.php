<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta name="description" content="IBDL | International Business Driving License">
    <meta name="keyword" content="IBDL, International Business, Driving License">

    <link rel="image_src" href="{{ asset('site/images/fav.png') }}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"
        integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
        integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--
    <link href="../../site/css/style.css" rel="stylesheet"> --}}

    <!-- Mobile Specific Metas -->
    <!-- Title -->
    <title>Demo Exam</title>
    <!-- favicon icon -->
    <!-- CSS Stylesheet -->
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->

    <style>
        .section {
            background-color: #1d1a3d;
            min-height: 130vh;
            height: auto;
        }

        .title {
            padding: 100px 0 0 100px;

        }

        .title-text {
            color: white;
            font-weight: 700;
            font-size: 4.5em;
        }

        .container-sec {
            background-color: #e30618;
            height: 300px;
            width: 100%;
            margin: auto;
            margin-top: 30px;
            padding: 0 100px;
        }

        .text-w {
            color: white;
        }

        .text-b {
            color: black;
            font-size: 10px;
        }

        .question-sec {
            background-color: white;
            width: 40%;
            height: fit-content;
            min-height: 35em;
            padding: 5px 0;
            position: absolute;
            top: 6%;
            right: 13%;
            border-radius: 10px;
        }

        .footer {
            background-color: #e30618;
            font-size: 13px;
            position: fixed;
            bottom: 2%;
            width: 100%
        }

        .question-inner {
            width: 100%;
            height: 100%;
        }

        .form-check-input[type=radio] {
            border-radius: 50%;
            border: 3px solid #e30618;
        }

        .form-check-input {
            /* background-color: #e30618; */
            border: 1px solid #e30618 !important;
        }

        .form-check-input:focus {
            border: 1px solid #e30618 !important;
            box-shadow: 0 0 0 0.25rem #e3061838;
        }

        .form-check-input:checked {
            background-color: #e30618;
            border-color: #e30618;
        }

        .move-btn {
            background-color: #e30618;
            color: white;
            font-weight: 600;
        }

        .move-btn:hover {
            background-color: #1d1a3d;
            color: white
        }

        .move-btn:active {
            background-color: #1d1a3d !important;
            color: white !important;
        }

        .move-btn:focus {
            background-color: #1d1a3d;
            color: white
        }

        .per {
            padding: 7px 0px;
            width: 100px;
        }

        .nxt {
            padding: 7px 0px;
            width: 100px;
        }

        .answered {
            background-color: green
        }

        .unanswered {
            background-color: red;
        }

        .unvisited {
            background-color: lightgray;
        }

        .form-check-input:disabled {
            opacity: 1;
            border: none !important;
        }

        .question-num {
            width: 27px;
            text-align: center;
            height: 25px;
            border-radius: 50%;
            background-color: lightgray;
            margin: 2px 3px;
            font-size: 12px;
            font-weight: 600;
            padding: 4px 0 0 0;
            cursor: pointer;
        }

        .q_left {
            background-color: red !important
        }

        .q_asnwered {
            background-color: green !important
        }
    </style>
    <script language="javascript" type="text/javascript">
        function submitDetailsForm(i) {


            //alert(i);


            var new_input = "<input type='hidden' name='question_list_clicked' value='" + i + "' >";
            $('#new_chq').append(new_input);
            //alert(new_input);
            $("#formId").submit();


            // window.location.assign("http://127.0.0.1:8000/exam/"+i+" ");

        }
    </script>

</head>

<body>
    @yield('exam_in_content')

    {{-- <script type="text/javascript" src="{{ asset('exam/js/jquery-1.12.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('exam/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('exam/js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('exam/js/jquery.form-validator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('exam/js/placeholder.js') }}"></script>
    <script type="text/javascript" src="{{ asset('exam/js/jquery.countdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('exam/js/countdown-script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('exam/js/coustem.js') }}"></script> --}}
</body>

</html>