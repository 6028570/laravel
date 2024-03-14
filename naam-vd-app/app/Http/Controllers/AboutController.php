<?php 
namespace App\Http\Controllers; 
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; 
use Illuminate\Foundation\Validation\ValidatesRequests; 
use Illuminate\Routing\Controller as AboutContoller; 

class Controller extends AboutContoller 

{ public function about() 

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