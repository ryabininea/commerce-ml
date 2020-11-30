<?php


namespace CommerceML\Nodes;


use CommerceML\Node\Composite;
use CommerceML\Node\Node;

abstract class Offer extends Node implements Composite
{
    /**
     * @inheritdoc
     */
    static function getChildFields (): array
    {
        return [
            'id' => 'Ид',
            'name' => 'Наименование',
            'article' => 'Артикул',
            'prices' => NULL,
        ];
    }

    /**
     * @return string Russian representation of tag name
     */
    static function commerceMLRepresentation (): string
    {
        return 'Предложение';
    }

    abstract public function id(): string;

    abstract public function article(): string;

    abstract public function name(): string;

    abstract public function prices(): Prices;
}