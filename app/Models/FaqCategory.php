<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }

    public function add_faqs($faq)
    {
        return $this->faqs()->create($faq);
    }
}
