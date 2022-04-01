<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisquamEst extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisquamEst';

    private static $has_one = [
        "QuiIn" => QuiIn::class,
        "QuasiDucimus" => QuasiDucimus::class,
        "EtRecusandae" => EtRecusandae::class
    ];

    private static $has_many = [
        "QuiIns" => QuiIn::class,
        "QuasiDucimuss" => QuasiDucimus::class,
        "EtRecusandaes" => EtRecusandae::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuiInManys" => QuiIn::class,
        "QuasiDucimusManys" => QuasiDucimus::class,
        "EtRecusandaeManys" => EtRecusandae::class
    ];

    private static $extensions = [
        
    ];
}