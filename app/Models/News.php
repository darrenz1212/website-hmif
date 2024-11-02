<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';

    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    protected $fillable = [
        'judul',
        'author',
        'artikel',
        'img_path',
        'slug',
    ];

    // Fungsi boot untuk membuat slug otomatis
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            if (empty($news->slug)) {
                $news->slug = static::generateSlug($news->judul);
            }
        });
    }

    // Fungsi untuk menghasilkan slug unik
    public static function generateSlug($judul)
    {
        $slug = Str::slug($judul);
        $count = static::where('slug', 'LIKE', "$slug%")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }
}
