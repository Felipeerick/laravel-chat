<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Messages extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'content',
        'from',
        'to'
    ];

    public function filterAuthUser($model){
       return $model->where('id', '!=', Auth::id())->get();
    }

    public function getMessages($model,$userFrom, $userTo = null){

        return $model->where(
            function ($query) use($userFrom, $userTo){
                $query->where([
                    'from' => $userFrom,
                    'to' => $userTo,
                ]);
            }
        )->orWhere(
            function ($query) use($userFrom, $userTo){
                $query->where([
                    'from' => $userTo,
                    'to' => $userFrom,
                ]);
            }
        )->orderBy('created_at', 'ASC')->get();
    }

    public function getUsersAndMessages($user, $message, $userFrom, $userTo = null){

        $users = static::filterAuthUser($user);

        $messages = static::getMessages($message, $userFrom, $userTo = null);

        return view('dashboard', compact('users', 'messages'));
    }
}
