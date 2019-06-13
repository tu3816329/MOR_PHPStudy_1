<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    public $table = "news_category";
    protected $fillable = ['name','href'];
    public $timestamps = false;
}
