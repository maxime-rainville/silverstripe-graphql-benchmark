<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NihilOmnis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NihilOmnis';

    private static $has_one = [
        "QuasiQui" => QuasiQui::class
    ];

    private static $has_many = [
        "QuasiQuis" => QuasiQui::class
    ];

    private static $many_many = [
        "QuasiQuiManys" => QuasiQui::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}