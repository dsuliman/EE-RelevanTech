<?php
/**
 * ExpressionEngine (https://expressionengine.com)
 *
 * @link      https://expressionengine.com/
 * @copyright Copyright (c) 2003-2017, EllisLab, Inc. (https://ellislab.com)
 * @license   https://expressionengine.com/license
 */

namespace EllisLab\ExpressionEngine\Model\Addon;

use EllisLab\ExpressionEngine\Service\Model\Model;

/**
 * Plugin Model
 */
class Plugin extends Model {
	protected static $_primary_key = 'plugin_id';
	protected static $_table_name = 'plugins';

	protected static $_typed_columns = array(
		'is_typography_related' => 'boolString'
	);

	protected $plugin_id;
	protected $plugin_name;
	protected $plugin_package;
	protected $plugin_version;
	protected $is_typography_related;

}

// EOF
