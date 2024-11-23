<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // If your table name does not follow Laravel's convention, specify the table name
    protected $table = 'transactions';  // Optional, only if the table name is different

    // The attributes that are mass assignable
    protected $fillable = [
        'date',
        'transaction_type',
        'reference',
        'transaction_id',
    ];

    // The attributes that should be hidden for arrays (e.g., sensitive data)
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // Define relationships if needed (example for a user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
