<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisLabore extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisLabore';

    private static $has_one = [
        "SaepeQui" => SaepeQui::class
    ];

    private static $has_many = [
        "SaepeQuis" => SaepeQui::class
    ];

    private static $many_many = [
        "SaepeQuiManys" => SaepeQui::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}