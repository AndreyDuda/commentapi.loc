<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    const TABLE = 'comments';

    const PROP_ID = 'id';
    const PROP_PARENT_ID = 'id_parent';

    protected $table = self::TABLE;
    protected $fillable = [
        self::PROP_PARENT_ID,
        'comment'

    ];

    public function children()
    {
        return $this->hasMany(Comment::class,  self::PROP_PARENT_ID);
    }

    public function parent()
    {
        return $this->belongsTo(Comment::class, self::PROP_ID);
    }


}
