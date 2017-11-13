<?php

namespace Fig\SimpleCache;

use Psr\SimpleCache\CacheInterface;

/**
 * Describes a simple cache-aware instance.
 */
interface CacheAwareInterface
{
    /**
     * Sets a cache instance on the object.
     *
     * @param CacheInterface $cache
     *
     * @return void
     */
    public function setCache(CacheInterface $cache);
}
