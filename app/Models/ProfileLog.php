<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ProfileLog extends Model
{
    protected $fillable = [
        'user_id',
        'action',
        'data',
    ];

    public function getCreatedAttribute() {
        return $this->created_at->toFormattedDateString();
    }
}
