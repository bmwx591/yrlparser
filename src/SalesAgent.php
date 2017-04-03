<?php

namespace bmwx591\yrl;

/**
 * Class SalesAgent
 * @package bmwx591\yrl
 */
class SalesAgent extends NestedObject
{
    protected $name;

    protected $phones = [];

    protected $category;

    protected $organization;

    protected $agencyId;

    protected $url;

    protected $email;

    protected $photo;

    protected $partner;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * @param string $phone
     * @return $this
     */
    public function addPhone($phone)
    {
        array_push($this->phones, trim($phone));
        return $this;
    }

    /**
     * @param array $phones
     * @return $this
     */
    public function setPhones(array $phones)
    {
        $this->phones = $phones;
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
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param string $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyId()
    {
        return $this->agencyId;
    }

    /**
     * @param string $agencyId
     * @return $this
     */
    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     * @return $this
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartner()
    {
        return $this->partner;
    }

    /**
     * @param string $partner
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->partner = $partner;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setAttribute(array $attrNode)
    {
        if ('phone' == $attrNode['name']) {
            return $this->addPhone($attrNode['value']);
        }
        return parent::setAttribute($attrNode);
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        parent::isValid();
        if (is_null($this->category)) {
             $this->addError('Required sales agent field "category" is empty');
        }
        if (empty($this->phones)) {
            $this->addError('Required sales agent field "phones" is empty');
        }
        return $this->hasErrors();
    }
}
