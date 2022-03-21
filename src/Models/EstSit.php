<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EstSit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EstSit';

    private static $has_one = [
        "QuisRepudiandae" => QuisRepudiandae::class
    ];

    private static $has_many = [
        "QuisRepudiandaes" => QuisRepudiandae::class
    ];

    private static $many_many = [
        "QuisRepudiandaeManys" => QuisRepudiandae::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}