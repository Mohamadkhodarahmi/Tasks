<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create(array $validated)
 */
class Post extends Model
{
    use softdeletes;
//    use HasFactory;
    protected $table = 'posts';
    protected $fillable= [
        'user_id',
        'title',
        'body',
        'image'
    ];
    private  $id ;

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function path(): string
    {
        return "/posts/{$this->id}";
    }
}
