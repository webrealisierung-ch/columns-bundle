<?php

/**
 * @copyright 2017 Webrealisierung GmbH
 *
 * @license LGPL-3.0+
 */

/**
 * @author Daniel Steuri <mail@webrealisierung.ch>
 */

$GLOBALS['TL_DCA']['tl_article']['palettes']['default']=preg_replace('/{expert_legend:hide}/','{article_width_legend:hide},article_fullwidth,article_bg_color;{expert_legend}',$GLOBALS['TL_DCA']['tl_article']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_article']['fields']['article_fullwidth'] = array
(
    'label'                   =>  &$GLOBALS['TL_LANG']['tl_article']['article_fullwidth'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['article_bg_color'] = array
(
    'label'                   =>  &$GLOBALS['TL_LANG']['tl_article']['article_bg_color'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('color1', 'color2', 'color3', 'color4'),
    'default'                 => '',
    'eval'                    => array(
        'tl_class'=>'w50',
        'includeBlankOption' => true
    ),
    'reference'               => array(
        'color1' => &$GLOBALS['TL_LANG']['tl_article']['color1'],
        'color2' => &$GLOBALS['TL_LANG']['tl_article']['color2'],
        'color3' => &$GLOBALS['TL_LANG']['tl_article']['color3'],
        'color4' => &$GLOBALS['TL_LANG']['tl_article']['color4']
    ),
    'sql'                     => "varchar(32) NOT NULL default ''"
);