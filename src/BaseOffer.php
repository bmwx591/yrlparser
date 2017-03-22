<?php

namespace bmwx591\yrl;

class BaseOffer
{
    use TYRL;

    protected $internalId;

    protected $type;

    protected $propertyType;

    protected $category;

    protected $commercialType;

    protected $commercialBuildingType;

    protected $purpose;

    protected $purposeWarehouse;

    protected $lotNumber;

    protected $cadastralNumber;

    protected $url;

    protected $creationDate;

    protected $lastUpdateDate;

    protected $expireDate;

    protected $payedAdv;

    protected $manuallyAdded;

    protected $vas;

    protected $location;

    protected $images = [];

    protected $salesAgent;

    /**
     * @return mixed
     */
    public function getSalesAgent()
    {
        return $this->salesAgent;
    }

    /**
     * @param mixed $salesAgent
     */
    public function setSalesAgent($salesAgent)
    {
        $this->salesAgent = $salesAgent;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setInternalId($value)
    {
        $this->internalId = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
        return $this->internalId;
    }

    /**
     * @param array $value
     * @return $this
     */
    public function setImages(array $value)
    {
        $this->images = $value;
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addImage($value)
    {
        array_push($this->images, $value);
        return $this;
    }

    /**
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPropertyType($value)
    {
        $this->propertyType = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * @return string
     */
    public function getCommercialType()
    {
        return $this->commercialType;
    }

    /**
     * @param string $commercialType
     * @return $this
     */
    public function setCommercialType($commercialType)
    {
        $this->commercialType = $commercialType;
        return $this;
    }

    /**
     * @param array $offerNode
     * @return $this
     */
    public function setOffer(array $offerNode)
    {
        foreach ($offerNode['attributes'] as $name => $value) {
            $this->setField($name, $value);
        }

        foreach ($offerNode['nodes'] as $attrNode) {
            $this->setAttribute($attrNode);
        }

        return $this;
    }

    /**
     * @param array $attrNode
     * @return $this
     */
    public function setAttribute(array $attrNode)
    {

        return $this;
    }
}
