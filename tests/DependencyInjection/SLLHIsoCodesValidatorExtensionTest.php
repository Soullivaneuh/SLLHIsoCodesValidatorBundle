<?php

namespace SLLH\IsoCodesValidatorBundle\Tests\DependencyInjection;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use SLLH\IsoCodesValidatorBundle\DependencyInjection\SLLHIsoCodesValidatorExtension;

class SLLHIsoCodesValidatorExtensionTest extends AbstractExtensionTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function getContainerExtensions()
    {
        return array(
            new SLLHIsoCodesValidatorExtension(),
        );
    }

    public function testLoad()
    {
        $this->load();
    }
}
