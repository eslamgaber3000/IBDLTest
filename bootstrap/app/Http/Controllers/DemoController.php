<?php

namespace App\Http\Controllers;

use App\Models\DemoExam;
use App\Models\DemoExamQuestion;
use App\Models\DemoQuestion;
use App\Models\ExamSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class DemoController extends Controller
{
    public function Index() : View {
        return view('demo.exams');
    }

    private function getLangForExamId(int $examId): int
    {
        switch ($examId) {
            case 1:
                return 1;
            case 2:
                return 1;
            case 3:
                return 2;
            case 9:
                return 11;
            case 20:
                return 1;
            case 21:
                return 2;
            case 22:
                return 2;
            case 24:
                return 11;
            case 30:
                return 1;
            case 31:
                return 2;
            case 32:
                return 2;
            case 33:
                return 2;
            case 34:
                return 2;
            case 35:
                return 1;
            case 36:
                return 1;
            case 37:
                return 1;
            case 38:
                return 1;
                
            default:
                throw new \InvalidArgumentException("Invalid exam ID: {$examId}");
        }
    }

    public function examLogin(int $examId) : RedirectResponse
    {
        $examLevel = $examId;
        $lang = $this->getLangForExamId($examId);
        $userLogbook = "Demo Exam";
        $examinerId = rand(1000, 10000000);
        $userId = $examinerId;

        session(['demo_exam_id' => $userId]);
        session(['demo_exam_level' => $examLevel]);
        session(['demo_exam_lang' => $lang]);
        session(['demo_exam_logbook' => $userLogbook]);

        return redirect()->route('Demo.ExamUpdateData');
    }

    public function ExamUpdate()
    {
        $ExamSetting = ExamSetting::where('level_id', session('demo_exam_level'))->first();
        $ExaminerData = DemoExam::select('name', 'logBook')->where('id', 1)->first();

        return view('demo.index', compact('ExamSetting', 'ExaminerData'));
    }

    public function Editdata(Request $request)
    {
     
        $examiner_id = rand(1000, 10000000);
        session(['demo_exam_id' => $examiner_id]);
        session(['demo_exam_update_data' => 1]);

        $exam_question = DemoQuestion::where('level', session('demo_exam_level'))->get();
        $questions_string = "";
        $right_answers = "";
        $answers_ids = "";
        foreach ($exam_question as $single_question) {
            $i = 0;
            $questions_string .= $single_question->id;
            $questions_string .= ",";
            $right_answers .= $single_question->right_ans;
            $right_answers .= ",";
            $answers_ids .= 0;
            $answers_ids .= ",";
            $i++;
        }
        $new_question_array = substr($questions_string, 0, -1);
        $new_right_answers = substr($right_answers, 0, -1);
        $new_answer_ids = substr($answers_ids, 0, -1);

        $questions_array = explode(",", $new_question_array);
        $right_answer_array = explode(",", $new_right_answers);
        $answer_ids_array = explode(",", $new_answer_ids);
        session(['demo_questions_array' => $questions_array]);
        session(['demo_right_answer_array' => $right_answer_array]);

        $exam_setting = ExamSetting::where('level_id', session('demo_exam_level'))->first();
        $start_time = Carbon::now()->addHours(2)->timestamp;
        $exam_duration = $exam_setting->exam_time * 60;
        $end_time = $start_time + $exam_duration;
        session(['demo_start_time' => $start_time]);
        session(['demo_end_time' => $end_time]);

        $exam_question_2012 = new DemoExamQuestion();
        $exam_question_2012->exam_id = $examiner_id;
        $exam_question_2012->questions_ids = $new_question_array;
        $exam_question_2012->right_answers_ids = $new_right_answers;
        $exam_question_2012->answers_ids = $new_answer_ids;
        $exam_question_2012->remaining = $exam_duration;
        $exam_question_2012->save();

        $question_number = 1;
        return redirect()->route('Demo.ExamPage', $question_number);
    }

    public function Exampage($question_number)
    {
        $exam_id = session('demo_exam_id');

        $exam_update_data = session('demo_exam_update_data');
        $questions = session('demo_questions_array');
        $exam_level = session('demo_exam_level');

        $question_number = max(1, min($question_number, count($questions)));

        $pointer = $question_number - 1;
        $question_id = $questions[$pointer];
        $question = DemoQuestion::findOrFail($question_id);
        $question_num = $pointer;

        $examiner_data = DemoExam::select('name', 'logBook')->findOrFail(1);
        $exam_setting = ExamSetting::select('exam_time', 'no_of_questions')->where('level_id', $exam_level)->first();
        $user_q_ans = DemoExamQuestion::where('exam_id', $exam_id)->first();

        $old_ans = explode(',', $user_q_ans->answers_ids);
        // user answer
        $user_question_ans = $old_ans[$question_num];
        $exam_duration = $user_q_ans->remaining;
        $exam_delay = $user_q_ans->delay_compensation * 60;

        if ($exam_delay != 0) {
            $end_time = session('demo_end_time') + $exam_delay;
            $user_q_ans->delay_compensation = 0;
            $user_q_ans->save();
        }

        $end_time = session('demo_end_time') + $exam_delay;
        $date_time = Carbon::now()->addHours(2);
        $date_time = $date_time->timestamp;

        session(['demo_end_time' => $end_time]);

        $date_time_end = session('demo_end_time');
        $date_time_start = $date_time;
        $remaining = $date_time_end - $date_time_start;

        if($remaining > 0){
            $user_q_ans->remaining = $remaining;
        } else{
            $user_q_ans->save();
            return redirect()->route('Demo.FinishExam');
        }
        $user_q_ans->save();

        $ununswered_questions = DemoExamQuestion::where('exam_id', $exam_id)->first();

        $ununswered_questions_array = explode(',', $ununswered_questions->answers_ids);

        $count_elements = array_count_values($ununswered_questions_array);

        if (isset($count_elements[9]) && isset($count_elements[0])) {
            $ununswered_questions_num = $count_elements[0]  + $count_elements[9];
        } elseif (isset($count_elements[9])) {
            $ununswered_questions_num =   $count_elements[9];
        } else {
            $ununswered_questions_num = 0;
        }

        return view('demo.demo_exam', compact('question', 'old_ans', 'user_question_ans', 'question_num', 'examiner_data', 'exam_setting', 'remaining', 'exam_level', 'ununswered_questions_num'));
    }

    public function UpdateExamQuestion(Request $request)
    {
       

        $exam_id = session('demo_exam_id');
        $exam_level = session('demo_exam_level');
        $user_q_ans = DemoExamQuestion::where('exam_id', $exam_id)->first();
        $old_ans = explode(',', $user_q_ans->answers_ids);
        if ($request->answer == null) {
            $answer = 9;
        } else {
            $answer = $request->answer;
        }
        $question_num = $request->question_num;
        $new_ans = array($question_num => $answer);
        
        $basket = array_replace($old_ans, $new_ans);

        $new_ans_update = implode(',', $basket);
        $user_q_ans->answers_ids = $new_ans_update;
        $user_q_ans->save();
        if(isset($request->finish) && $request->unanswered_question > 0 ){
            return redirect()->route('Demo.submit');
        }
        if (isset($request->next)) {
            $next_question = $question_num + 2;
        } elseif (isset($request->prev)) {
            $next_question = $question_num;
        } elseif (isset($request->finish)) {
            return redirect()->route('Demo.FinishExam');
        } else {
            $next_question = $request->question_list_clicked;
        }
    
        return redirect()->route('Demo.ExamPage', [$next_question]);
    }

    public function check_timer(Request $request)
    {
        $date_time = Carbon::now()->addHours(2);
        $time_now = $date_time->timestamp;

        $end = session('demo_end_time');
        $timer = $end - $time_now;
        if ($timer  <= 0) {
            $data = "finish_exam";
            return   $data;
        }
    }

    public function FinishExam()
    {
        $exam_id = session('demo_exam_id');
        $exam_level = session('demo_exam_level');
        $examiner_data = DemoExam::select('name', 'logBook')->findOrFail(1);

        $user_q_ans = DemoExamQuestion::where('exam_id', $exam_id)->first();
        $his_answer_array = explode(',', $user_q_ans->answers_ids);

        $diff = array_diff_assoc(session('demo_right_answer_array'), $his_answer_array);

        $wrong_answer_count = count($diff);
        $all_answer_count = count(session('demo_right_answer_array'));
        $right_answer_count = $all_answer_count - $wrong_answer_count;
        $final_score = round($right_answer_count * 100 / $all_answer_count, 2);

        session(['demo_all_answer_count' =>  $all_answer_count]);
        session(['demo_right_answer_count' =>  $right_answer_count]);
        session(['demo_wrong_answer_count' =>  $wrong_answer_count]);

        $all_answer_count = session('demo_all_answer_count');
        $all_right_count = session('demo_right_answer_count');

        $score = round(($all_right_count * 100)  / $all_answer_count, 2);

        // Session::flush();

        $msg =  'your score is ' . $score . '%';

        return view('demo.result', compact( 'all_answer_count','all_right_count','score','examiner_data','exam_level'));
    }


    public function submit()
    {
        $exam_id = session('demo_exam_id');
        $exam_update_data = session('demo_exam_update_data');
        $questions = session('demo_questions_array');
        $exam_level = session('demo_exam_level');

        // $question_number = max(1, min($question_number, count($questions)));

        // $pointer = 59;
        // $question_id = $questions[$pointer];
        // $question = DemoQuestion::findOrFail($question_id);
        // $question_num = $pointer;

        $examiner_data = DemoExam::select('name', 'logBook')->findOrFail(1);
        $exam_setting = ExamSetting::select('exam_time', 'no_of_questions')->where('level_id', $exam_level)->first();
        $user_q_ans = DemoExamQuestion::where('exam_id', $exam_id)->first();

        $old_ans = explode(',', $user_q_ans->answers_ids);
        // user answer

        $user_question_ans = end($old_ans);
        $exam_duration = $user_q_ans->remaining;
        $exam_delay = $user_q_ans->delay_compensation * 60;

        if ($exam_delay != 0) {
            $end_time = session('demo_end_time') + $exam_delay;
            $user_q_ans->delay_compensation = 0;
            $user_q_ans->save();
        }

        $end_time = session('demo_end_time') + $exam_delay;
        $date_time = Carbon::now()->addHours(2);
        $date_time = $date_time->timestamp;

        session(['demo_end_time' => $end_time]);

        $date_time_end = session('demo_end_time');
        $date_time_start = $date_time;
        $remaining = $date_time_end - $date_time_start;

        if($remaining > 0){
            $user_q_ans->remaining = $remaining;
        } else{
            $user_q_ans->save();
            return redirect()->route('Demo.FinishExam');
        }
        $user_q_ans->save();

        $ununswered_questions = DemoExamQuestion::where('exam_id', $exam_id)->first();

        $ununswered_questions_array = explode(',', $ununswered_questions->answers_ids);

        $count_elements = array_count_values($ununswered_questions_array);
        if (isset($count_elements[9]) && isset($count_elements[0])) {
            $ununswered_questions_num = $count_elements[0]  + $count_elements[9];
        } elseif (isset($count_elements[9])) {
            $ununswered_questions_num =   $count_elements[9];
        } else {
            $ununswered_questions_num = $count_elements[0];
        }

        return view('demo.submit', compact( 'old_ans', 'examiner_data', 'exam_setting', 'remaining', 'exam_level', 'ununswered_questions_num'));
   
    }

}

