<?php
/**
 * SenderStateTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  BitPesa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * BitPesa API
 *
 * Reference documentation for the BitPesa API V1
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-beta2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace BitPesa;

use PHPUnit\Framework\TestCase;

/**
 * SenderStateTest Class Doc Comment
 *
 * @category    Class
 * @description The state of the sender. Can be one of the following:  - &#x60;initial&#x60;: When a sender is created and has not been through any KYC checking (cannot transact) - &#x60;verified&#x60;: A sender has passed sanction list checks (cannot transact) - &#x60;approved&#x60;: The sender has passed both KYC and sanction checks (can transact) - &#x60;banned&#x60;: An admin has banned the sender (cannot transact) - &#x60;rejected&#x60;: The sender has failed sanction list checks (cannot transact) - &#x60;disabled&#x60;: A sender is put into this state as a result of a delete request via the API (cannot transact)
 * @package     BitPesa
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class SenderStateTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "SenderState"
     */
    public function testSenderState()
    {
    }
}
