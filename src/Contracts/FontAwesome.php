<?php
/**
 * Backdrop Core ( src/Contracts/Assets/FontAwesome.php )
 *
 * @package   Backdrop Core
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @author    Benjamin Lu ( https://getbenonit.com )
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\FontAwesome\Contracts;

/**
 * Regiser Menu Class
 */
interface FontAwesome {
	/**
	 * Loads theme_enqueue();
	 *
	 * The theme_enqueue(); is used to define any scripts and styles that's going to be used part of a theme.
	 *
	 * @since  3.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue();
}