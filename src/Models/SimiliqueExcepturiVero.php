<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SimiliqueExcepturiVero extends DataObject
{

    private static $db = [
        'AStringValue' => 'Varchar',
        'Numeric' => 'Int',
        'TrueOrFalse' => 'Boolean',
        'MyNovel' => 'Text',
        'MyNovelWithFormattedContent' => 'HTMLText',
        'ShowMeTheMoney' => 'Money',
        'ListOfThings' => 'Enum("USD,EUR,GBP,AUD,CAD,CHF,CNY,DKK,HKD,JPY,NZD,PLN,RUB,SEK,SGD,THB,ZAR")',
        'YourTimeWillCome' => 'Datetime',
        'SplintingNumber' => 'Decimal',
        'InTheYearOfThyLord' => 'Year',
    ];

    private static $table_name = 'SimiliqueExcepturiVero';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "NisiAutAb" => NisiAutAb::class,
        "SimiliqueExcepturiVero" => SimiliqueExcepturiVero::class,
        "EtNesciuntReiciendis" => EtNesciuntReiciendis::class,
        "MinusRationeEaque" => MinusRationeEaque::class,
        "TeneturEaqueLaboriosam" => TeneturEaqueLaboriosam::class,
        "EtEstRepudiandae" => EtEstRepudiandae::class,
        "EtDistinctioNihil" => EtDistinctioNihil::class,
        "MolestiaeExpeditaAb" => MolestiaeExpeditaAb::class,
        "NatusEstId" => NatusEstId::class,
        "DolorFugitMollitia" => DolorFugitMollitia::class,
        "EstExpeditaUt" => EstExpeditaUt::class,
        "IpsaEligendiDoloribus" => IpsaEligendiDoloribus::class,
        "ErrorEosDicta" => ErrorEosDicta::class,
        "VoluptatemAtMolestias" => VoluptatemAtMolestias::class,
        "NesciuntAAut" => NesciuntAAut::class,
        "NumquamLaboriosamEst" => NumquamLaboriosamEst::class,
        "UndeSuntPerspiciatis" => UndeSuntPerspiciatis::class
    ];

    private static $has_many = [
        "NisiAutAbs" => NisiAutAb::class,
        "SimiliqueExcepturiVeros" => SimiliqueExcepturiVero::class,
        "EtNesciuntReiciendiss" => EtNesciuntReiciendis::class,
        "MinusRationeEaques" => MinusRationeEaque::class,
        "TeneturEaqueLaboriosams" => TeneturEaqueLaboriosam::class,
        "EtEstRepudiandaes" => EtEstRepudiandae::class,
        "EtDistinctioNihils" => EtDistinctioNihil::class,
        "MolestiaeExpeditaAbs" => MolestiaeExpeditaAb::class,
        "NatusEstIds" => NatusEstId::class,
        "DolorFugitMollitias" => DolorFugitMollitia::class,
        "EstExpeditaUts" => EstExpeditaUt::class,
        "IpsaEligendiDoloribuss" => IpsaEligendiDoloribus::class,
        "ErrorEosDictas" => ErrorEosDicta::class,
        "VoluptatemAtMolestiass" => VoluptatemAtMolestias::class,
        "NesciuntAAuts" => NesciuntAAut::class,
        "NumquamLaboriosamEsts" => NumquamLaboriosamEst::class,
        "UndeSuntPerspiciatiss" => UndeSuntPerspiciatis::class
    ];
}