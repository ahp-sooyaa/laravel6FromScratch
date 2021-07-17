<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //$fillable need to add column name in the array ['title', 'excerpt', 'body'] $guarded doesn't need to express the column name
    protected $guarded = [];

    public function path()
    {
        return route('articles.show', $this);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimeStamps();
    }
}
