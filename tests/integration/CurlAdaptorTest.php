<?php
class CurlAdaptorTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    // tests
    public function testCurlAdaptorGetMethod()
    {
        $url = 'https://api.mongohq.com/databases/wine/collections/australian/documents?_apikey=9guoo8ndq9hj5y1ur1w1';
        $curlAdaptor = new CurlAdaptor();
        $expected = '[{"_id":{"$oid": "52eccbcb381d39ba2a000002"},"name":"Monteillet Condrieu 2011"},{"_id":{"$oid": "52ecccd75c2ecaa469000021"},"name":"Chene Condrieu","description":"This is a drier style of Condrieu, but it presents the richness typical to the Appellation. Opulent on the nose, it offers aromas of white flowers, apricot and dried fruits with a hint of spice. Sweetness and acidity are well balanced, giving a rich, yet fresh, wine. On the palate, flavours of stone fruits and almond are very delicate and create a long lasting finish.","grape":"Viognier"},{"_id":{"$oid": "52eccdbde502ad98dd000320"},"name":"Niero Condrieu Chery","description":"This wine is being sold under the marginscheme for VAT. No Vat may be reclaimed or recoverable upon export.","grape":"viognier","vintage":"2006"}]';
        $response = $curlAdaptor->sendHttpGet($url);
        $this->assertEquals($expected, $response);
    }

}