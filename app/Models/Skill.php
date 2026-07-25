<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model {
    protected $fillable = ['name','category','level','confidence','years','icon','color','sort_order','featured'];
    protected $casts = ['featured' => 'boolean'];
    public function scopeByCategory($query, $category) {
        return $query->where('category', $category)->orderBy('sort_order');
    }
}
