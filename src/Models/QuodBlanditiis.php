<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuodBlanditiis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuodBlanditiis';

    private static $has_one = [
        "TotamQuas" => TotamQuas::class,
        "DoloresNam" => DoloresNam::class,
        "IpsamNulla" => IpsamNulla::class
    ];

    private static $has_many = [
        "TotamQuass" => TotamQuas::class,
        "DoloresNams" => DoloresNam::class,
        "IpsamNullas" => IpsamNulla::class
    ];

    private static $many_many = [
        "TotamQuasManys" => TotamQuas::class
    ];

    private static $belongs_many_many = [
        "DoloresNamManys" => DoloresNam::class,
        "IpsamNullaManys" => IpsamNulla::class
    ];

    private static $extensions = [
        
    ];
}