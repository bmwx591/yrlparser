<?php

namespace bmwx591\yrl\offer;

use bmwx591\yrl\Object;
use bmwx591\yrl\Location;
use bmwx591\yrl\Option;
use bmwx591\yrl\Price;
use bmwx591\yrl\SalesAgent;

/**
 * Class Offer
 * @package bmwx591\yrl\offer
 */
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

    /**
     * @var Location
     */
    protected $location;

    protected $images = [];

    /**
     * @var SalesAgent
     */
    protected $salesAgent;

    /**
     * @var Price
     */
    protected $price;

    /**
     * @var Option
     */
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

    /**
     * @var Option
     */
    protected $lotArea;

    protected $lotType;

    protected $notForAgents;

    protected $prepayment;

    protected $rentPledge;

    protected $agentFee;

    protected $withPets;

    protected $withChildren;

    protected $cleaningIncluded;

    protected $minRentPeriod;

    /**
     * @return Option
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param Option $area
     * @return $this
     */
    public function setArea(Option $area)
    {
        $this->area = $area;
        return $this;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Location $location
     * @return $this
     */
    public function setLocation(Location $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Price $price
     * @return $this
     */
    public function setPrice(Price $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param string $creationDate
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastUpdateDate()
    {
        return $this->lastUpdateDate;
    }

    /**
     * @param string $lastUpdateDate
     * @return $this
     */
    public function setLastUpdateDate($lastUpdateDate)
    {
        $this->lastUpdateDate = $lastUpdateDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * @param string $expireDate
     * @return $this
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getVas()
    {
        return $this->vas;
    }

    /**
     * @param string $vas
     * @return $this
     */
    public function setVas($vas)
    {
        $this->vas = $vas;
        return $this;
    }

    /**
     * @return SalesAgent
     */
    public function getSalesAgent()
    {
        return $this->salesAgent;
    }

    /**
     * @param SalesAgent $salesAgent
     * @return $this
     */
    public function setSalesAgent(SalesAgent $salesAgent)
    {
        $this->salesAgent = $salesAgent;
        return $this;
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
        array_push($this->images, trim($value));
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
     * @return string
     */
    public function getWaterSupply()
    {
        return $this->waterSupply;
    }

    /**
     * @param string $waterSupply
     * @return $this
     */
    public function setWaterSupply($waterSupply)
    {
        $this->waterSupply = $waterSupply;
        return $this;
    }

    /**
     * @return string
     */
    public function getSewerageSupply()
    {
        return $this->sewerageSupply;
    }

    /**
     * @param string $sewerageSupply
     * @return $this
     */
    public function setSewerageSupply($sewerageSupply)
    {
        $this->sewerageSupply = $sewerageSupply;
        return $this;
    }

    /**
     * @return string
     */
    public function getElectricitySupply()
    {
        return $this->electricitySupply;
    }

    /**
     * @param string $electricitySupply
     * @return $this
     */
    public function setElectricitySupply($electricitySupply)
    {
        $this->electricitySupply = $electricitySupply;
        return $this;
    }

    /**
     * @return integer
     */
    public function getElectricCapacity()
    {
        return $this->electricCapacity;
    }

    /**
     * @param integer $electricCapacity
     * @return $this
     */
    public function setElectricCapacity($electricCapacity)
    {
        $this->electricCapacity = $electricCapacity;
        return $this;
    }

    /**
     * @return string
     */
    public function getGasSupply()
    {
        return $this->gasSupply;
    }

    /**
     * @param string $gasSupply
     * @return $this
     */
    public function setGasSupply($gasSupply)
    {
        $this->gasSupply = $gasSupply;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeatingSupply()
    {
        return $this->heatingSupply;
    }

    /**
     * @param string $heatingSupply
     * @return $this
     */
    public function setHeatingSupply($heatingSupply)
    {
        $this->heatingSupply = $heatingSupply;
        return $this;
    }

    /**
     * @return string
     */
    public function getRenovation()
    {
        return $this->renovation;
    }

    /**
     * @param string $renovation
     * @return $this
     */
    public function setRenovation($renovation)
    {
        $this->renovation = $renovation;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return integer
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @param integer $rooms
     * @return $this
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
        return $this;
    }

    /**
     * @return integer
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param integer $floor
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
        return $this;
    }

    /**
     * @return string
     */
    public function getWindowView()
    {
        return $this->windowView;
    }

    /**
     * @param string $windowView
     * @return $this
     */
    public function setWindowView($windowView)
    {
        $this->windowView = $windowView;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getFloorCovering()
    {
        return $this->floorCovering;
    }

    /**
     * @param string $floorCovering
     * @return $this
     */
    public function setFloorCovering($floorCovering)
    {
        $this->floorCovering = $floorCovering;
        return $this;
    }

    /**
     * @return integer
     */
    public function getFloorsTotal()
    {
        return $this->floorsTotal;
    }

    /**
     * @param integer $floorsTotal
     * @return $this
     */
    public function setFloorsTotal($floorsTotal)
    {
        $this->floorsTotal = $floorsTotal;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingName()
    {
        return $this->buildingName;
    }

    /**
     * @param string $buildingName
     * @return $this
     */
    public function setBuildingName($buildingName)
    {
        $this->buildingName = $buildingName;
        return $this;
    }

    /**
     * @return integer
     */
    public function getBuiltYear()
    {
        return $this->builtYear;
    }

    /**
     * @param integer $builtYear
     * @return $this
     */
    public function setBuiltYear($builtYear)
    {
        $this->builtYear = $builtYear;
        return $this;
    }

    /**
     * @return float
     */
    public function getCeilingHeight()
    {
        return $this->ceilingHeight;
    }

    /**
     * @param float $ceilingHeight
     * @return $this
     */
    public function setCeilingHeight($ceilingHeight)
    {
        $this->ceilingHeight = $ceilingHeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getGuardedBuilding()
    {
        return $this->guardedBuilding;
    }

    /**
     * @param string $guardedBuilding
     * @return $this
     */
    public function setGuardedBuilding($guardedBuilding)
    {
        $this->guardedBuilding = $guardedBuilding;
        return $this;
    }

    /**
     * @return string
     */
    public function getLift()
    {
        return $this->lift;
    }

    /**
     * @param string $lift
     * @return $this
     */
    public function setLift($lift)
    {
        $this->lift = $lift;
        return $this;
    }

    /**
     * @return string
     */
    public function getRubbishChute()
    {
        return $this->rubbishChute;
    }

    /**
     * @param string $rubbishChute
     * @return $this
     */
    public function setRubbishChute($rubbishChute)
    {
        $this->rubbishChute = $rubbishChute;
        return $this;
    }

    /**
     * @return string
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * @param string $parking
     * @return $this
     */
    public function setParking($parking)
    {
        $this->parking = $parking;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsElite()
    {
        return $this->isElite;
    }

    /**
     * @param string $isElite
     * @return $this
     */
    public function setIsElite($isElite)
    {
        $this->isElite = $isElite;
        return $this;
    }

    /**
     * @return string
     */
    public function getPmg()
    {
        return $this->pmg;
    }

    /**
     * @param string $pmg
     * @return $this
     */
    public function setPmg($pmg)
    {
        $this->pmg = $pmg;
        return $this;
    }

    /**
     * @return string
     */
    public function getKitchen()
    {
        return $this->kitchen;
    }

    /**
     * @param string $kitchen
     * @return $this
     */
    public function setKitchen($kitchen)
    {
        $this->kitchen = $kitchen;
        return $this;
    }

    /**
     * @return string
     */
    public function getToilet()
    {
        return $this->toilet;
    }

    /**
     * @param string $toilet
     * @return $this
     */
    public function setToilet($toilet)
    {
        $this->toilet = $toilet;
        return $this;
    }

    /**
     * @return string
     */
    public function getShower()
    {
        return $this->shower;
    }

    /**
     * @param string $shower
     * @return $this
     */
    public function setShower($shower)
    {
        $this->shower = $shower;
        return $this;
    }

    /**
     * @return string
     */
    public function getPool()
    {
        return $this->pool;
    }

    /**
     * @param string $pool
     * @return $this
     */
    public function setPool($pool)
    {
        $this->pool = $pool;
        return $this;
    }

    /**
     * @return string
     */
    public function getSauna()
    {
        return $this->sauna;
    }

    /**
     * @param string $sauna
     * @return $this
     */
    public function setSauna($sauna)
    {
        $this->sauna = $sauna;
        return $this;
    }

    /**
     * @return string
     */
    public function getBilliard()
    {
        return $this->billiard;
    }

    /**
     * @param string $billiard
     * @return $this
     */
    public function setBilliard($billiard)
    {
        $this->billiard = $billiard;
        return $this;
    }

    /**
     * @return string
     */
    public function getDealStatus()
    {
        return $this->dealStatus;
    }

    /**
     * @param string $dealStatus
     * @return $this
     */
    public function setDealStatus($dealStatus)
    {
        $this->dealStatus = $dealStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayedAdv()
    {
        return $this->payedAdv;
    }

    /**
     * @param string $payedAdv
     * @return $this
     */
    public function setPayedAdv($payedAdv)
    {
        $this->payedAdv = $payedAdv;
        return $this;
    }

    /**
     * @return string
     */
    public function getManuallyAdded()
    {
        return $this->manuallyAdded;
    }

    /**
     * @param string $manuallyAdded
     * @return $this
     */
    public function setManuallyAdded($manuallyAdded)
    {
        $this->manuallyAdded = $manuallyAdded;
        return $this;
    }

    /**
     * @return string
     */
    public function getHaggle()
    {
        return $this->haggle;
    }

    /**
     * @param string $haggle
     * @return $this
     */
    public function setHaggle($haggle)
    {
        $this->haggle = $haggle;
        return $this;
    }

    /**
     * @return string
     */
    public function getMortgage()
    {
        return $this->mortgage;
    }

    /**
     * @param string $mortgage
     * @return $this
     */
    public function setMortgage($mortgage)
    {
        $this->mortgage = $mortgage;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @param string $quality
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;
        return $this;
    }

    /**
     * @return integer
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * @param integer $commission
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
        return $this;
    }

    /**
     * @return integer
     */
    public function getSecurityPayment()
    {
        return $this->securityPayment;
    }

    /**
     * @param integer $securityPayment
     * @return $this
     */
    public function setSecurityPayment($securityPayment)
    {
        $this->securityPayment = $securityPayment;
        return $this;
    }

    /**
     * @return string
     */
    public function getUtilitiesIncluded()
    {
        return $this->utilitiesIncluded;
    }

    /**
     * @param string $utilitiesIncluded
     * @return $this
     */
    public function setUtilitiesIncluded($utilitiesIncluded)
    {
        $this->utilitiesIncluded = $utilitiesIncluded;
        return $this;
    }

    /**
     * @return string
     */
    public function getElectricityIncluded()
    {
        return $this->electricityIncluded;
    }

    /**
     * @param string $electricityIncluded
     * @return $this
     */
    public function setElectricityIncluded($electricityIncluded)
    {
        $this->electricityIncluded = $electricityIncluded;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternet()
    {
        return $this->internet;
    }

    /**
     * @param string $internet
     * @return $this
     */
    public function setInternet($internet)
    {
        $this->internet = $internet;
        return $this;
    }

    /**
     * @return Option
     */
    public function getLotArea()
    {
        return $this->lotArea;
    }

    /**
     * @param Option $lotArea
     * @return $this
     */
    public function setLotArea(Option $lotArea)
    {
        $this->lotArea = $lotArea;
        return $this;
    }

    /**
     * @return string
     */
    public function getLotType()
    {
        return $this->lotType;
    }

    /**
     * @param string $lotType
     * @return $this
     */
    public function setLotType($lotType)
    {
        $this->lotType = $lotType;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotForAgents()
    {
        return $this->notForAgents;
    }

    /**
     * @param string $notForAgents
     * @return $this
     */
    public function setNotForAgents($notForAgents)
    {
        $this->notForAgents = $notForAgents;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrepayment()
    {
        return $this->prepayment;
    }

    /**
     * @param string $prepayment
     * @return $this
     */
    public function setPrepayment($prepayment)
    {
        $this->prepayment = $prepayment;
        return $this;
    }

    /**
     * @return string
     */
    public function getRentPledge()
    {
        return $this->rentPledge;
    }

    /**
     * @param string $rentPledge
     * @return $this
     */
    public function setRentPledge($rentPledge)
    {
        $this->rentPledge = $rentPledge;
        return $this;
    }

    /**
     * @return float
     */
    public function getAgentFee()
    {
        return $this->agentFee;
    }

    /**
     * @param float $agentFee
     * @return $this
     */
    public function setAgentFee($agentFee)
    {
        $this->agentFee = $agentFee;
        return $this;
    }

    /**
     * @return string
     */
    public function getWithPets()
    {
        return $this->withPets;
    }

    /**
     * @param string $withPets
     * @return $this
     */
    public function setWithPets($withPets)
    {
        $this->withPets = $withPets;
        return $this;
    }

    /**
     * @return string
     */
    public function getWithChildren()
    {
        return $this->withChildren;
    }

    /**
     * @param string $withChildren
     * @return $this
     */
    public function setWithChildren($withChildren)
    {
        $this->withChildren = $withChildren;
        return $this;
    }

    /**
     * @return string
     */
    public function getCleaningIncluded()
    {
        return $this->cleaningIncluded;
    }

    /**
     * @param string $cleaningIncluded
     * @return $this
     */
    public function setCleaningIncluded($cleaningIncluded)
    {
        $this->cleaningIncluded = $cleaningIncluded;
        return $this;
    }

    /**
     * @return string
     */
    public function getMinRentPeriod()
    {
        return $this->minRentPeriod;
    }

    /**
     * @param string $minRentPeriod
     * @return $this
     */
    public function setMinRentPeriod($minRentPeriod)
    {
        $this->minRentPeriod = $minRentPeriod;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setAttribute(array $attrNode)
    {
        $name = $attrNode['name'];
        if ('location' == $name) {
            return $this->setLocation((new Location())->setOptions($attrNode));
        }
        if ('sales-agent' == $name) {
            return $this->setSalesAgent((new SalesAgent())->setOptions($attrNode));
        }
        if ('price' == $name) {
            return $this->setPrice((new Price())->setOptions($attrNode));
        }
        if ('image' == $name) {
            return $this->addImage($attrNode['value']);
        }
        if (in_array($name, ['area', 'lot-area'])) {
            $setter = 'set' . str_replace(['-', '_'], '', $name);
            return $this->$setter((new Option())->setOptions($attrNode));
        }
        return parent::setAttribute($attrNode);
    }

    /**
     * Validate offer
     * @return bool
     */
    public function isValid()
    {
        if (is_null($this->type)) {
            $this->addError('Required offer field "type" is empty');
        }
        if (is_null($this->category)) {
            $this->addError('Required offer field "category" is empty');
        }
        if (is_null($this->url)) {
            $this->addError('Required offer field "url" is empty');
        }
        if (is_null($this->creationDate)) {
            $this->addError('Required offer field "creationDate" is empty');
        }
        if (is_null($this->location)) {
            $this->addError('Required offer field "location" is empty');
        }
        if (is_null($this->salesAgent)) {
            $this->addError('Required offer field "salesAgent" is empty');
        }
        if (is_null($this->price)) {
            $this->addError('Required offer field "price" is empty');
        }
        if (is_null($this->dealStatus)) {
            $this->addError('Required offer field "dealStatus" is empty');
        }
        if (is_null($this->floor)) {
            $this->addError('Required offer field "floor" is empty');
        }
        if (is_null($this->floorsTotal)) {
            $this->addError('Required offer field "floorsTotal" is empty');
        }
        if (is_null($this->buildingName)) {
            $this->addError('Required offer field "buildingName" is empty');
        }
        if (empty($this->images)) {
            $this->addError('Required offer field "images" is empty');
        }
        $this->price->isValid();
        $this->salesAgent->isValid();
        return $this->hasErrors();
    }
}
