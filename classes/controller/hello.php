<?php

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
 * HelloDemo Controller - Shows the usage of the Hello class
 *
 * @package kohana-hello
 * @author MasterCJ <mastercj@mastercj.net>
 * @version 0.1
 * @license http://mastercj.net/license.txt
 */
class Controller_Hello extends Controller {
	public function action_index() {
		$this->request->response = View::factory('hello/index');
	}

	public function action_demo($id) {
		switch ($id) {
			case 1:
				$hello = new Hello();
				break;
			case 2:
				$hello = new Hello('rude');
				break;
			case 3:
				$hello = new Hello(false, array(
					'phrases' => array(
						'I am custom text!',
						'Salutations, programmer!',
					),
				));
				break;
			default:
				$hello = new Hello(false);
				break;
		}

		$this->request->response = View::factory('hello/demo');
		$this->request->response->message = $hello->say_something();
		$this->request->response->number = (int)$id;
	}
}

?>