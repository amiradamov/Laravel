<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use softDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];
    // protected $table = 'posts';
    // protected $primarykey = 'post_id';
    protected $fillable = [
        // 'user_id',
        'title',
        'body'
    ];
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function photos() {
        return $this->morphMany('App\Models\Photo', 'imageable');
    }

    public function tags() {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
