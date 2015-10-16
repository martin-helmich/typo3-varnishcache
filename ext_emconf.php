<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Kevin Purrmann <entwicklung@purrmann-websolutions.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Varnishcache',
    'description' => 'This extension provides varnish functionality to TYPO3 instances. Use ESI-Tags and clear varnish cache from TYPO3.',
    'category' => 'plugin',
    'author' => 'Kevin Purrmann',
    'author_company' => 'Purrmann Websolutions',
    'author_email' => 'entwicklung@purrmann-websolutions.de',
    'dependencies' => 'extbase,fluid',
    'state' => 'stable',
    'clearCacheOnLoad' => '1',
    'version' => '0.1',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-7.99.99',
            'extbase' => '6.2.0-7.99.99',
            'fluid' => '6.2.0-7.99.99',
        )
    )
);