<?php

/**
 * Contao TimelineJS.
 *
 */

/*
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['timeline'] = array
(
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['timeline'],
    'exclude'          => true,
    'inputType'        => 'select',
    //'options_callback' => CallbackFactory::service('timelinejs.dca.component-callbacks', 'getTimelineOptions'),
    'eval'             => array(
        'mandatory'          => true,
        'includeBlankOption' => true,
        'chosen'             => true,
        'tl_class'           => 'w50 wizard',
    ),
    //'wizard'           => array(
    //    CallbackFactory::service('timelinejs.dca.component-callbacks', 'getTimelineEditButton')
    //),
    'sql'              => "int(10) unsigned NOT NULL"
);
