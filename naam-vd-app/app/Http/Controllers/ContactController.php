<?php 
namespace App\Http\Controllers; 
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; 
use Illuminate\Foundation\Validation\ValidatesRequests; 
use Illuminate\Routing\Controller as ContactController; 

class Controller extends ContactController 

{ 

use AuthorizesRequests, ValidatesRequests; 

} 