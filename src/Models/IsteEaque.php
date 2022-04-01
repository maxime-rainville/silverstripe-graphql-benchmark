<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IsteEaque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IsteEaque';

    private static $has_one = [
        "OmnisMolestiae" => OmnisMolestiae::class,
        "CumqueLabore" => CumqueLabore::class,
        "AliquidEveniet" => AliquidEveniet::class
    ];

    private static $has_many = [
        "OmnisMolestiaes" => OmnisMolestiae::class,
        "CumqueLabores" => CumqueLabore::class,
        "AliquidEveniets" => AliquidEveniet::class
    ];

    private static $many_many = [
        "OmnisMolestiaeManys" => OmnisMolestiae::class
    ];

    private static $belongs_many_many = [
        "CumqueLaboreManys" => CumqueLabore::class,
        "AliquidEvenietManys" => AliquidEveniet::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}