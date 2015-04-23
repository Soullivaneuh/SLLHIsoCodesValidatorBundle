# SLLHIsoCodesValidatorBundle

Provides easy implementation of [IsoCodesValidator](https://github.com/Soullivaneuh/IsoCodesValidator).

[![Latest Stable Version](https://poser.pugx.org/sllh/iso-codes-validator-bundle/v/stable)](https://packagist.org/packages/sllh/iso-codes-validator-bundle)
[![Latest Unstable Version](https://poser.pugx.org/sllh/iso-codes-validator-bundle/v/unstable)](https://packagist.org/packages/sllh/iso-codes-validator-bundle)
[![License](https://poser.pugx.org/sllh/iso-codes-validator-bundle/license)](https://packagist.org/packages/sllh/iso-codes-validator-bundle)

[![Total Downloads](https://poser.pugx.org/sllh/iso-codes-validator-bundle/downloads)](https://packagist.org/packages/sllh/iso-codes-validator-bundle)
[![Monthly Downloads](https://poser.pugx.org/sllh/iso-codes-validator-bundle/d/monthly)](https://packagist.org/packages/sllh/iso-codes-validator-bundle)
[![Daily Downloads](https://poser.pugx.org/sllh/iso-codes-validator-bundle/d/daily)](https://packagist.org/packages/sllh/iso-codes-validator-bundle)

[![Build Status](https://travis-ci.org/Soullivaneuh/SLLHIsoCodesValidatorBundle.svg?branch=master)](https://travis-ci.org/Soullivaneuh/SLLHIsoCodesValidatorBundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Soullivaneuh/SLLHIsoCodesValidatorBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Soullivaneuh/SLLHIsoCodesValidatorBundle/?branch=master)
[![Code Climate](https://codeclimate.com/github/Soullivaneuh/SLLHIsoCodesValidatorBundle/badges/gpa.svg)](https://codeclimate.com/github/Soullivaneuh/SLLHIsoCodesValidatorBundle)
[![Coverage Status](https://coveralls.io/repos/Soullivaneuh/SLLHIsoCodesValidatorBundle/badge.svg?branch=master)](https://coveralls.io/r/Soullivaneuh/SLLHIsoCodesValidatorBundle?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/af4f2270-b639-4c04-bee7-773d7a22d93f/mini.png)](https://insight.sensiolabs.com/projects/af4f2270-b639-4c04-bee7-773d7a22d93f)

## Prerequisites

This version of the bundle requires Symfony 2.3+.

## Installation

### Download using composer

Add SLLHIsoCodesValidatorBundle by running the command:

``` bash
$ php composer.phar require sllh/iso-codes-validator-bundle "~1.0"
```

Composer will install the bundle to your project's `vendor/sllh` directory.

### Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new SLLH\IsoCodesValidatorBundle\SLLHIsoCodesValidatorBundle(),
    );
}
```

## Usage

Usage documentation can be found [IsoCodesValidator](https://github.com/Soullivaneuh/IsoCodesValidator) project.

## License

This bundle is under the MIT license. See the complete license on the [LICENSE](https://github.com/Soullivaneuh/SLLHIsoCodesValidatorBundle/blob/master/LICENSE) file.
