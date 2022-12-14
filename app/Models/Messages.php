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
        'to',
        
    ];
    
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

    public function users(){
        return $this->belongsTo(User::class, 'from', 'id');
    }

    public function getLastMessage()
    {
       $value = Messages::all('content')->last();

       return $value['content'];
    }
}
