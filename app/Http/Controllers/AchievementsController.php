<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AchievementsController extends Controller
{    
    function index() {
      $user = auth()->user();
      return $user->achievements;
    }
}
