<?php

namespace bmwx591\yrl;

class Location extends NestedObject
{
    protected $country;

    protected $region;

    protected $district;

    protected $localityName;

    protected $subLocalityName;

    protected $address;

    protected $apartment;

    protected $direction;

    protected $distance;

    protected $latitude;

    protected $longitude;

    /**
     * @var Metro[]
     */
    protected $metro = [];

    protected $railwayStation;

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param string $district
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocalityName()
    {
        return $this->localityName;
    }

    /**
     * @param string $localityName
     * @return $this
     */
    public function setLocalityName($localityName)
    {
        $this->localityName = $localityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubLocalityName()
    {
        return $this->subLocalityName;
    }

    /**
     * @param string $subLocalityName
     * @return $this
     */
    public function setSubLocalityName($subLocalityName)
    {
        $this->subLocalityName = $subLocalityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return integer
     */
    public function getApartment()
    {
        return $this->apartment;
    }

    /**
     * @param integer $apartment
     * @return $this
     */
    public function setApartment($apartment)
    {
        $this->apartment = $apartment;
        return $this;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param string $direction
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * @return integer
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param integer $distance
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return Metro[]
     */
    public function getMetro()
    {
        return $this->metro;
    }

    /**
     * @param Metro $metro
     * @return $this
     */
    public function addMetro(Metro $metro)
    {
        array_push($this->metro, $metro);
        return $this;
    }

    /**
     * @param Metro[] $metro
     * @return $this
     */
    public function setMetro(array $metro)
    {
        $this->metro = $metro;
        return $this;
    }

    /**
     * @return string
     */
    public function getRailwayStation()
    {
        return $this->railwayStation;
    }

    /**
     * @param string $railwayStation
     * @return $this
     */
    public function setRailwayStation($railwayStation)
    {
        $this->railwayStation = $railwayStation;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setAttribute(array $attrNode)
    {
        if ('metro' == $attrNode['name']) {
            return $this->addMetro((new Metro($this))->setOptions($attrNode));
        }
        return parent::setAttribute($attrNode);
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        parent::isValid();
        if (is_null($this->country)) {
            $this->addError('Required location field "country" is empty');
        }
        return $this->hasErrors();
    }
}
