<?php

namespace bmwx591\yrl;

abstract class Offer extends Object
{
    protected $internalId;

    protected $type;

    protected $category;

    protected $cadastralNumber;

    protected $url;

    protected $creationDate;

    protected $lastUpdateDate;

    protected $expireDate;

    protected $vas;

    protected $location;

    protected $images = [];

    protected $salesAgent;

    protected $price;

    protected $area;

    protected $image;

    protected $renovation;

    protected $description;

    protected $rooms;

    protected $floor;

    protected $windowView;

    protected $phone;

    protected $floorCovering;

    protected $floorsTotal;

    protected $buildingName;

    protected $builtYear;

    protected $ceilingHeight;

    protected $guardedBuilding;

    protected $lift;

    protected $rubbishChute;

    protected $parking;

    protected $isElite;

    protected $pmg;

    protected $kitchen;

    protected $toilet;

    protected $shower;

    protected $pool;

    protected $sauna;

    protected $billiard;

    protected $errors = [];

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param mixed $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return mixed
     */
    public function getLastUpdateDate()
    {
        return $this->lastUpdateDate;
    }

    /**
     * @param mixed $lastUpdateDate
     */
    public function setLastUpdateDate($lastUpdateDate)
    {
        $this->lastUpdateDate = $lastUpdateDate;
    }

    /**
     * @return mixed
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * @param mixed $expireDate
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getVas()
    {
        return $this->vas;
    }

    /**
     * @param mixed $vas
     * @return $this
     */
    public function setVas($vas)
    {
        $this->vas = $vas;
        return $this;
    }

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
     * @param array $attrNode
     * @return $this
     */
    public function setAttribute(array $attrNode)
    {
        $name = $attrNode['name'];
        if ('location' == $name) {
            $this->setLocation((new Location())->setOptions($attrNode));
        }
        if ('sales-agent' == $name) {
            $this->setSalesAgent((new SalesAgent())->setOptions($attrNode));
        }
        if ('price' == $name) {
            $this->setPrice((new Price())->setOptions($attrNode));
        }
        if (in_array($name, ['area', 'room-space', 'living-space', 'kitchen-space', 'lot-area'])) {
            $setter = 'set' . str_replace(['-', '_'], '', $name);
            $this->$setter((new Option())->setOptions($attrNode));
        }
        return $this;
    }

    public function hasErrors()
    {
        return empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }

    public function addError($error)
    {
        array_push($this->errors, $error);
        return $this;
    }

    /**
     * Validate offer
     * @return bool
     */
    abstract public function isValid();
}
