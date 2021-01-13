<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'context',
        'image',
        'status',
        'date',
        'featured',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'date' => 'date',
        'featured' => 'boolean',
        
    ];


    public function tags()
    {
        return $this->belongsToMany(\App\Models\Tag::class);
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }
}
