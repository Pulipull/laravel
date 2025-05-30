<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'body'];

    protected $with = ['author', 'category'];
     public function author(): BelongsTo
     {
        return $this->belongsTo(User::class); 
     }
     public function category(): BelongsTo
     {
         return $this->belongsTo(Category::class); 
     }
}
