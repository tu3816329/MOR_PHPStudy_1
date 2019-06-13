<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsSubCategory extends Model
{
    public $table = "news_sub_category";
    protected $fillable = ['name','href'];
    public $timestamps = false;
}
