<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model {
    protected $fillable = ['name','title','company','avatar','company_logo','rating','body','featured','sort_order'];
    protected $casts = ['featured' => 'boolean'];
}
