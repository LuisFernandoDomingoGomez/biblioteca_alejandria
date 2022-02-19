<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 *
 * @property $id
 * @property $category_id
 * @property $editorial
 * @property $name
 * @property $author
 * @property $description
 * @property $image
 * @property $pdf
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Book extends Model
{
    
    static $rules = [
		'category_id' => 'required',
		'editorial' => 'required',
		'name' => 'required',
		'author' => 'required',
		'description' => 'required',
		'image' => 'required',
		'pdf' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id','editorial','name','author','description','image','pdf'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
    

}
