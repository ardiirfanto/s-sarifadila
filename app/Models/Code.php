<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Code extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    /**
     * Get all of the siswa_code for the Code
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function siswa_code(): HasMany
    {
        return $this->hasMany(Siswa_Code::class, 'id_code');
    }

    /**
     * Get the quiz that owns the Code
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class, 'quiz_id');
    }
}
