<?php

namespace SLLH\IsoCodesValidatorBundle;

use SLLH\IsoCodesValidatorBundle\DependencyInjection\Compiler\TranslationPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

trigger_error('The '.__NAMESPACE__.'\SLLHIsoCodesValidatorBundle class is deprecated since version 1.1. Use SLLH\IsoCodesValidator\Bundle\SLLHIsoCodesValidatorBundle instead.', E_USER_DEPRECATED);

/**
 * Class SLLHIsoCodesValidatorBundle
 *
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
class SLLHIsoCodesValidatorBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new TranslationPass());
    }
}
