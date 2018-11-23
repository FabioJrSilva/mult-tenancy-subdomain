<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Tenant\Scopes\TenantScope;

class Post extends Model
{
    public Static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TenantScope);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function tenant()
    {
        return $this->hasMany(Tenant::class);
    }
}
