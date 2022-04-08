<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'date',
        'total',
        'user_id',
        'tempat_wisata_id',
        'tour_guide'
    ];

    public function tempatwisata(){
        return $this->hasMany(TempatWisata::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }

    public function tourguide(){
        return $this->hasMany(TourGuide::class);
    }
}
