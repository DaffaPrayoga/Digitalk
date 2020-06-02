<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = "thread";
    protected $primaryKey = 'id';
    protected $fillable = ['thread_key', 'created_by', 'brand_id', 'gadget_id', 'title', 'tags', 'thread_type', 'article', 'image', 'video_embed_link', 'up_vote', 'down_vote'];
    public $timestamps = true;

    public function creator()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brand_id', 'id');
    }

    public function gadget()
    {
        return $this->belongsTo('App\Gadget', 'gadget_id', 'id');
    }

    public function getVoteAttribute()
    {
        $vote = $this->up_vote - $this->down_vote;
        return $vote;
    }
}
