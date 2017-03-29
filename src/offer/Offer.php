<?php

namespace bmwx591\yrl\offer;

use bmwx591\yrl\Object;
use bmwx591\yrl\Location;
use bmwx591\yrl\Option;
use bmwx591\yrl\Price;
use bmwx591\yrl\SalesAgent;

abstract class Offer extends Object
{
    protected $internalId;

    protected $type;

    protected $category;

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

    protected $waterSupply;

    protected $sewerageSupply;

    protected $electricitySupply;

    protected $electricCapacity;

    protected $gasSupply;

    protected $heatingSupply;

    protected $dealStatus;

    protected $payedAdv;

    protected $manuallyAdded;

    protected $haggle;

    protected $mortgage;

    protected $quality;

    protected $commission;

    protected $securityPayment;

    protected $utilitiesIncluded;

    protected $electricityIncluded;

    protected $internet;

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
    public function setArea(Option $area)
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
    public function setLocation(Location $location)
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
    public function setPrice(Price $price)
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
    public function setSalesAgent(SalesAgent $salesAgent)
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
     * @return mixed
     */
    public function getWaterSupply()
    {
        return $this->waterSupply;
    }

    /**
     * @param mixed $waterSupply
     * @return $this
     */
    public function setWaterSupply($waterSupply)
    {
        $this->waterSupply = $waterSupply;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSewerageSupply()
    {
        return $this->sewerageSupply;
    }

    /**
     * @param mixed $sewerageSupply
     * @return $this
     */
    public function setSewerageSupply($sewerageSupply)
    {
        $this->sewerageSupply = $sewerageSupply;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getElectricitySupply()
    {
        return $this->electricitySupply;
    }

    /**
     * @param mixed $electricitySupply
     * @return $this
     */
    public function setElectricitySupply($electricitySupply)
    {
        $this->electricitySupply = $electricitySupply;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getElectricCapacity()
    {
        return $this->electricCapacity;
    }

    /**
     * @param mixed $electricCapacity
     * @return $this
     */
    public function setElectricCapacity($electricCapacity)
    {
        $this->electricCapacity = $electricCapacity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGasSupply()
    {
        return $this->gasSupply;
    }

    /**
     * @param mixed $gasSupply
     * @return $this
     */
    public function setGasSupply($gasSupply)
    {
        $this->gasSupply = $gasSupply;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeatingSupply()
    {
        return $this->heatingSupply;
    }

    /**
     * @param mixed $heatingSupply
     * @return $this
     */
    public function setHeatingSupply($heatingSupply)
    {
        $this->heatingSupply = $heatingSupply;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRenovation()
    {
        return $this->renovation;
    }

    /**
     * @param mixed $renovation
     */
    public function setRenovation($renovation)
    {
        $this->renovation = $renovation;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @param mixed $rooms
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }

    /**
     * @return mixed
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param mixed $floor
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    }

    /**
     * @return mixed
     */
    public function getWindowView()
    {
        return $this->windowView;
    }

    /**
     * @param mixed $windowView
     */
    public function setWindowView($windowView)
    {
        $this->windowView = $windowView;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getFloorCovering()
    {
        return $this->floorCovering;
    }

    /**
     * @param mixed $floorCovering
     */
    public function setFloorCovering($floorCovering)
    {
        $this->floorCovering = $floorCovering;
    }

    /**
     * @return mixed
     */
    public function getFloorsTotal()
    {
        return $this->floorsTotal;
    }

    /**
     * @param mixed $floorsTotal
     */
    public function setFloorsTotal($floorsTotal)
    {
        $this->floorsTotal = $floorsTotal;
    }

    /**
     * @return mixed
     */
    public function getBuildingName()
    {
        return $this->buildingName;
    }

    /**
     * @param mixed $buildingName
     */
    public function setBuildingName($buildingName)
    {
        $this->buildingName = $buildingName;
    }

    /**
     * @return mixed
     */
    public function getBuiltYear()
    {
        return $this->builtYear;
    }

    /**
     * @param mixed $builtYear
     */
    public function setBuiltYear($builtYear)
    {
        $this->builtYear = $builtYear;
    }

    /**
     * @return mixed
     */
    public function getCeilingHeight()
    {
        return $this->ceilingHeight;
    }

    /**
     * @param mixed $ceilingHeight
     */
    public function setCeilingHeight($ceilingHeight)
    {
        $this->ceilingHeight = $ceilingHeight;
    }

    /**
     * @return mixed
     */
    public function getGuardedBuilding()
    {
        return $this->guardedBuilding;
    }

    /**
     * @param mixed $guardedBuilding
     */
    public function setGuardedBuilding($guardedBuilding)
    {
        $this->guardedBuilding = $guardedBuilding;
    }

    /**
     * @return mixed
     */
    public function getLift()
    {
        return $this->lift;
    }

    /**
     * @param mixed $lift
     */
    public function setLift($lift)
    {
        $this->lift = $lift;
    }

    /**
     * @return mixed
     */
    public function getRubbishChute()
    {
        return $this->rubbishChute;
    }

    /**
     * @param mixed $rubbishChute
     */
    public function setRubbishChute($rubbishChute)
    {
        $this->rubbishChute = $rubbishChute;
    }

    /**
     * @return mixed
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * @param mixed $parking
     */
    public function setParking($parking)
    {
        $this->parking = $parking;
    }

    /**
     * @return mixed
     */
    public function getIsElite()
    {
        return $this->isElite;
    }

    /**
     * @param mixed $isElite
     */
    public function setIsElite($isElite)
    {
        $this->isElite = $isElite;
    }

    /**
     * @return mixed
     */
    public function getPmg()
    {
        return $this->pmg;
    }

    /**
     * @param mixed $pmg
     */
    public function setPmg($pmg)
    {
        $this->pmg = $pmg;
    }

    /**
     * @return mixed
     */
    public function getKitchen()
    {
        return $this->kitchen;
    }

    /**
     * @param mixed $kitchen
     */
    public function setKitchen($kitchen)
    {
        $this->kitchen = $kitchen;
    }

    /**
     * @return mixed
     */
    public function getToilet()
    {
        return $this->toilet;
    }

    /**
     * @param mixed $toilet
     */
    public function setToilet($toilet)
    {
        $this->toilet = $toilet;
    }

    /**
     * @return mixed
     */
    public function getShower()
    {
        return $this->shower;
    }

    /**
     * @param mixed $shower
     */
    public function setShower($shower)
    {
        $this->shower = $shower;
    }

    /**
     * @return mixed
     */
    public function getPool()
    {
        return $this->pool;
    }

    /**
     * @param mixed $pool
     */
    public function setPool($pool)
    {
        $this->pool = $pool;
    }

    /**
     * @return mixed
     */
    public function getSauna()
    {
        return $this->sauna;
    }

    /**
     * @param mixed $sauna
     */
    public function setSauna($sauna)
    {
        $this->sauna = $sauna;
    }

    /**
     * @return mixed
     */
    public function getBilliard()
    {
        return $this->billiard;
    }

    /**
     * @param mixed $billiard
     */
    public function setBilliard($billiard)
    {
        $this->billiard = $billiard;
    }

    /**
     * @return mixed
     */
    public function getDealStatus()
    {
        return $this->dealStatus;
    }

    /**
     * @param mixed $dealStatus
     * @return $this
     */
    public function setDealStatus($dealStatus)
    {
        $this->dealStatus = $dealStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayedAdv()
    {
        return $this->payedAdv;
    }

    /**
     * @param mixed $payedAdv
     * @return $this
     */
    public function setPayedAdv($payedAdv)
    {
        $this->payedAdv = $payedAdv;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getManuallyAdded()
    {
        return $this->manuallyAdded;
    }

    /**
     * @param mixed $manuallyAdded
     * @return $this
     */
    public function setManuallyAdded($manuallyAdded)
    {
        $this->manuallyAdded = $manuallyAdded;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHaggle()
    {
        return $this->haggle;
    }

    /**
     * @param mixed $haggle
     * @return $this
     */
    public function setHaggle($haggle)
    {
        $this->haggle = $haggle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMortgage()
    {
        return $this->mortgage;
    }

    /**
     * @param mixed $mortgage
     * @return $this
     */
    public function setMortgage($mortgage)
    {
        $this->mortgage = $mortgage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @param mixed $quality
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * @param mixed $commission
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSecurityPayment()
    {
        return $this->securityPayment;
    }

    /**
     * @param mixed $securityPayment
     * @return $this
     */
    public function setSecurityPayment($securityPayment)
    {
        $this->securityPayment = $securityPayment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUtilitiesIncluded()
    {
        return $this->utilitiesIncluded;
    }

    /**
     * @param mixed $utilitiesIncluded
     * @return $this
     */
    public function setUtilitiesIncluded($utilitiesIncluded)
    {
        $this->utilitiesIncluded = $utilitiesIncluded;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getElectricityIncluded()
    {
        return $this->electricityIncluded;
    }

    /**
     * @param mixed $electricityIncluded
     * @return $this
     */
    public function setElectricityIncluded($electricityIncluded)
    {
        $this->electricityIncluded = $electricityIncluded;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInternet()
    {
        return $this->internet;
    }

    /**
     * @param mixed $internet
     * @return $this
     */
    public function setInternet($internet)
    {
        $this->internet = $internet;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setAttribute(array $attrNode)
    {
        $name = $attrNode['name'];
        if ('location' == $name) {
            return $this->setLocation((new Location($this))->setOptions($attrNode));
        }
        if ('sales-agent' == $name) {
            return $this->setSalesAgent((new SalesAgent($this))->setOptions($attrNode));
        }
        if ('price' == $name) {
            return $this->setPrice((new Price($this))->setOptions($attrNode));
        }
        if ('image' == $name) {
            return $this->addImage($attrNode['value']);
        }
        if (in_array($name, ['area', 'room-space', 'living-space', 'kitchen-space', 'lot-area'])) {
            $setter = 'set' . str_replace(['-', '_'], '', $name);
            return $this->$setter((new Option($this))->setOptions($attrNode));
        }
        return parent::setAttribute($attrNode);
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
