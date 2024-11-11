<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $appends = ['mon', 'day', 'year'];

    public function getDayAttribute()
    {$endDate = '';

        if ($this->attributes['date']) {

            $mydate = $this->attributes['date'];
            $endDate = date('j', strtotime($mydate));
            // $endDate = date('l, F jS, Y', strtotime($mydate));
        }

        return $this->attributes['day'] = $endDate;
    }
    public function getMonAttribute()
    {$endDate = '';

        if ($this->attributes['date']) {

            $mydate = $this->attributes['date'];
            $endDate = date('F', strtotime($mydate));
            // $endDate = date('l, F jS, Y', strtotime($mydate));
        }

        return $this->attributes['mon'] = $endDate;
    }
    public function getYearAttribute()
    {$endDate = '';

        if ($this->attributes['date']) {

            $mydate = $this->attributes['date'];
            $endDate = date('Y', strtotime($mydate));
            // $endDate = date('l, F jS, Y', strtotime($mydate));
        }

        return $this->attributes['year'] = $endDate;
    }
}
