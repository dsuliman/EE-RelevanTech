<?php
/**
 * ExpressionEngine (https://expressionengine.com)
 *
 * @link      https://expressionengine.com/
 * @copyright Copyright (c) 2003-2017, EllisLab, Inc. (https://ellislab.com)
 * @license   https://expressionengine.com/license
 */

namespace EllisLab\ExpressionEngine\Model\Security;

use EllisLab\ExpressionEngine\Service\Model\Model;

/**
 * Security Hash Model
 */
class SecurityHash extends Model {

	protected static $_primary_key = 'hash_id';
	protected static $_table_name = 'security_hashes';

	protected static $_relationships = array(
		'Session' => array(
			'type' => 'belongsTo'
		)
	);

	protected $hash_id;
	protected $date;
	protected $session_id;
	protected $hash;
	protected $used;
}

// EOF
