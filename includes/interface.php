<?php
 interface DatabaseInterface
 {
     public function connection(): void;
     public function query(string $sql, array $params = []): ?array;
     public function fetch(string $sql, array $params = []): ?array;
 }
 ?>