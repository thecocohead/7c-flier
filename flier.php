<?php
/**
 * 7c Flier Sync
 *
 * @package           7c-flier
 * @author            7th Circle Music Collective Community
 * @copyright         2023 7th Circle
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       7th Circle Flier Sync
 * Plugin URI:        https://github.com/thecocohead/7c-flier
 * Description:       Syncs photos from gdrive folder to The Event Calendar
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            7th Circle Music Collective Community
 * Author URI:        https://7thcirclemusiccollective.org/
 * Text Domain:       7c-flier
 * License:           GPL v3
 * License URI:       https://github.com/thecocohead/7c-flier/blob/main/LICENSE
 */

//other files used
require 'callAPI.php';

$res = callAPI("GET", "url");
echo $res;
?>