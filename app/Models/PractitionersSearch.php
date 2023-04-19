<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PractitionersSearch extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $connection = 'mysql_second';

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()
                ->where('Title', 'like', '%' . $search . '%')
                ->orWhere('Fullname', 'like', '%' . $search . '%')
                ->orWhere('specialty', 'like', '%' . $search . '%')
                ->orWhere('gender', 'like', '%' . $search . '%');
    }


    public function scopeRegister($query, $specialty)
    {
        if ($specialty) {
            return $query->where('specialty', '=',$specialty );
        }
        return $query;

    }
}
