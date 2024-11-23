<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = ['email', 'username', 'password'];

    /**
     * Check if the user has the required records (profile completed, etc.)
     */
    public function hasRequiredRecords()
    {
        return $this->credential()->exists() && $this->address()->exists() && $this->validation()->exists();
    }

    /**
     * Get the credentials for the user.
     */
    public function credential()
    {
        return $this->hasMany(Credential::class);
    }

    /**
     * Get the address for the user.
     */
    public function address()
    {
        return $this->hasMany(Address::class);
    }

    /**
     * Get the validation for the user.
     */
    public function validation()
    {
        return $this->hasMany(Validation::class);
    }
}
