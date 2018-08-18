<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    const TABLE = 'comments';

    const PROP_ID = 'id';
    const PROP_PARENT = 'id_parent';

    protected $table = self::TABLE;
    protected $fillable = [
        self::PROP_PARENT,
        'comment'

    ];

    public function children()
    {
        return $this->hasMany(Comment::class, Comment::PROP_ID, self::PROP_PARENT);
    }
}
