<?php 

 

namespace App\Http\Controllers; 

 

use Illuminate\Routing\Controller; 

 

class FrontendController extends Controller 

{ 

  public function index() 

  { 

    return view('frontend.welcome'); 

  } 

 

  public function contact() 

  { 

    $kleur = 'groen'; // Set the color to 'groen' 

    return view('frontend.contact', ['kleur' => $kleur]); 

    return view('frontend.contact'); 

  } 

 

  public function about() 

  { 

    $students = [ 

      'student_0' => 12, 

      'student_1' => 16, 

      'student_2' => 18, 

      'student_3' => 15, 

      'student_4' => 21, 

      'student_5' => 20, 

    ]; 

 

    return view('frontend.about', ['students' => $students]); 

  } 

} 