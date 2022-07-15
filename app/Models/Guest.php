<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "guest_full_name",
        "guest_nik",
        "guest_gender",
        "guest_age",
        "guest_come_at",
        "guest_back_at",
        "guest_relation",
        "guest_purpose",
        "is_active",
    ];
}
