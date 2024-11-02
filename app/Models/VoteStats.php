<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteStats extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'voting_status';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = ['status'];

    // Kolom status bertipe boolean
    protected $casts = [
        'status' => 'boolean',
    ];
}
