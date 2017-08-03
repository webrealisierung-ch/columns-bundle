<?php

/**
 * @copyright 2017 Webrealisierung GmbH
 *
 * @license LGPL-3.0+
 */

/**
 * @author Daniel Steuri <mail@webrealisierung.ch>
 */

/**
 * Hook
 */
$GLOBALS['TL_HOOKS']['getContentElement'][] = array('WrColumnsService', 'addContentWidth');
$GLOBALS['TL_HOOKS']['getArticle'][] = array('WrColumnsService', 'addArticleWidth');
