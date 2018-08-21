<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    const TABLE = 'comments';

    const PROP_ID        = 'id';
    const PROP_PARENT_ID = 'parent_id';
    const TEXT           = 'text';
    const CREATED_AT     = 'created_at';
    const UPDATED_AT     = 'updated_at';
    const DELETED_AT     = 'deleted_at';

    protected $table    = self::TABLE;
    protected $dates    = ['deleted_at'];
    protected $fillable = [
        self::PROP_PARENT_ID,
        self::TEXT
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
