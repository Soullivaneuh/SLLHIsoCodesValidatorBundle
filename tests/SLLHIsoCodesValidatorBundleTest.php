<?php

namespace SLLH\IsoCodesValidatorBundle\Tests;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractContainerBuilderTestCase;
use SLLH\IsoCodesValidatorBundle\SLLHIsoCodesValidatorBundle;

class SLLHIsoCodesValidatorBundleTest extends AbstractContainerBuilderTestCase
{
    /**
     * @var SLLHIsoCodesValidatorBundle
     */
    protected $bundle;

    protected function setUp()
    {
        parent::setUp();

        $this->bundle = new SLLHIsoCodesValidatorBundle();
    }

    public function testBuild()
    {
        $this->bundle->build($this->container);

        $this->assertCount(2, $this->container->getCompilerPassConfig()->getPasses(), 'Bundle must contains a TranslationPass instance.');
        $this->assertInstanceOf(
            'SLLH\IsoCodesValidatorBundle\DependencyInjection\Compiler\TranslationPass',
            $this->container->getCompilerPassConfig()->getPasses()[1],
            'Bundle must contains a TranslationPass instance.'
        );
    }
}
