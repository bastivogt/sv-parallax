

<?php

/**
 * sv-bx-slider
 * @author     Sebastian Vogt
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'Contao\ContentSvParallaxStart' => 'system/modules/sv-parallax/elements/ContentSvParallaxStart.php',
    'Contao\ContentSvParallaxEnd' => 'system/modules/sv-parallax/elements/ContentSvParallaxEnd.php'
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'ce_sv_parallax_start' => 'system/modules/sv-parallax/templates/elements/',
    'ce_sv_parallax_end' => 'system/modules/sv-parallax/templates/elements/'
));

