<?php

/**
 * Copyright (c) Cole Design Stuidos, LLC (https://coleds.com)
 * 
 * Licensed under The MIT License
 *
 * @copyright     Copyright (c) Cole Design Studios, LLC. (https://coleds.com)
 * @link          https://coleds.com CDS Helper Library
 * @since         v0.0.1
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

namespace Facile;

use \Exception;
use \PDOException;
use \PDO;

class Database {
	private $connection;
	private $query;

	public function __construct(array $settings = []) {
		$dsn = 'mysql:host='.$settings['host'].';dbname='.$settings['name'];

		try {
			$this->connection = new PDO($dsn, $settings['user'], $settings['pass']);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			throw new Exception('Connection failed: ' . $e->getMessage());
		}
	}

	public function prepare(string $sql, array $data = []) {
		$sth = $this->connection->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		return $sth->execute($data);
	}
	
	public function query(string $sql) {
		$this->query = $this->connection->query($sql, PDO::FETCH_ASSOC);
		return $this->query->fetch();
	}

	public function findAll(string $sql) {
		$results = array();
		$data = $this->connection->query($sql)->fetchAll();
		foreach ($data as $row) {
			$results[] = $row;
		}
		return $results;
	}

	public function find(string $type, string $sql) {
		switch(strtolower($type)) {
			case 'all': return $this->findAll($sql);
			default: return $this->query($sql);
		}
	}
}

?>