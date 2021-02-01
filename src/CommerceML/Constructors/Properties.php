<?php


namespace CommerceML\Constructors;


class Properties extends \CommerceML\Implementation\Properties
{
    /**
     * Properties constructor.
     * @param string $additionalInformation
     */
    public function __construct(
        string $additionalInformation
    )
    {
        $this->additionalInformation = $additionalInformation;
    }
}