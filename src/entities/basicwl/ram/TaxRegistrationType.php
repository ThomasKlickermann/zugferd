<?php

namespace horstoeko\zugferd\basicwl\ram;

/**
 * Class representing TaxRegistrationType
 *
 *
 * XSD Type: TaxRegistrationType
 */
class TaxRegistrationType
{

    /**
     * @var \horstoeko\zugferd\basicwl\udt\IDType $iD
     */
    private $iD = null;

    /**
     * Gets as iD
     *
     * @return \horstoeko\zugferd\basicwl\udt\IDType
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param \horstoeko\zugferd\basicwl\udt\IDType $iD
     * @return self
     */
    public function setID(\horstoeko\zugferd\basicwl\udt\IDType $iD)
    {
        $this->iD = $iD;
        return $this;
    }


}
