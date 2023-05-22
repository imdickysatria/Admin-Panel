<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function transaksi(): BelongsToMany
    {
        return $this->belongsToMany(Transaksi::class);
    }
}
