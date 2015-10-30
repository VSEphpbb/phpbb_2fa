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
		'TFA_NO_KEYS'				=> 'No two factor authentication keys found. You can add one below.',
		'TFA_KEYS'					=> 'On this page you can manage your two factor authentication keys.
										You can add multiple keys to your account.
											If you loose your keys, make sure to remove them from your account!
										<br /><br />
										Depending on the configuration choosen by the forum administrator,
										you might be required to add a security key before accessing the forum.',
		'TFA_NO_MODE'				=> 'No Mode',
		'TFA_KEYS_DELETED'			=> 'Selected keys removed.',
		'TFA_ERROR'					=> 'It seems something went wrong...',
		'TFA_REG_FAILED'			=> 'Registration failed with error: ',
		'TFA_ADD_KEY'				=> 'Register new key',
	)
);