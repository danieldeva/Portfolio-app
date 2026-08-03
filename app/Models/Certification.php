<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model {
    use HasFactory;

    protected $fillable = ['name','issuer','issuer_logo','issued_at','expires_at','credential_url','certificate_image','verified','sort_order'];
    protected $casts = ['verified' => 'boolean', 'issued_at' => 'date', 'expires_at' => 'date'];
}

