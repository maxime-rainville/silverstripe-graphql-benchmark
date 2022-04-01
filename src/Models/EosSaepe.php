<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EosSaepe extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EosSaepe';

    private static $has_one = [
        "RepellatIusto" => RepellatIusto::class,
        "CumqueCommodi" => CumqueCommodi::class,
        "DoloresSed" => DoloresSed::class
    ];

    private static $has_many = [
        "RepellatIustos" => RepellatIusto::class,
        "CumqueCommodis" => CumqueCommodi::class,
        "DoloresSeds" => DoloresSed::class
    ];

    private static $many_many = [
        "RepellatIustoManys" => RepellatIusto::class
    ];

    private static $belongs_many_many = [
        "CumqueCommodiManys" => CumqueCommodi::class,
        "DoloresSedManys" => DoloresSed::class
    ];

    private static $extensions = [
        
    ];
}