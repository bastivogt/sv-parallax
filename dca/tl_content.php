<?php
/**
 * Created by PhpStorm.
 * User: sebastian
 * Date: 06.10.15
 * Time: 13:16
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['svParallaxStart'] = '{type_legend},type;svParallaxInlineStyle;{source_legend},singleSRC;{svParallax_options_legend},svParallaxPositionX,svParallaxPositionY,svParallaxSpeed,svParallaxZIndex,svParallaxBleed,svParallaxIosFix,svParallaxAndroidFix;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;';

$GLOBALS['TL_DCA']['tl_content']['palettes']['svParallaxEnd'] = '{type_legend},type;';


// inlineStyle
$GLOBALS['TL_DCA']['tl_content']['fields']['svParallaxInlineStyle'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['svParallaxInlineStyle'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'textarea',
    'eval' => array('mandatory'=>false, 'allowHtml'=>false, 'class'=>'monospace', 'rte'=>'ace|html'),
    'sql' => "mediumtext NULL"
);


// positionX
$GLOBALS['TL_DCA']['tl_content']['fields']['svParallaxPositionX'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['svParallaxPositionX'],
    'default'                 => 'center',
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'mandatory' => true),
    'sql'                     => "char(50) NOT NULL default 'center'"
);

// positionY
$GLOBALS['TL_DCA']['tl_content']['fields']['svParallaxPositionY'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['svParallaxPositionY'],
    'default'                 => 'center',
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'mandatory' => true),
    'sql'                     => "char(50) NOT NULL default 'center'"
);

// speed
$GLOBALS['TL_DCA']['tl_content']['fields']['svParallaxSpeed'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['svParallaxSpeed'],
    'default'                 => '0.2',
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'mandatory' => true),
    'sql'                     => "char(10) NOT NULL default '0.2'"
);

// zIndex
$GLOBALS['TL_DCA']['tl_content']['fields']['svParallaxZIndex'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['svParallaxZIndex'],
    'default'                 => '-100',
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'mandatory' => true),
    'sql'                     => "char(10) NOT NULL default '-100'"
);

// bleed
$GLOBALS['TL_DCA']['tl_content']['fields']['svParallaxBleed'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['svParallaxBleed'],
    'default'                 => '0',
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'mandatory' => true),
    'sql'                     => "char(10) NOT NULL default '0'"
);

// iosFix
$GLOBALS['TL_DCA']['tl_content']['fields']['svParallaxIosFix'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['svParallaxIosFix'],
    'default'                 => 'true',
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('false', 'true'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_svParallaxBool'],
    'eval'                    => array('tl_class'=>'w50', 'mandatory' => true),
    'sql'                     => "char(10) NOT NULL default 'true'"
);

// androidFix
$GLOBALS['TL_DCA']['tl_content']['fields']['svParallaxAndroidFix'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['svParallaxAndroidFix'],
    'default'                 => 'true',
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('false', 'true'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_svParallaxBool'],
    'eval'                    => array('tl_class'=>'w50', 'mandatory' => true),
    'sql'                     => "char(10) NOT NULL default 'true'"
);