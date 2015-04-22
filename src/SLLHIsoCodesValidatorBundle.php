<?php

namespace SLLH\IsoCodesValidatorBundle;

use SLLH\IsoCodesValidatorBundle\DependencyInjection\Compiler\TranslationPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class SLLHIsoCodesValidatorBundle
 *
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
class SLLHIsoCodesValidatorBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new TranslationPass());
    }
}
