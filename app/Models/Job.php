<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Job extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'occupation',
        'educate_id',
        'note',
        'file',
        'ip_address',
        'send_at'
    ];

    public function educate()
    {
        return $this->belongsTo(Education::class);
    }
}
