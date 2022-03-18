<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NihilMaioresLaborum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NihilMaioresLaborum';

    private static $has_one = [
        "SolutaQuaeCum" => SolutaQuaeCum::class
    ];

    private static $has_many = [
        "SolutaQuaeCums" => SolutaQuaeCum::class
    ];

    private static $many_many = [
        "SolutaQuaeCumManys" => SolutaQuaeCum::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}