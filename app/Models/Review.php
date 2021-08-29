<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'img',
        'user_id'
        
    ];


    public function preview($sample){
        $sample= strip_tags($sample);
        $sample=substr($sample, 0, 50);
        $sample=$sample."...";

        return $sample;
    }

    public function getPreview(){
        return $this->preview($this->description);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
