# IsoCodes Validator Bundle

[![Build Status](https://travis-ci.org/Soullivaneuh/SLLHIsoCodesValidatorBundle.svg?branch=master)](https://travis-ci.org/Soullivaneuh/SLLHIsoCodesValidatorBundle)

## TODO

 * Add documentation
 * Add lines note about not implemented already existing validators (with list of them)
 * Push stable version
 * Make a iso-codes-sandbox project for demo
 * Add author PHP doc tags
 * Add Licence file
 * Try to implement https://github.com/ronanguilloux/IsoCodes/blob/master/src/IsoCodes/OrganismeType12NormeB2.php (Maybe with a special form type?)
 * Contributing: Precise that core validation issue must be opened on vendor project
 * Make this library compliant to Symfony and Silex (Works actually on Symfony but without translations):
   * Move `Resources` onto `src` dir
   * Make a final class `Validation` like this:
   * Make a Symfony bundle with translations detection like this: https://github.com/symfony/FrameworkBundle/blob/master/DependencyInjection/FrameworkExtension.php#L664-L668
   * Make a Silex provider with translations detection like this: https://github.com/fabpot/Silex/blob/master/src/Silex/Provider/ValidatorServiceProvider.php#L36-L40
