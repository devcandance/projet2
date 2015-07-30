<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'content',
        // 'tag_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function ComPub()
    {
        $comments = Comment::whereRaw('status = ? AND post_id = ?', ['publish', (int)$this->id])->get();
        return $comments;
    }

    public function nbComPub()
    {
        return $this->ComPub()->count();
    }

    /**
     * public function scopePublished($query, $id = null)
    {
        if (is_null($id))
            return $query->where('status', '=', 'publish');

        return $query->whereRaw('status=? AND id=?', ['publish', (int)$id]);
    }*/
}