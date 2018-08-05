<?php

/**
 * Copyright (c) Cole Design Stuidos, LLC (https://coleds.com)
 * 
 * Licensed under The MIT License
 *
 * @copyright     Copyright (c) Cole Design Studios, LLC. (https://coleds.com)
 * @link          https://facile.coleds.com/
 * @since         v0.0.1
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

namespace Facile;

class Router {
	private $path = null;

	public function __construct(array $settings = []) {
		//$this->params['here'] = '';
	}
	
	/**/
	public function add() {
		
	}
	
	/**/
	private function match($routes) {
		
	}
	
	public function dispatch(array $url = [], array $additionalParams = []) {
		if (!empty($url['path'])) {
			$this->path = ltrim($url['path'], '/');
		} else {
			$this->path = '/';
		}
		
		return $this->query('SELECT * FROM posts as Post WHERE Post.slug LIKE \'%'.$this->path.'%\'');
	}
}

?>