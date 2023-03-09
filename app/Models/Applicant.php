<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'bin_ban', 'bus_name', 'owner', 'postal_code', 'province', 'municipality', 'brgy', 'spec_address', 'contact_no', 'occupancy_type', 'exp_date',
    ];
}
