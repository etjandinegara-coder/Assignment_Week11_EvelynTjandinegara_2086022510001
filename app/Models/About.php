<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    /** @use HasFactory<\Database\Factories\AboutFactory> */
    use HasFactory;

    protected $table = 'about';

    protected $fillable = ['nama', 'judul', 'deskripsi', 'skills'];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
