<?php


namespace CommerceML\Nodes;


use CommerceML\Node\Collection;
use CommerceML\Node\Node;

abstract class Offers extends Node implements Collection
{
    /**
     * @inheritdoc
     */
    static function getChildFields (): array
    {
        return [
            'offers' => NULL,
        ];
    }

    static function getArrayFields (): array
    {
        return [
            'offers' => Offers::class,
        ];
    }

    /**
     * @return string Russian representation of tag name
     */
    static function commerceMLRepresentation (): string
    {
        return 'Предложения';
    }

    abstract public function offers(): array;

}