<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model {
    use HasFactory;

    protected $fillable = ['name','title','company','avatar','company_logo','rating','body','featured','sort_order'];
    protected $casts = ['featured' => 'boolean'];
}

