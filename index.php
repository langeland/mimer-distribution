<?php
declare(encoding = 'utf-8');

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

/**
 * Bootstrap for the FLOW3 Framework
 *
 * @package		TYPO3
 * @version 	$Id$
 * @author		Robert Lemke <robert@typo3.org>
 * @copyright	Copyright belongs to the respective authors
 * @license		http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */

if (DIRECTORY_SEPARATOR == '/') {
	define('TYPO3_PATH_ROOT', dirname(__FILE__) . '/');
} else {
	define('TYPO3_PATH_ROOT', str_replace('\\', '/', dirname(__FILE__)) . '/');
}
require_once(TYPO3_PATH_ROOT . 'Packages/FLOW3/Classes/T3_FLOW3.php');

$framework = new T3_FLOW3();
$framework->run();
?>