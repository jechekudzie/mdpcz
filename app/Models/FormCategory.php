<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function forms()
    {
        return $this->hasMany(Form::class);
    }

    public function add_forms($form)
    {
        return $this->forms()->create($form);
    }

}
