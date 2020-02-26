<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Account\Types;

use DTS\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestResponse;

class GetAPaymentPolicyByIDRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetAPaymentPolicyByIDRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestResponse', $this->obj);
    }

    public function testExtendsPaymentPolicy()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\PaymentPolicy', $this->obj);
    }
}
