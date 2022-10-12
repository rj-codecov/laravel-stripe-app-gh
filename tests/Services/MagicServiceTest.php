<?php

namespace Tests\Services;

use Tests\TestCase;
use App\Services\MagicService;

class MagicServiceTest extends TestCase
{
    protected $parser;

    public function setUp(): void
    {
        parent::setUp();
        $this->MagicService = new MagicService;
    }

    /**
     * Test a Magic function 
     * @return void
     */
    public function testUncoveredFunctionWhichReturnsSeven() {
        $this->assertEquals(7, $this->MagicService->uncoveredFunctionWhichReturnsSeven());
    }

    public function testAnotherUncoveredFunction()
    {
        $this->assertEquals(2, $this->MagicService->anotherUncoveredFunction());
    }

    public function testCheckCheckCheck() {
        $this->assertEquals("check", $this->MagicService->checkCheckCheck());
    }

    public function testDemoFunction()
    {
        $this->assertEquals(42, $this->MagicService->demoFunction());
    }

    public function testAnotherFunction() {
        $this->assertEquals(20, $this->MagicService->anotherFunction());
    }

    public function testJustAnotherOne() {
        $this->assertEquals(45, $this->MagicService->justAnotherOne());
    }

    public function testMoreUncoveredCode() {
        $this->assertEquals(45, $this->MagicService->moreUncoveredCode());
    }

    public function testUncoveredFunction() {
        $this->assertEquals(40, $this->MagicService->uncoveredFunction());
    }

    public function testNormalFunction() {
        $this->assertEquals(50, $this->MagicService->normalFunction());
    }

    public function testGetEleven() {
        $this->assertEquals(11, $this->MagicService->getEleven());
    }

    public function testGetTen() {
        $this->assertEquals(10, $this->MagicService->getTen());
    }

    public function testGetFive() {
        $this->assertEquals(5, $this->MagicService->getFive());
    }

    public function testGetSeventy() {
        $this->assertEquals(70, $this->MagicService->getSeventy());
    }

    public function testGetFortyTwo() {
        $this->assertEquals(42, $this->MagicService->getFortyTwo());
    }

    public function testGetTwentySeven() {
        $this->assertEquals(27, $this->MagicService->getTwentySeven());
    }

    public function testNewProductionFunction() {
        $this->assertIsArray($this->MagicService->newProductionFunction());
    }
}