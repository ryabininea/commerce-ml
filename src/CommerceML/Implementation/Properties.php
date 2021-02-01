<?php


namespace CommerceML\Implementation;


use CommerceML\DefaultImplementation;
use CommerceML\Implementation;

class Properties extends \CommerceML\Nodes\Properties implements Implementation
{

    protected $additionalInformation;

    use DefaultImplementation;


    public function additionalInformation(): string
    {
        return $this->additionalInformation;
    }
}