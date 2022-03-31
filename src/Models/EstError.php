<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EstError extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EstError';

    private static $has_one = [
        "EnimQui" => EnimQui::class
    ];

    private static $has_many = [
        "EnimQuis" => EnimQui::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EnimQuiManys" => EnimQui::class
    ];

    private static $extensions = [
        
    ];
}