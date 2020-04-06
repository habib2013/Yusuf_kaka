<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Auth;       
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
                public function __construct(){
                        return $this->middleware('auth');
                }

        public function user($username){

        }

        public function settings($username){

        }

        public function update(User $user){
        }
}
