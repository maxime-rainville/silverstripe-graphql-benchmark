<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaEiusAut extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaEiusAut';

    private static $has_one = [
        "NonOccaecatiRerum" => NonOccaecatiRerum::class
    ];

    private static $has_many = [
        "NonOccaecatiRerums" => NonOccaecatiRerum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NonOccaecatiRerumManys" => NonOccaecatiRerum::class
    ];

    private static $extensions = [
        
    ];
}