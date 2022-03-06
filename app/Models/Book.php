<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 *
 * @property $id
 * @property $category_id
 * @property $editorial_id
 * @property $name
 * @property $author_id
 * @property $description
 * @property $image
 * @property $pdf
 * @property $created_at
 * @property $updated_at
 *
 * @property Author $author
 * @property Category $category
 * @property Editorial $editorial
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Book extends Model
{
    
    static $rules = [
		'category_id' => 'required',
		'editorial_id' => 'required',
		'name' => 'required',
		'author_id' => 'required',
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
    protected $fillable = ['category_id','editorial_id','name','author_id','description','image','pdf'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function author()
    {
        return $this->hasOne('App\Models\Author', 'id', 'author_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function editorial()
    {
        return $this->hasOne('App\Models\Editorial', 'id', 'editorial_id');
    }
    

}
