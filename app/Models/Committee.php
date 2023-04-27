<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function policy_guidelines()
    {
        return $this->hasMany(PolicyGuideline::class);
    }

    public function add_policy_guidelines($policy_guideline)
    {
        return $this->policy_guidelines()->create($policy_guideline);
    }


}
