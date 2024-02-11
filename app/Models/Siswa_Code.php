<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Siswa_Code extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * The siswa that belong to the Siswa_Code
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function siswa(): BelongsToMany
    {
        return $this->belongsToMany(Siswa::class, 'siswas', 'siswa_id');
    }

    public function code(): BelongsToMany
    {
        return $this->belongsToMany(Code::class, 'codes', 'code_id');
    }

    /**
     * Get all of the answers for the Siswa_Code
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class, 'siswa_code_id');
    }
}
