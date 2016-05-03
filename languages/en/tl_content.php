<?php
/**
 * Created by PhpStorm.
 * User: sebastian
 * Date: 02.05.16
 * Time: 14:00
 */

$GLOBALS['TL_LANG']['tl_svParallaxBool']['true'] = 'true';
$GLOBALS['TL_LANG']['tl_svParallaxBool']['false'] = 'false';

// inlineStyle
$GLOBALS['TL_LANG']['tl_module']['svParallaxInlineStyle'][0] = 'Inline style';
$GLOBALS['TL_LANG']['tl_module']['svParallaxInlineStyle'][1] = 'Enter here your CSS inline style.';
// positionX
$GLOBALS['TL_LANG']['tl_content']['svParallaxPositionX'][0] = 'Position x';
$GLOBALS['TL_LANG']['tl_content']['svParallaxPositionX'][1] = 'This is analogous to the background-position css property. Specify coordinates as top, bottom, right, left, center, or pixel values (e.g. -10px 0px). The parallax image will be positioned as close to these values as possible while still covering the target element.';

// positionY
$GLOBALS['TL_LANG']['tl_content']['svParallaxPositionY'][0] = 'Position y';
$GLOBALS['TL_LANG']['tl_content']['svParallaxPositionY'][1] = 'This is analogous to the background-position css property. Specify coordinates as top, bottom, right, left, center, or pixel values (e.g. -10px 0px). The parallax image will be positioned as close to these values as possible while still covering the target element.';

// speed
$GLOBALS['TL_LANG']['tl_content']['svParallaxSpeed'][0] = 'Speed';
$GLOBALS['TL_LANG']['tl_content']['svParallaxSpeed'][1] = 'The speed at which the parallax effect runs. 0.0 means the image will appear fixed in place, and 1.0 the image will flow at the same speed as the page content.';

// zIndex
$GLOBALS['TL_LANG']['tl_content']['svParallaxZIndex'][0] = 'Z index';
$GLOBALS['TL_LANG']['tl_content']['svParallaxZIndex'][1] = 'The z-index value of the fixed-position elements. By default these will be behind everything else on the page.';

// bleed
$GLOBALS['TL_LANG']['tl_content']['svParallaxBleed'][0] = 'Bleed';
$GLOBALS['TL_LANG']['tl_content']['svParallaxBleed'][1] = 'You can optionally set the parallax mirror element to extend a few pixels above and below the mirrored element. This can hide slow or stuttering scroll events in certain browsers.';

// iosFix
$GLOBALS['TL_LANG']['tl_content']['svParallaxIosFix'][0] = 'iOS fix';
$GLOBALS['TL_LANG']['tl_content']['svParallaxIosFix'][1] = 'iOS devices are incompatable with this plugin. If true, this option will set the parallax image as a static, centered background image whenever it detects an iOS user agent. Disable this if you wish to implement your own graceful degradation.';

// androidFix
$GLOBALS['TL_LANG']['tl_content']['svParallaxAndroidFix'][0] = 'Android fix';
$GLOBALS['TL_LANG']['tl_content']['svParallaxAndroidFix'][1] = 'If true, this option will set the parallax image as a static, centered background image whenever it detects an Android user agent. Disable this if you wish to enable the parallax scrolling effect on Android devices';