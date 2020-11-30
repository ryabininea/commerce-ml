<?php


namespace CommerceML\Nodes;


use CommerceML\Node\AttributeContaining;
use CommerceML\Node\Composite;
use CommerceML\Node\Node;

abstract class OfferList extends Node implements Composite, AttributeContaining
{
    public static function commerceMLRepresentation (): string
    {
        return 'ПакетПредложений';
    }

    public static function attributes (): array
    {
        return [
            'updateOnly' => 'СодержитТолькоИзменения',
        ];
    }

    public static function getChildFields (): array
    {
        return [
            'id' => 'Ид',
            'name' => 'Наименование',
            'catalogId' => 'ИдКаталога',
            'metadataId' => 'ИдКлассификатора',
            'offers' => NULL,

        ];
    }

    abstract function updateOnly(): string;

    abstract public function id(): string;

    abstract public function name(): string;

    abstract public function catalogId(): string;

    abstract public function metadataId(): string;

    abstract public function offers(): Offers;
}