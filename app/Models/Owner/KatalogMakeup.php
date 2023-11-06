<?php

namespace App\Models\Owner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KatalogMakeup extends Model
{
    use HasFactory;


    protected $guard = [''];

    protected $table = 'katalog_makeup';

    public function getUserMakeup()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
