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

    protected $metro;

    protected $railwayStation;

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param mixed $district
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocalityName()
    {
        return $this->localityName;
    }

    /**
     * @param mixed $localityName
     * @return $this
     */
    public function setLocalityName($localityName)
    {
        $this->localityName = $localityName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubLocalityName()
    {
        return $this->subLocalityName;
    }

    /**
     * @param mixed $subLocalityName
     * @return $this
     */
    public function setSubLocalityName($subLocalityName)
    {
        $this->subLocalityName = $subLocalityName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApartment()
    {
        return $this->apartment;
    }

    /**
     * @param mixed $apartment
     * @return $this
     */
    public function setApartment($apartment)
    {
        $this->apartment = $apartment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param mixed $direction
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param mixed $distance
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetro()
    {
        return $this->metro;
    }

    /**
     * @param mixed $metro
     * @return $this
     */
    public function setMetro(Metro $metro)
    {
        $this->metro = $metro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRailwayStation()
    {
        return $this->railwayStation;
    }

    /**
     * @param mixed $railwayStation
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
            return $this->setMetro((new Metro($this))->setOptions($attrNode));
        }
        return parent::setAttribute($attrNode);
    }
}
