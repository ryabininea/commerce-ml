<?php


namespace CommerceML\Nodes;


use CommerceML\Node\Collection;
use CommerceML\Node\Node;

abstract class Price extends Node implements Collection
{
    /**
     * @inheritdoc
     */
    static function getChildFields (): array
    {
        return [
            'name' => 'Наименование',
            'presentation' => 'Представление',
            'pricePerUnit' => 'ЦенаЗаЕдиницу',
            'currency' => 'Валюта',
            'unit' => 'Единица',
            'koef' => 'Коэффициент',
        ];
    }

    /**
     * @return string Russian representation of tag name
     */
    static function commerceMLRepresentation (): string
    {
        return 'Цена';
    }

    abstract public function name(): string;

    abstract public function presentation(): string;

    abstract public function pricePerUnit(): string;

    abstract public function currency(): string;

    abstract public function unit(): string;

    abstract public function koef(): string;

}