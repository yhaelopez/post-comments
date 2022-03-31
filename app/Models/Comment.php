<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'parent_id',
        'level',
        'username',
        'content',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];


    public function replies() : HasMany
    {
        return $this->hasMany(Comment::class, 'parent_id')->orderByDesc('id');
    }

}
