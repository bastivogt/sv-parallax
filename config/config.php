<?php
/**
 * sv-bootstrap-contao
 * @author     Sebastian Vogt
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */
/**
 * Content Elements
 */


$GLOBALS['TL_CTE']['svParallax']['svParallaxStart'] = 'ContentSvParallaxStart';
$GLOBALS['TL_CTE']['svParallax']['svParallaxEnd'] = 'ContentSvParallaxEnd';



/**
 * Wrappers
 */

// start
$GLOBALS['TL_WRAPPERS']['start'][] = 'svParallaxStart';


// stop
$GLOBALS['TL_WRAPPERS']['stop'][] = 'svParallaxEnd';



