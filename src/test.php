<?php


class TestA {
    public function getException(): \Exception {
        return new \Exception('test');
    }
}

class TestB extends \TestA {
    public function getException(): \ErrorException {
        return new \ErrorException('test');
    }
}

$test = new \TestB();

var_dump(get_class($test->getException()));

var_dump($dummy);