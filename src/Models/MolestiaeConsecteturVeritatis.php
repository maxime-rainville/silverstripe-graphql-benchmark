<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MolestiaeConsecteturVeritatis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MolestiaeConsecteturVeritatis';

    private static $has_one = [
        "CorruptiEarumExpedita" => CorruptiEarumExpedita::class
    ];

    private static $has_many = [
        "CorruptiEarumExpeditas" => CorruptiEarumExpedita::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "CorruptiEarumExpeditaManys" => CorruptiEarumExpedita::class
    ];

    private static $extensions = [
        
    ];
}