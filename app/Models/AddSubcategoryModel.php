<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddSubcategoryModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'category_id',
        'categoryname',
        'subcategoryname',
        'subcategorydescriptions'
    ];

    protected $table='subcategories';
}