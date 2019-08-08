<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "ea_articles";

    protected $fillable = [
    	'sys_ownerID', 'article_ID', 'article_number', 'article_title', 'article_info', 'article_responsability',
    ];

    protected $primaryKey = 'article_ID';

    public $timestamps = false;
}
