<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 22.03.17
 * Time: 23:36
 */

namespace bmwx591\yrl;


class Location
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

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     */
    public function setRegion($region)
    {
        $this->region = $region;
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
     */
    public function setDistrict($district)
    {
        $this->district = $district;
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
     */
    public function setLocalityName($localityName)
    {
        $this->localityName = $localityName;
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
     */
    public function setSubLocalityName($subLocalityName)
    {
        $this->subLocalityName = $subLocalityName;
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
     */
    public function setAddress($address)
    {
        $this->address = $address;
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
     */
    public function setApartment($apartment)
    {
        $this->apartment = $apartment;
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
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
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
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
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
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
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
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
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
     */
    public function setMetro($metro)
    {
        $this->metro = $metro;
    }
}
