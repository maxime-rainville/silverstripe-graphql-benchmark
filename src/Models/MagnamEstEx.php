<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MagnamEstEx extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MagnamEstEx';

    private static $has_one = [
        "SedQuaeratQui" => SedQuaeratQui::class
    ];

    private static $has_many = [
        "SedQuaeratQuis" => SedQuaeratQui::class
    ];

    private static $many_many = [
        "SedQuaeratQuiManys" => SedQuaeratQui::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}