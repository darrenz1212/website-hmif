<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $table = 'votes';

    protected $fillable = [
        'candidate_id',
    ];

    // Relasi ke model Candidate
    public function candidate()
    {
        return $this->belongsTo(Candidates::class, 'candidate_id');
    }
}
