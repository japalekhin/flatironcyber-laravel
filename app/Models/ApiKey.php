<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeGetByUserId($query, int $userId)
    {
        $query->where('user_id', $userId);
    }

    public function isActiveDisplay(): Attribute
    {
        return Attribute::get(function ($value, $attributes) {
            return $attributes['is_active'] ? 'Yes' : 'No';
        });
    }

    public function lastUsedAtDisplay(): Attribute
    {
        return Attribute::get(function ($value, $attributes) {
            return $attributes['last_used_at'] ?? 'Never';
        });
    }
}
