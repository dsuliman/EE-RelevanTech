<?php
/**
 * ExpressionEngine (https://expressionengine.com)
 *
 * @link      https://expressionengine.com/
 * @copyright Copyright (c) 2003-2017, EllisLab, Inc. (https://ellislab.com)
 * @license   https://expressionengine.com/license
 */

namespace EllisLab\ExpressionEngine\Model\Log;

use EllisLab\ExpressionEngine\Service\Model\Model;

/**
 * Email Console Log Model
 */
class EmailConsoleCache extends Model {

	protected static $_primary_key = 'cache_id';
	protected static $_table_name = 'email_console_cache';

	protected static $_relationships = array(
		'Member' => array(
			'type' => 'belongsTo'
		),
	);

	protected static $_validation_rules = array(
		'ip_address' => 'ip_address'
	);

	// Properties
	protected $cache_id;
	protected $cache_date;
	protected $member_id;
	protected $member_name;
	protected $ip_address;
	protected $recipient;
	protected $recipient_name;
	protected $subject;
	protected $message;


}

// EOF
