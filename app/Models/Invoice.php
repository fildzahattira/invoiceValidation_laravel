<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'invoice_date',
        'client_name',
        'client_address',
        'forwarding_vessel',
        'port_of_discharge',
        'port_of_loading',
        'bill_lading',
        'shipper',
        'consignee',
        'cargo_description',
        'etd',
        'eta',
    ];
}