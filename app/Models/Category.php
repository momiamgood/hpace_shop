<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function subcategory()
    {
        return $this->hasMany(Category::class, 'id', 'parent_id');
    }

}
