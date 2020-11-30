<?php


namespace CommerceML\Constructors;

use CommerceML\Implementation\Offers;

class OfferList extends  \CommerceML\Implementation\OfferList
{
    /**
     * OfferList constructor.
     * @param string $id
     * @param string $name
     * @param string $catalogId
     * @param string $metadataId
     * @param Offers $offers
     * @param string $updateOnly
     */
    public function __construct(
        string $id,
        string $name,
        string $catalogId,
        string $metadataId,
        Offers $offers,
        string $updateOnly = "true")
    {
        $this->id = $id;
        $this->name = $name;
        $this->catalogId = $catalogId;
        $this->metadataId = $metadataId;
        $this->offers = $offers;
        $this->updateOnly = $updateOnly;
    }
}