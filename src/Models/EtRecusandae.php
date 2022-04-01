<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtRecusandae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtRecusandae';

    private static $has_one = [
        "QuisquamEst" => QuisquamEst::class,
        "QuiIn" => QuiIn::class,
        "QuasiDucimus" => QuasiDucimus::class
    ];

    private static $has_many = [
        "QuisquamEsts" => QuisquamEst::class,
        "QuiIns" => QuiIn::class,
        "QuasiDucimuss" => QuasiDucimus::class
    ];

    private static $many_many = [
        "QuisquamEstManys" => QuisquamEst::class,
        "QuiInManys" => QuiIn::class,
        "QuasiDucimusManys" => QuasiDucimus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}