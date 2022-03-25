<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AssumendaQuaerat extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AssumendaQuaerat';

    private static $has_one = [
        "SaepeConsequatur" => SaepeConsequatur::class
    ];

    private static $has_many = [
        "SaepeConsequaturs" => SaepeConsequatur::class
    ];

    private static $many_many = [
        "SaepeConsequaturManys" => SaepeConsequatur::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}