<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Models\Exam_part;
use Monolog\Handler\IFTTTHandler;

class ExamController extends Controller
{
    //


    public function index()
    {
        $logbook = request()->Logbook;
        // $certif = Exam::where('logBook',  $logbook )->first();
        $certif = Exam::where('logbook', $logbook)->orderBy('id', 'desc')->first();
        $one_exam = Exam_part::where('logbook', $logbook)->orderBy('id', 'desc')->first();
   
      
        $certName = '';
        $logo ='';
        if ($certif !== NULL && $one_exam==Null ) {
           
      

            if ($certif->type == 1) {
                if ($certif->level == 1 || $certif->level == 3 || $certif->level == 9) {
                    $img = Image::make(public_path('images/Certificate-no names-01.jpg'));
                    $logo = Image::make(public_path('images/Essential-01.png'));
                    
                    $certName = 'IBDL Essential';
                } elseif ($certif->level == 2 || $certif->level == 25) {
                    $img = Image::make(public_path('images/Certificate-no names-01.jpg'));
                    $certName = 'IBDL Professional';
                    $logo = Image::make(public_path('images/Professional-01.png'));
                } elseif ($certif->level == 20) {
                    $img = Image::make(public_path('images/Certificate-no names-01.jpg'));
                    $logo = Image::make(public_path('images/Master-01.png'));
                    $certName = 'IBDL Master';
                }


                $length = strlen($certif->name);
                // dd($length);
                
            if($length<= 16){
                $img->text(strtoupper($certif->name), 1400, 885, function ($font) {
                    $font->file(public_path('fonts/verdana.ttf'));
                    $font->size(80);
                    $font->color('#1d1a3d');
                  
                });
            }
            elseif($length <= 20 && $length > 15){
                $img->text(strtoupper($certif->name), 1250, 885, function ($font) {
                    $font->file(public_path('fonts/verdana.ttf'));
                    $font->size(80);
                    $font->color('#1d1a3d');
                });
            }
            elseif($length <= 25 && $length > 20){
                $img->text(strtoupper($certif->name), 1100, 885, function ($font) {
                    $font->file(public_path('fonts/verdana.ttf'));
                    $font->size(80);
                    $font->color('#1d1a3d');
                });
            }
            elseif($length <= 30 && $length > 25){
                $img->text(strtoupper($certif->name), 1000, 885, function ($font) {
                    $font->file(public_path('fonts/verdana.ttf'));
                    $font->size(80);
                    $font->color('#1d1a3d');
                });
            }
           else{
            $img->text(strtoupper($certif->name), 900, 885, function ($font) {
                $font->file(public_path('fonts/verdana.ttf'));
                $font->size(80);
                $font->color('#1d1a3d');
            });
           };
            
                $img->text($certName, 1755, 1640, function ($font) {
                    $font->file(public_path('fonts/CaviarDreams_Bold.ttf'));
                    $font->size(50);
                    $font->color('#1d1a3d');

                    $font->align('center'); 
                    
                });

                
        $logo->resize(650, null, function ($constraint) {
            $constraint->aspectRatio();
        });
            $img->insert($logo, 'top-left', 1430, 1140);

                $date = \DateTime::createFromFormat('Y-m-d', $certif->date);
        if ($date instanceof \DateTime) {
            $formattedDate = $date->format('M d, Y');
        
            $img->text($formattedDate, 920, 2050, function ($font) {
                $font->file(public_path('fonts/CaviarDreams_Bold.ttf'));
                $font->size(40);
                $font->color('#1d1a3d');
            });
        }
    

                $img->text($certif->logBook,370, 2050, function ($font) {
                    $font->file(public_path('fonts/CaviarDreams_Bold.ttf'));
                    $font->size(40);
                    $font->color('#1d1a3d');
                });
            } else {
                if ($certif->level == 1 || $certif->level == 3 || $certif->level == 9) {
                    $img = Image::make(public_path('images/Certificate-no names-01.jpg'));
                } elseif ($certif->level == 2 || $certif->level == 25) {

                    $img = Image::make(public_path('images/Certificate-no names-01.jpg'));
                } elseif ($certif->level == 20) {

                    $img = Image::make(public_path('images/Certificate-no names-01.jpg'));
                }

               
                    $img->text(strtoupper($certif->name), 985, 885, function ($font) {
                        $font->file(public_path('fonts/verdana.ttf'));
                        $font->size(70);
                        $font->color('#1d1a3d');
                        
                    });

                    $date = \DateTime::createFromFormat('Y-m-d', $certif->date);
                    if ($date instanceof \DateTime) {
                        $formattedDate = $date->format('M d, Y');
                    
                        $img->text($formattedDate, 920, 2050, function ($font) {
                            $font->file(public_path('fonts/CaviarDreams_Bold.ttf'));
                            $font->size(40);
                            $font->color('#1d1a3d');
                        });
                    }
                $img->text($certif->logBook, 360, 2050, function ($font) {
                    $font->file(public_path('fonts/CaviarDreams_Bold.ttf'));
                    $font->size(40);
                    $font->color('#1d1a3d');
                });
            }

            $img->save(public_path('storage/cert/' . $certif->logBook . '.jpg'));

        if($certif->level == 1){
            $chapters =[
                'Entrepreneurship and Starting a Small Business' => $certif->ruselt_chapter1,
                'Management: Functions and Styles' => $certif->ruselt_chapter2,
                'Leadership and Motivation'=> $certif->ruselt_chapter3,
                'Human Resources' => $certif->ruselt_chapter4,
                'Marketing: Product and Price' => $certif->ruselt_chapter5,
                'Marketing: Place and Promotion' => $certif->ruselt_chapter6,
                'Understanding Financial Information and Accounting' => $certif->ruselt_chapter7,
                'Business in Global Markets' => $certif->ruselt_chapter8,
                'Demonstrating Ethical Behavior and Social Responsibility' => $certif->ruselt_chapter9,
                'Information technology in Business' => $certif->ruselt_chapter10,
                ];

        }else if ($certif->level == 2){
                $chapters =[
                'Managing' => $certif->ruselt_chapter1,
                'The External Environment and Organizational Culture' => $certif->ruselt_chapter2,
                'Managerial Decision Making'=> $certif->ruselt_chapter3,
                'Planning and Strategic Management' => $certif->ruselt_chapter4,
                'Ethics and Corporate Responsibility' => $certif->ruselt_chapter5,
                'International Management' => $certif->ruselt_chapter6,
                'Organization Structure' => $certif->ruselt_chapter7,
                'Organizational Agility' => $certif->ruselt_chapter8,
                'Human Resources Management' => $certif->ruselt_chapter9,
                'Managing the Diverse Workforce' => $certif->ruselt_chapter10,
                'Teamwork' => $certif->ruselt_chapter11,
                'Communicating' => $certif->ruselt_chapter12,
                'Managerial Control' => $certif->ruselt_chapter13,
                'Managing Technology and Innovation' => $certif->ruselt_chapter14,
                'Creating and Managing Change' => $certif->ruselt_chapter15];

            }else if ($certif->level == 3){
                $chapters =[
                    'ريادة الاعمال و البدء في مشروع تجاري صغير' => $certif->ruselt_chapter1,
                    'الادارة وظائف و أساليب' => $certif->ruselt_chapter2,
                    'القيادة و التحفيز' => $certif->ruselt_chapter3,
                    'ادارة الموارد البشرية' => $certif->ruselt_chapter4,
                    'التسويق المنتج و التسعير' => $certif->ruselt_chapter5,
                    'التسويق المكان و الترويج' => $certif->ruselt_chapter6,
                    'فهم المعلومات المحاسبية' => $certif->ruselt_chapter7,
                    'الاعمال التجارية في الاسواق العالمية' => $certif->ruselt_chapter8,
                    'اظهار سلوك اخلاقي و مسؤولية اجتماعية' => $certif->ruselt_chapter9,
                    ' تكنولوجيا المعلومات في الاعمال التجارية' => $certif->ruselt_chapter10
                ];

        }else if ($certif->level == 9){
            $chapters =[
                'Entreprendre et Commencer un Projet Commercial' => $certif->ruselt_chapter1,
                'Le management : fonctions et styles' => $certif->ruselt_chapter2,
                'Le leadership et la motivation'=> $certif->ruselt_chapter3,
                'La gestion des ressources humaines' => $certif->ruselt_chapter4,
                'Le marketing:Produits et prix' => $certif->ruselt_chapter5,
                'Le marketing:Place et promotion' => $certif->ruselt_chapter6,
                'Comprendre les informations financières et la comptabilité' => $certif->ruselt_chapter7,
                'Les affaires dans les marchés internationaux' => $certif->ruselt_chapter8,
                'L’éthique et la responsabilité sociale' => $certif->ruselt_chapter9,
                'Les technologies de l’information dans les affaires commerciales' => $certif->ruselt_chapter10,
                ];

        }else if ($certif->level == 25){
            $chapters =[
                'الإدارة'=> $certif->ruselt_chapter1,
                 'الإدارة الدولية'=> $certif->ruselt_chapter2,
                'التخطيط والإدارة الاستراتيجية'=> $certif->ruselt_chapter3,
                 'صنع القرار الادارى	'=> $certif->ruselt_chapter4,
                 'الرقابة الإدارية'=> $certif->ruselt_chapter5,
                 'العمل الجماعي'=> $certif->ruselt_chapter6,
                 'الاتصال'=> $certif->ruselt_chapter7,
                 'إدارة الموارد البشرية'=> $certif->ruselt_chapter8,
                 'الهيكل التنظيمي'=> $certif->ruselt_chapter9,
                 'الرشاقة التنظيمية'=> $certif->ruselt_chapter10,
                 'إدارة القوى العاملة المتنوعة'=> $certif->ruselt_chapter11,
                 'البيئة الخارجية والثقافة المؤسسية'=> $certif->ruselt_chapter12,
                 'الأخلاقية ومسئولية الشركة'=> $certif->ruselt_chapter13,
                 'إدارة التكنولوجيا والابتكار'=> $certif->ruselt_chapter14,
                 'خلق التغيرات وإدارته'=> $certif->ruselt_chapter15];

        }else if ($certif->level == 20){
            $chapters =[
                'What is strategy and why is it important' => $certif->ruselt_chapter1,
                'Charting a Company\'s Direction Vision and Mission, Objectives, and Strategy' => $certif->ruselt_chapter2,
                'Evaluating a Company\'s Resources, Capabilities, and Competitiveness'=> $certif->ruselt_chapter3,
                'The Five Generic Competitive Strategies Which One to Employ' => $certif->ruselt_chapter4,
                'Strengthening a Company\'s Competitive Position' => $certif->ruselt_chapter5,
                'Strategies for Competing in International Markets' => $certif->ruselt_chapter6,
                'Corporate Strategy Diversification and the Multi business Company' => $certif->ruselt_chapter7,
                'Building an Organization Capable of Good Strategy Execution' => $certif->ruselt_chapter8,
                'Leadership' => $certif->ruselt_chapter9
            ];
        }

        return view('certifications/index', compact('certif', 'img','chapters','certName'));
        }
    
 

    else if($certif == NULL && $one_exam !==Null ){
        $highestScores = Exam_part::where('logbook', $logbook)
        ->groupBy('part')  
        ->select('part', \DB::raw('MAX(score) as highest_score'), \DB::raw('MAX(date) as highest_date'))  
          ->get();
        
      
    
        
        $titles = [
            '1' => 'Operations Management',
            '2' => 'Supply Chain Management',
            '3' => 'Project Management',
            '4' => 'Quality Management'
        ];
        if ($one_exam == NULL) {
               
            return view('pages/404');
        } 
               elseif ($one_exam->logbook >= "IBDLCIE2410008" && $one_exam->logbook <= "IBDLCIE2410028"  &&   $one_exam->logbook != "IBDLCIE2410022"   ) {
                     $img = Image::make(public_path('images/old_cie_template.JPG'));
               
                 $length = strlen($one_exam->name);
                    //  dd($length);
                 if($length<= 16){
                    $img->text(strtoupper($one_exam->name), 420, 317, function ($font) {
                        $font->file(public_path('fonts/verdana.ttf'));
                        $font->size(45);
                        $font->color('#1d1a3d');
                      
                    });
                }
                elseif($length <= 18 && $length > 16){
                    $img->text(strtoupper($one_exam->name), 390, 317, function ($font) {
                        $font->file(public_path('fonts/verdana.ttf'));
                        $font->size(50);
                        $font->color('#1d1a3d');
                    });
                }
                elseif($length <= 21 && $length > 18){
                    $img->text(strtoupper($one_exam->name), 360, 317, function ($font) {
                        $font->file(public_path('fonts/verdana.ttf'));
                        $font->size(45);
                        $font->color('#1d1a3d');
                    });
                }
                elseif($length <= 23 && $length > 21){
                    $img->text(strtoupper($one_exam->name), 320, 317, function ($font) {
                        $font->file(public_path('fonts/verdana.ttf'));
                        $font->size(45);
                        $font->color('#1d1a3d');
                    });
                }
                elseif($length <= 26 && $length > 23){
                    $img->text(strtoupper($one_exam->name), 280, 317, function ($font) {
                        $font->file(public_path('fonts/verdana.ttf'));
                        $font->size(45);
                        $font->color('#1d1a3d');
                    });
                }

                elseif($length <= 29 && $length > 26){
                    $img->text(strtoupper($one_exam->name), 240, 317, function ($font) {
                        $font->file(public_path('fonts/verdana.ttf'));
                        $font->size(40);
                        $font->color('#1d1a3d');
                    });
                }
                elseif($length <= 32 && $length > 29){
                    $img->text(strtoupper($one_exam->name), 230, 317, function ($font) {
                        $font->file(public_path('fonts/verdana.ttf'));
                        $font->size(40);
                        $font->color('#1d1a3d');
                    });
                }
                elseif($length <= 35 && $length > 32){
                    $img->text(strtoupper($one_exam->name), 190, 317, function ($font) {
                        $font->file(public_path('fonts/verdana.ttf'));
                        $font->size(40);
                        $font->color('#1d1a3d');
                    });
                }
               else{
                $img->text(strtoupper($one_exam->name), 150, 317, function ($font) {
                    $font->file(public_path('fonts/verdana.ttf'));
                    $font->size(40);
                    $font->color('#1d1a3d');
                });
               };
                $date = \DateTime::createFromFormat('Y-m-d', $one_exam->date);
                if ($date instanceof \DateTime) {
                    $formattedDate = $date->format('M d, Y');
                
                    $img->text($formattedDate, 310, 450, function ($font) {
                        $font->file(public_path('fonts/CaviarDreams_Bold.ttf'));
                        $font->size(15);
                        $font->color('#1d1a3d');
                    });
                }
            
                
          
        
        
                $img->text($one_exam->logbook, 835, 450, function ($font) {
                    $font->file(public_path('fonts/CaviarDreams_Bold.ttf'));
                    $font->size(15);
                    $font->color('#1d1a3d');
                });
             
               
            $img->save(public_path('storage/cert/' . $one_exam->logbook . '.jpg'));
            return view('certifications/examcie', compact('img','one_exam','highestScores', 'titles')); 
        }
      
        else {
    
            $img = Image::make(public_path('images/Certificate-no names-01.jpg'));
            
            // $img->text(strtoupper($one_exam->name), 985, 885, function ($font) {
            //     $font->file(public_path('fonts/verdana.ttf'));
            //     $font->size(70);
            //     $font->color('#1d1a3d');
                
            // });
            $length = strlen($one_exam->name);
        //   dd($length);
            if($length<= 16){
                $img->text(strtoupper($one_exam->name), 1400, 885, function ($font) {
                    $font->file(public_path('fonts/verdana.ttf'));
                    $font->size(80);
                    $font->color('#1d1a3d');
                  
                });
            }
            elseif($length <= 20 && $length > 15){
                $img->text(strtoupper($one_exam->name), 1250, 885, function ($font) {
                    $font->file(public_path('fonts/verdana.ttf'));
                    $font->size(80);
                    $font->color('#1d1a3d');
                });
            }
            elseif($length <= 25 && $length > 20){
                $img->text(strtoupper($one_exam->name), 1100, 885, function ($font) {
                    $font->file(public_path('fonts/verdana.ttf'));
                    $font->size(80);
                    $font->color('#1d1a3d');
                });
            }
            elseif($length <= 30 && $length > 25){
                $img->text(strtoupper($one_exam->name), 1000, 885, function ($font) {
                    $font->file(public_path('fonts/verdana.ttf'));
                    $font->size(80);
                    $font->color('#1d1a3d');
                });
            }
           else{
            $img->text(strtoupper($one_exam->name), 900, 885, function ($font) {
                $font->file(public_path('fonts/verdana.ttf'));
                $font->size(80);
                $font->color('#1d1a3d');
            });
           };
            $date = \DateTime::createFromFormat('Y-m-d', $one_exam->date);
            if ($date instanceof \DateTime) {
                $formattedDate = $date->format('M d, Y');
            
                $img->text($formattedDate, 920, 2050, function ($font) {
                    $font->file(public_path('fonts/CaviarDreams_Bold.ttf'));
                    $font->size(40);
                    $font->color('#1d1a3d');
                });
            }
        
            
            $title = "Certified Industrial Engineering";
            $img->text($title, 1755, 1640, function ($font) {
                $font->file(public_path('fonts/CaviarDreams_Bold.ttf'));
                $font->size(50);
                $font->color('#1d1a3d');
                $font->align('center'); 
                
            });
   
    
            $img->text($one_exam->logbook, 360, 2050, function ($font) {
                $font->file(public_path('fonts/CaviarDreams_Bold.ttf'));
                $font->size(40);
                $font->color('#1d1a3d');
            });
         
            $logo = Image::make(public_path('images/cie/CIE.png'));
            $logo->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
            });
    $img->insert($logo, 'top-left', 1530, 1120);
        };
        $img->save(public_path('storage/cert/' . $one_exam->logbook . '.jpg'));
        return view('certifications/examcie', compact('img','one_exam','highestScores', 'titles')); 
    }

    else if ($certif == NULL && $one_exam == NULL) {
        return view('pages/404');
    }}
}
