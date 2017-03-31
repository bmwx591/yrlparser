<?php

/**
 * Class ExampleTest
 * @property \bmwx591\yrl\YRL $parser
 */
class ExampleTest extends \Codeception\TestCase\Test
{
    public $parser;

    public function _before()
    {
        $this->parser = new \bmwx591\yrl\YRL();
        $name = 'realty.yrl';
        $this->parser->parse(__DIR__ . DIRECTORY_SEPARATOR . $name);
    }

    public function _after()
    {
        $this->parser = null;
    }

    // tests

    public function testOffersCount()
    {
        $this->assertEquals(7, $this->parser->getOffersCount());
    }

    public function testGenerationDate()
    {
        $this->assertEquals('2010-12-11T12:00:00+04:00', $this->parser->getDate());
    }

    public function testParseYRL()
    {
        /**
         * @var Generator $offers
         */
        $offers = $this->parser->getOffers();
        $offer = $offers->current();
        $this->assertInstanceOf(\bmwx591\yrl\offer\FlatOffer::class, $offer);
        $offers->next();
        $offer = $offers->current();
        $this->assertInstanceOf(\bmwx591\yrl\offer\FlatOffer::class, $offer);
        $offers->next();
        $offer = $offers->current();
        $this->assertInstanceOf(\bmwx591\yrl\offer\RoomOffer::class, $offer);
        $offers->next();
        $offer = $offers->current();
        $this->assertInstanceOf(\bmwx591\yrl\offer\BaseOffer::class, $offer);
        $offers->next();
        $offer = $offers->current();
        $this->assertInstanceOf(\bmwx591\yrl\offer\HouseOffer::class, $offer);
        $offers->next();
        $offer = $offers->current();
        $this->assertInstanceOf(\bmwx591\yrl\offer\CommercialOffer::class, $offer);
        $offers->next();
        $offer = $offers->current();
        $this->assertInstanceOf(\bmwx591\yrl\offer\GarageOffer::class, $offer);
        $offers->next();
        $offer = $offers->current();
        $this->assertEquals(null, $offer);
    }

    public function testExpect()
    {
        $offers = $this->parser->getOffers();
//        var_dump($offers->current());
        $offers->next();
        $offers->next();
        $offers->next();
        $offers->next();
        var_dump($offers->current());
        die;
    }
}
