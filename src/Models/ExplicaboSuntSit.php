<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ExplicaboSuntSit extends DataObject
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

    private static $table_name = 'ExplicaboSuntSit';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "EtOptioDolor" => EtOptioDolor::class,
        "IsteEaId" => IsteEaId::class,
        "EtAnimiVoluptas" => EtAnimiVoluptas::class,
        "NatusIllumAutem" => NatusIllumAutem::class,
        "EtQuiaEst" => EtQuiaEst::class,
        "RepudiandaeEtOfficiis" => RepudiandaeEtOfficiis::class,
        "EosDoloresDolorum" => EosDoloresDolorum::class,
        "EaQuiIure" => EaQuiIure::class,
        "ExplicaboSuntSit" => ExplicaboSuntSit::class,
        "ExercitationemIlloEt" => ExercitationemIlloEt::class,
        "MinusVeniamOmnis" => MinusVeniamOmnis::class,
        "ExcepturiUtVitae" => ExcepturiUtVitae::class,
        "VoluptasSedSed" => VoluptasSedSed::class,
        "ExplicaboEtDolorem" => ExplicaboEtDolorem::class,
        "AliasOditOptio" => AliasOditOptio::class,
        "PerferendisDoloremEt" => PerferendisDoloremEt::class,
        "FugiatVoluptasEa" => FugiatVoluptasEa::class,
        "VelQuiaEarum" => VelQuiaEarum::class,
        "AutDignissimosMolestiae" => AutDignissimosMolestiae::class,
        "TeneturTotamOdit" => TeneturTotamOdit::class,
        "DoloresFugitQuos" => DoloresFugitQuos::class
    ];

    private static $has_many = [
        "EtOptioDolors" => EtOptioDolor::class,
        "IsteEaIds" => IsteEaId::class,
        "EtAnimiVoluptass" => EtAnimiVoluptas::class,
        "NatusIllumAutems" => NatusIllumAutem::class,
        "EtQuiaEsts" => EtQuiaEst::class,
        "RepudiandaeEtOfficiiss" => RepudiandaeEtOfficiis::class,
        "EosDoloresDolorums" => EosDoloresDolorum::class,
        "EaQuiIures" => EaQuiIure::class,
        "ExplicaboSuntSits" => ExplicaboSuntSit::class,
        "ExercitationemIlloEts" => ExercitationemIlloEt::class,
        "MinusVeniamOmniss" => MinusVeniamOmnis::class,
        "ExcepturiUtVitaes" => ExcepturiUtVitae::class,
        "VoluptasSedSeds" => VoluptasSedSed::class,
        "ExplicaboEtDolorems" => ExplicaboEtDolorem::class,
        "AliasOditOptios" => AliasOditOptio::class,
        "PerferendisDoloremEts" => PerferendisDoloremEt::class,
        "FugiatVoluptasEas" => FugiatVoluptasEa::class,
        "VelQuiaEarums" => VelQuiaEarum::class,
        "AutDignissimosMolestiaes" => AutDignissimosMolestiae::class,
        "TeneturTotamOdits" => TeneturTotamOdit::class,
        "DoloresFugitQuoss" => DoloresFugitQuos::class
    ];
}