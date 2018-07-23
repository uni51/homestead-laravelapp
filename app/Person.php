<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\ScopePerson;


class Person extends Model
{
    // グローバルスコープ
    protected static function boot()
    {
       parent::boot();
       static::addGlobalScope(new ScopePerson);
    }

    public function getData()
    {
       return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

    // ローカルスコープ
    public function scopeNameEqual($query, $str)
    {
       return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n)
    {
       return $query->where('age','>=', $n);
    }

    public function scopeAgeLessThan($query, $n)
    {
       return $query->where('age', '<=', $n);
    }

}