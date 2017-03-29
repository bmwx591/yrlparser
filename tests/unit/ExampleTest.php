<?php
//include '/home/ivan/www/yrlparser/src/YRL.php';
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
//        $name = 'realty.yrl';
        $name = 'kvartal.yrl';
        $this->parser->parse(__DIR__ . DIRECTORY_SEPARATOR . $name);
    }

    public function _after()
    {
        $this->parser = null;
    }

    // tests

    public function testParseYRL()
    {
        foreach ($this->parser->getOffers() as $offer) {
            var_dump($offer);
        }
        die;
    }

    public function testOffersCount()
    {
        $this->assertEquals(6, $this->parser->getOffersCount());
    }

    public function testGenerationDate()
    {
        $this->assertEquals('2010-12-11T12:00:00+04:00', $this->parser->getDate());
    }
}
