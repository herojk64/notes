<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'user_id',
    ];

    public function scopeUser($query){
        $query->where('user_id',auth()->user()->id);
    }

    public function scopeFilter($query,array $filter){

        $query->when($filter['search'] ?? false,
            fn($query,$search)=>
                $query
                    ->where('slug','like',"%".$search."%")
                    ->orWhere('title','like','%'.$search.'%')
        );

    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
