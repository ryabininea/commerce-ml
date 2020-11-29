<?php


namespace CommerceML\Nodes;


use CommerceML\Node\Composite;
use CommerceML\Node\Node;

abstract class OfferList extends Node implements Composite
{
    public static function commerceMLRepresentation (): string
    {
        return 'ПакетПредложений';
    }

    public static function getChildFields (): array
    {
        return [
            'id' => 'Ид',
            'name' => 'Наименование',
            'offers' => NULL,

        ];
    }

    abstract public function id(): string;

    abstract public function name(): string;

    abstract public function offers(): Offers;
}