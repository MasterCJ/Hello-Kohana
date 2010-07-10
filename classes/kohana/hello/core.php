<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This file is part of an example plugin for Kohana.
 *
 * Copyright (c) 2010, Deoxxa Development
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package kohana-hello
 */

/**
 * "Hello, world!" class. Very simple.
 *
 * @package kohana-hello
 * @author MasterCJ <mastercj@mastercj.net>
 * @version 0.1
 * @license http://mastercj.net/license.txt
 */
class Kohana_Hello_Core {
	/**
	 * @var array A collection of phrases to print
	 */
	protected $_phrases = array();

	/**
	 * Constructor
	 *
	 * @param string The profile name, corresponds to the config file
	 * @param array Config settings to override defaults
	 */
	public function __construct($profile='default', array $config=null) {
		if ($config === null) { $config = array(); }
		if ($profile !== false) {
			$config = Arr::merge(Kohana::config('hello.'.$profile), $config);
		}
		if (is_array($config) AND isset($config['phrases'])) {
			foreach ($config['phrases'] as $phrase) { $this->_phrases[] = $phrase; }
		}
	}

	/**
	 * Give a shout!
	 *
	 * @return boolean The greeting
	 */
	public function say_something() {
		if (is_array($this->_phrases) AND count($this->_phrases)) {
			return $this->_phrases[intval(rand(0, count($this->_phrases)-1))];
		} else {
			return 'I have nothing to say :(';
		}
	}
}

?>