<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationRequest extends Model
{

    protected $table = 'donation_requests';
    public $timestamps = true;
    protected $fillable = array('patient_name', 'patient_phone', 'city_id', 'hospital_address', 'details', 'letitude', 'longitude', 'clien_id', 'quantity');
    protected $visible = array('patient_name', 'patient_phone', 'city_id', 'hospital_address', 'details', 'letitude', 'longitude', 'clien_id', 'quantity');

    public function City()
    {
        return $this->belongsTo('App\Models\City');
    }

}