<?php

/**
 * @copyright 2017 Webrealisierung GmbH
 *
 * @license LGPL-3.0+
 */

/**
 * @author Daniel Steuri <mail@webrealisierung.ch>
 */

foreach($GLOBALS['TL_DCA']['tl_content']['palettes'] as $row => $entry){
    if($row!="__selector__") {
        $GLOBALS['TL_DCA']['tl_content']['palettes'][$row] = preg_replace("/{expert_legend:hide}/","{content_width_legend:hide},content_width,content_orientation,content_bg_image,content_bg_image_text,content_bg_color;{expert_legend:hide}",$GLOBALS['TL_DCA']['tl_content']['palettes'][$row]);
    }
}
$GLOBALS['TL_DCA']['tl_content']['fields']['content_width'] = array
(
    'label'                   =>  &$GLOBALS['TL_LANG']['tl_content']['content_width'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('full','three-quarters','two-thirds', 'half', 'third','quarter'),
    'default'                 => 'full',
    'eval'                    => array(
        'tl_class'=>'w50',
        'helpwizard'=> true
    ),
    'reference'               => array(
        'full' => &$GLOBALS['TL_LANG']['tl_content']['full'],
        'three-quarters' => &$GLOBALS['TL_LANG']['tl_content']['three-quarters'],
        'two-thirds' => &$GLOBALS['TL_LANG']['tl_content']['two-thirds'],
        'half' => &$GLOBALS['TL_LANG']['tl_content']['half'],
        'third' => &$GLOBALS['TL_LANG']['tl_content']['third'],
        'quarter' => &$GLOBALS['TL_LANG']['tl_content']['quarter']
    ),
    'sql'                     => "varchar(32) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['content_orientation'] = array
(
    'label'                   =>  &$GLOBALS['TL_LANG']['tl_content']['content_orientation'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('wr_ce_left', 'wr_ce_center', 'wr_ce_right'),
    'default'                 => 'left',
    'eval'                    => array(
        'tl_class'=>'w50',
        'helpwizard'=> true
    ),
    'reference'               => array(
        'wr_ce_left' => &$GLOBALS['TL_LANG']['tl_content']['left'],
        'wr_ce_center' => &$GLOBALS['TL_LANG']['tl_content']['center'],
        'wr_ce_right' => &$GLOBALS['TL_LANG']['tl_content']['right']
    ),
    'sql'                     => "varchar(32) NOT NULL default ''"
);
