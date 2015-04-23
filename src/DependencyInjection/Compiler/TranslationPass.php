<?php

namespace SLLH\IsoCodesValidatorBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Finder\Finder;

/**
 * Register IsoCodesValidator translations files
 *
 * Files resources register method based on
 * Symfony\Bundle\FrameworkBundle\DependencyInjection\FrameworkExtension::registerTranslatorConfiguration
 *
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
class TranslationPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $translator = $container->findDefinition('translator.default');

        $r = new \ReflectionClass('SLLH\IsoCodesValidator\IsoCodesConstraintValidator');
        $translationsDir = dirname($r->getFilename()).'/Resources/translations';

        $finder = Finder::create()
            ->files()
            ->filter(function (\SplFileInfo $file) {
                return 2 === substr_count($file->getBasename(), '.') && preg_match('/\.\w+$/', $file->getBasename());
            })
            ->in($translationsDir)
        ;

        foreach ($finder as $file) {
            list($domain, $locale, $format) = explode('.', $file->getBasename(), 3);
            $translator->addMethodCall('addResource', array($format, (string) $file, $locale, $domain));
        }
    }
}
