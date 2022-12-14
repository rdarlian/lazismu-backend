<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frontoffice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'penyetor',
        'penerima',
        'nobuktipenerima',
        'tanggal',
        'ref',
        'jumlah',
        'tempatbayar',
        'coadebit_id',
        'coakredit_id',
    ];

    public function coadebit()
    {
        return $this->belongsTo(Coadebit::class);
    }
    public function coakredit()
    {
        return $this->belongsTo(Coakredit::class);
    }
    public function cabangs()
    {
        return $this->belongsTo(Cabang::class);
    }
}
