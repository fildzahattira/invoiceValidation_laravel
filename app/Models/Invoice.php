<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Invoice extends Model
{

    public $incrementing = false; 
    protected $keyType = 'string'; 

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
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
        'client_email',
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