<?php

/**
 * Class Yac
 *
 * @author Lancer He <lancer.he@gmail.com>
 */
class Yac {
    /**
     * Yac constructor.
     *
     * @param string $prefix
     */
    public function __construct($prefix = '');

    /**
     * @param mixed $keys
     * @param mixed $value
     * @param int   $ttl
     */
    public function add($keys, $value, $ttl = 0);

    /**
     * @param mixed $keys
     * @param mixed $value
     * @param int   $ttl
     */
    public function set($keys, $value, $ttl = 0);

    /**
     * @param mixed $keys
     */
    public function get($keys);

    /**
     * @param mixed $keys
     * @param int   $delay
     */
    public function delete($keys, $delay = 0);

    /**
     *
     */
    public function flush();

    /**
     *
     */
    public function info();

    /**
     * @param $limit
     */
    public function dump($limit);
}
