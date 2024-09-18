<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use App\Models\AssessmentPages;
use App\Models\BoardOfTrustees;
use App\Models\contact;
use App\Models\ContactUs;
use App\Models\Country;
use App\Models\ExecutiveEducation;
use App\Models\pages;
use App\Models\portfolio;
use App\Models\news;
use App\Models\qualification;
use App\Models\review;
use App\Models\testimonial;
use DateTime;
use Illuminate\Http\Request;


class PageController extends Controller
{
    //


    public function index(Request $request,$slug){

        
        $page = pages::where('slug',  $slug )->first();
        $header = $page->header ;
        $icon =  $page->icon ;

        if($slug == 'board_of_trustees'){
            $trustees = BoardOfTrustees::get();
            return view('pages.board_of_trustees',compact(['page','trustees']));
        }
        if($slug == 'news'){
            $news = news::orderBy('date', 'DESC')->paginate(10);
            foreach ($news as $new) {
                $new->content = strip_tags($new->content);
            }
            return view('pages.news',compact(['page','news']));
        }
        if($slug == 'contact_us'){
            $contacts = contact::get();

            return view('pages.'.$slug,compact(['header','icon','contacts']));
        }
        if($slug == 'body_of_knowledge'){
            return view('pages.body_of_knowledge',compact(['header','icon','page']));
        }
        if($slug == 'portfolio'){
            $clients = portfolio::paginate(10);
            return view('pages.portfolio',compact(['page','clients']));
        }
        if($slug == 'user_review'){
            $all_reviews = review::where('approved', 1)->get();
            $reviews = review::where('approved', 1)->with('user')->paginate(10);

            $rates = 0;
            $rating_5 = 0;
            $rating_4 = 0;
            $rating_3 = 0;
            $rating_2 = 0;
            $rating_1 = 0;
            foreach($all_reviews as $review){
                $rates +=  $review->rate ;
                $rating_5 +=  $review->rate == 5 ;
                $rating_4 +=  $review->rate == 4 ;
                $rating_3 +=  $review->rate == 3 ;
                $rating_2 +=  $review->rate == 2 ;
                $rating_1 +=  $review->rate == 1 ;

                $now = new DateTime();
                $ago = new DateTime($review->date);
                $diff = $now->diff($ago);
                $diff->w = floor($diff->d / 7);
                $diff->d -= $diff->w * 7;
                $string = array(
                    'y' => 'year',
                    'm' => 'month',
                    'w' => 'week',
                    'd' => 'day',
                    'h' => 'hour',
                    'i' => 'minute',
                    's' => 'second',
                );
                foreach ($string as $k => &$v) {
                    if ($diff->$k) {
                        $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                    } else {
                        unset($string[$k]);
                    }
                }
                $string = array_slice($string, 0, 1);
                $review->elapsed =    $string ? implode(', ', $string) . ' ago' : 'just now';
            }
            $reviews_count = count($all_reviews) ;
            $all_rate =  ($rates / count($all_reviews)) ;
            $all_rate = round($all_rate,1);
            $star_rating =  ($all_rate / 5) * 100;
            $rating_5 = round($rating_5 /  count($all_reviews) * 100);
            $rating_4 = round($rating_4 /  count($all_reviews) * 100);
            $rating_3 = round($rating_3 /  count($all_reviews) * 100);
            $rating_2 = round($rating_2 /  count($all_reviews) * 100);
            $rating_1 = round($rating_1 /  count($all_reviews) * 100);

            return view('pages.'.$slug,compact(['page','all_rate','star_rating','reviews','reviews_count','rating_5','rating_4','rating_3','rating_2','rating_1']));
        }
        if($slug == 'contact_acc_team'){
            return view('pages.contact_acc_team',compact(['page']));
        }
        if($slug == 'request_customized_training'){
            $all_country = Country::orderBy('short_name','asc')->get();
            return view('pages.request_customized_training',compact(['page','all_country']));
        }

        if ($slug) {
            return view('pages.index',compact(['page']));
          }

    }

    public function assessments($slug){

        $page = AssessmentPages::where('slug',  $slug )->first();
        $testimonial = testimonial::where('page',$slug)->get();

        return view('pages.index2',compact(['page','testimonial']));

    }

    public function qualifications($slug){
        
        $page = qualification::where('slug',  $slug )->first();
        $testimonial = testimonial::where('page',$slug)->get();


        return view('qualifications.index',compact(['page','testimonial']));

    }

    public function executive_education($slug){

        $page = ExecutiveEducation::where('slug',$slug)->first();
        $testimonial = testimonial::where('page',$slug)->get();

        return view('executive_education.index',compact(['page','testimonial']));

    }
    
    public function news(Request $request){

        $searchInput = $request->searchInput;
        $page = pages::where('slug',  'news' )->first();
        $news = news::where('content','LIKE','%'.$searchInput.'%')->orWhere('title','LIKE',$searchInput.'%')->orderBy('date', 'DESC')->paginate(10);
        foreach ($news as $new) {
                $new->content = strip_tags($new->content);
            }
            
         return view('pages.news',compact(['page','news']));

    }


}

