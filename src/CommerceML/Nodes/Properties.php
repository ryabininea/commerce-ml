<?php


namespace CommerceML\Nodes;


use CommerceML\Node\Composite;
use CommerceML\Node\Node;

abstract class Properties extends Node implements Composite
{

    static function getChildFields(): array
    {
        return [
            'additionalInformation' => 'ДополнительнаяИнформация',
        ];
    }

    static function commerceMLRepresentation(): string
    {
        return 'СвойстваЗаказа';
    }

    abstract public function additionalInformation(): string;
}