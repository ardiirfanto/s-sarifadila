<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quiz extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the code associated with the Quiz
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function code(): HasOne
    {
        return $this->hasOne(Code::class, 'quiz_id');
    }

    /**
     * Get all of the question for the Quiz
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class, 'quiz_id');
    }
}
