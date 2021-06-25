<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image_path',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.

        return [
          'slug' => [
              'source' => 'title'
          ]
        ];
    }

}
