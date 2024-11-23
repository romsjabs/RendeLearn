<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'firstname', 'middlename', 'lastname', 'extension',
        'gender', 'birthdate', 'birthplace',
        'civilstatus', 'religion', 'nationality',
        'mobilenumber', 'landlinenumber', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
