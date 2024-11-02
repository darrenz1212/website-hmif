<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteStats extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'voting_stats';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = ['status'];

    // Kolom status bertipe boolean
    protected $casts = [
        'status' => 'boolean',
    ];

    // Atur primary key menjadi 'status' atau tidak ada primary key
    public $incrementing = false;
    protected $primaryKey = null;
    public $timestamps = false; // Nonaktifkan timestamps jika tidak ada kolom created_at dan updated_at
}
