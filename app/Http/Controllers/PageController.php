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
        $users = $this->user->where('id', '!=', Auth::id())->get();
        
        (!$this->user->find($request->id)) ? $idRequest = null :  $idRequest = $request->id;

        $messages = $this->message->getMessages($this->message, Auth::user()->id, $request->id);

        return view('dashboard', compact('users', 'messages', 'idRequest'));
    }

    
    public function store(Request $request)
    {
        $this->message->create($request->all());

        return redirect("chat?id={$request->to}");
    }

    public function destroy($id)
    {
        //
    }
}
