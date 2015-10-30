<?php
/**
 *
 * 2FA extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2015 Paul Sohier
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge(
	$lang, array(
		'TFA_REQUIRED_KEY_MISSING'      => 'The administrator of this forum requires that you have added a Two Factor Authentication key for access to (limited) parts of this forum, however you currently have no keys registerted to your account. You can add a new security key %s here%s.
												<br />For security reasons, the board has been disabled until you add a security key to your account. Your might be required to fill in your password while adding a security key!',
		// Controller
		'TFA_SOMETHING_WENT_WRONG'      => 'Something unexpected happened. Please try again later',
		'ERR_NO_MATCHING_REQUEST'       => 'No matching request found',
		'ERR_NO_MATCHING_REGISTRATION'  => 'No matching registration found',
		'ERR_AUTHENTICATION_FAILURE'    => 'Authentication failed',
		'ERR_UNMATCHED_CHALLENGE'       => 'Registration challenge does not match',
		'ERR_ATTESTATION_SIGNATURE'     => 'Attestation signature does not match',
		'ERR_ATTESTATION_VERIFICATION'  => 'Attestation certificate can not be validated',
		'ERR_BAD_RANDOM'                => 'Unable to obtain a good source of randomness',
		'ERR_COUNTER_TOO_LOW'           => 'Counter too low',
		'ERR_PUBKEY_DECODE'             => 'Decoding of public key failed',
		'ERR_BAD_UA_RETURNING'          => 'User-agent returned error',
		'ERR_OLD_OPENSSL'               => 'OpenSSL has to be at least version 1.0.0, this is %s',
		'UNKNOWN_ERROR'                 => 'A unknown error happened during the validation of your security key. Please try again later.',

		'FTA_NO_RESPONSE'                   => 'No response received',
		'FTA_NO_RESPONSE_RECEIVED'          => 'We did not receive a response from your U2F security key. Did you press the button?',
		'FTA_NOT_SUPPORTED'                 => 'Browser not supported',
		'FTA_BROWSER_SEEMS_NOT_SUPPORTED'   => 'Sorry, currently only Google Chrome is supported.',
		'FTA_INSERT_KEY'                    => 'Insert your security key',
		'FTA_INSERT_KEY_EXPLAIN'            => 'Insert your security key into your browser and press the button on the key.',
		'UNABLE_TO_UPDATE_SESSION'			=> 'Unable to update session. Please contact the board administrator',

	)
);