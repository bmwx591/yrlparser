<?php

namespace bmwx591\yrl;

class YRL {

    protected $XMLReader;

    protected $uri;

    protected $schema;

    protected $date;

    protected $pathArr = [];

    protected $path;

    protected $offers = [];

    public function __construct()
    {
        $this->XMLReader = new \XMLReader();
    }

    /**
     * @return array
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $uri
     * @param string|null $schema
     * @throws \Exception
     */
    public function parse($uri, $schema = null)
    {
        $this->uri = $uri;
        $this->schema = $schema;
        $this->open();
        while ($this->read()) {
            if ('realty-feed' == $this->path) {
                $this->reed();
                if ('realty-feed/generation-date' == $this->path) {
                    $this->date = new \DateTime($this->XMLReader->value);
                    while ($this->read()) {
                        if ('realty-feed/offer' == $this->path) {
                            $this->offers[] = $this->parseOffer();
                        }
                    }
                    break;
                }
            }
        }
        $this->close();
    }

    /**
     * @throws \Exception
     */
    protected function open()
    {
        $uri = (string)$this->uri;
        if (!$this->XMLReader->open($uri)) {
            throw new \Exception("Failed to open XML file '{$uri}'");
        }

        if (!empty($this->schema)) {
            $schema = (string)$this->schema;
            if (!$this->XMLReader->setSchema($schema)) {
                throw new \Exception("Failed to open XML Schema file '{$schema}'");
            }
        }
    }

    /**
     * @return bool
     * @throws \Exception
     */
    protected function read()
    {
        $xml  = $this->XMLReader;
        if ($xml->read()) {
            if ($xml->nodeType == \XMLReader::ELEMENT && !$xml->isEmptyElement) {
                array_push($this->pathArr, $xml->name);
                $this->path = implode('/', $this->pathArr);
            } elseif ($xml->nodeType == \XMLReader::END_ELEMENT) {
                array_pop($this->pathArr);
                $this->path = implode('/', $this->pathArr);
            }
            return true;
        }
        return false;
    }

    protected function close()
    {
        $this->path = '';
        $this->pathArr = [];
        $this->XMLReader->close();
    }

    protected function parseOffer()
    {
        $xml = $this->XMLReader;
        $offer = new Offer();

        $attributes = $this->parseAttributes();
        while ($this->read()) {
            if ($xml->nodeType == \XMLReader::ELEMENT) {
                $nodes = $this->parseNode($this->path);
            } elseif ('realty-feed' == $this->path) {
                break;
            }
        }
        $offer->setOffer(['name' => 'offer', 'attributes' => $attributes, 'value' => null, 'nodes' => $nodes]);
        return $offer;
    }

    protected function parseNode($basePath)
    {
        $xml = $this->XMLReader;
        $name = $xml->name;
        $path = $basePath . '/' . $name;
        $value = '';
        $nodes = [];

        $attributes = $this->parseAttributes();

        if (!$xml->isEmptyElement) {
            while ($this->read()) {
                if ($xml->nodeType == \XMLReader::ELEMENT) {
                    $nodes[] = $this->parseNode($path);
                }
                elseif (($xml->nodeType == \XMLReader::TEXT || $xml->nodeType == \XMLReader::CDATA) && $xml->hasValue) {
                    $value .= $xml->value;
                }
                elseif ($this->path == $basePath) {
                    break;
                }
            }
        }
        $value = (trim($value)) ? $value : null;

        return ['name' => $name, 'attributes' => $attributes, 'value' => $value, 'nodes' => $nodes];
    }

    /**
     * @return array
     */
    protected function parseAttributes()
    {
        $xml = $this->XMLReader;
        $attributes = [];
        if ($xml->hasAttributes) {
            while ($xml->moveToNextAttribute()) {
                $attributes[$xml->name] = $xml->value;
            }
        }
        return $attributes;
    }
}
