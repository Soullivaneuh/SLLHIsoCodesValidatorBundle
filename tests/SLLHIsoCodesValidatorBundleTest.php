<?php

namespace SLLH\IsoCodesValidatorBundle\Tests;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractContainerBuilderTestCase;
use SLLH\IsoCodesValidatorBundle\SLLHIsoCodesValidatorBundle;

/**
 * @group legacy
 */
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

        $passes = $this->container->getCompilerPassConfig()->getPasses();
        $this->assertCount(2, $passes, 'Bundle must contains a TranslationPass instance.');
        $this->assertInstanceOf(
            'SLLH\IsoCodesValidatorBundle\DependencyInjection\Compiler\TranslationPass',
            $passes[1],
            'Bundle must contains a TranslationPass instance.'
        );
    }
}
