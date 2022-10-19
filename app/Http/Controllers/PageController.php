<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{   
    public function __construct(User $user, Messages $message)
    {
        $this->user = $user;
        $this->message = $message;
    }

    public function index(Request $request)
    {
       return $this->message->getUsersAndMessages($this->user, $this->message, Auth::user()->id, $request->id = null);
    }

    
    public function store(Request $request)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
