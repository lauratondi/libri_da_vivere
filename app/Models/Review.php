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


    public function preview($sample, $length){
        $sample= strip_tags($sample);
        $sample=substr($sample, 0, $length);
        $sample=$sample."...";

        return $sample;
    }

    public function getPreview(){
        return $this->preview($this->description, 80);
    }

    public function getTitle(){
        return $this-> preview($this->title, 18);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
