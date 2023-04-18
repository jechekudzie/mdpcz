<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function policy_categories()
    {
        return $this->hasMany(PolicyCategory::class);
    }
}
