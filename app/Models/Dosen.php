<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Dosen extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nidn',
        'nama',
        'email',
        'jarkom',
        'progmob',
        'progweb',
        'uiux',
        'inforsec',
        'dataan',
        'lebih10',
        'kurang10',
        'wd1',
        'wd2',
        'wd3',
        'dosen',
    ];

    protected $table = 'dosen';
}
