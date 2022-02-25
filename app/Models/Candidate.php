<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'birth_date',
        'registration_date',
        'school_origin',
        'street',
        'suburb',
        'postal_code',
        'unique_personal_clave',
        'token_payment',
        'folio_number',
        'gender_id',
        'disability_id',
    ];
 

    public function disability(){
        return $this->belongsTo(Disability::class);
    }

    public function gender(){
        return $this->belongsTo(Gender::class);
    }
}
