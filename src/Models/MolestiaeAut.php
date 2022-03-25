<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MolestiaeAut extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MolestiaeAut';

    private static $has_one = [
        "CumqueUt" => CumqueUt::class
    ];

    private static $has_many = [
        "CumqueUts" => CumqueUt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "CumqueUtManys" => CumqueUt::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}