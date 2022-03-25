<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SaepeConsequatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SaepeConsequatur';

    private static $has_one = [
        "AssumendaQuaerat" => AssumendaQuaerat::class
    ];

    private static $has_many = [
        "AssumendaQuaerats" => AssumendaQuaerat::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AssumendaQuaeratManys" => AssumendaQuaerat::class
    ];

    private static $extensions = [
        
    ];
}