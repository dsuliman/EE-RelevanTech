<?php
/**
 * ExpressionEngine (https://expressionengine.com)
 *
 * @link      https://expressionengine.com/
 * @copyright Copyright (c) 2003-2017, EllisLab, Inc. (https://ellislab.com)
 * @license   https://expressionengine.com/license
 */

namespace EllisLab\ExpressionEngine\Service\Model\Column\Serialized;

use EllisLab\ExpressionEngine\Service\Model\Column\SerializedType;

/**
 * Model Service Serialized Typed Column
 */
class Native extends SerializedType {

	protected $data = array();

	/**
	 * Called when the column is fetched from db
	 */
	public static function unserialize($db_data)
	{
		return strlen($db_data) ? unserialize($db_data) : array();
	}

	/**
	 * Called before the column is written to the db
	 */
	public static function serialize($data)
	{
		return serialize($data);
	}

}

// EOF
