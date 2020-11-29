<?php


namespace CommerceML\Nodes;


use CommerceML\Node\Collection;
use CommerceML\Node\Node;

abstract class Prices extends Node implements Collection
{
    /**
     * @inheritdoc
     */
    static function getChildFields (): array
    {
        return [
            'prices' => NULL,
        ];
    }

    static function getArrayFields (): array
    {
        return [
            'prices' => Prices::class,
        ];
    }

    /**
     * @return string Russian representation of tag name
     */
    static function commerceMLRepresentation (): string
    {
        return 'Цены';
    }

    abstract public function prices(): array;
}