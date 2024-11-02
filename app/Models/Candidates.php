<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    use HasFactory;

    protected $table = 'candidates';

    protected $fillable = [
        'no_urut',
        'nama',
        'image',
        'visi',
        'misi',
    ];

    // Relasi ke model Vote
    public function votes()
    {
        return $this->hasMany(Vote::class, 'candidate_id');
    }
}
