<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model {
    protected $fillable = ['name','email','subject','message','read_at','replied_at','ip_address'];
    protected $casts = ['read_at' => 'datetime', 'replied_at' => 'datetime'];
}
