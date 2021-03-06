<?php

namespace Laminas\Crypt;

use function hash;
use function hash_algos;
use function in_array;
use function mb_strlen;
use function strtolower;

class Hash
{
    const OUTPUT_STRING = false;
    const OUTPUT_BINARY = true;

    /**
     * Last algorithm supported
     *
     * @var string|null
     */
    protected static $lastAlgorithmSupported;

    /**
     * @param  string  $hash
     * @param  string  $data
     * @param  bool $output
     * @throws Exception\InvalidArgumentException
     * @return string
     */
    public static function compute($hash, $data, $output = self::OUTPUT_STRING)
    {
        if (! $hash || ($hash !== static::$lastAlgorithmSupported && ! static::isSupported($hash))) {
            throw new Exception\InvalidArgumentException(
                'Hash algorithm provided is not supported on this PHP installation'
            );
        }

        return hash($hash, $data, $output);
    }

    /**
     * Get the output size according to the hash algorithm and the output format
     *
     * @param  string  $hash
     * @param  bool $output
     * @return int
     */
    public static function getOutputSize($hash, $output = self::OUTPUT_STRING)
    {
        return mb_strlen(static::compute($hash, 'data', $output), '8bit');
    }

    /**
     * Get the supported algorithm
     *
     * @return array
     */
    public static function getSupportedAlgorithms()
    {
        return hash_algos();
    }

    /**
     * Is the hash algorithm supported?
     *
     * @param  string $algorithm
     * @return bool
     */
    public static function isSupported($algorithm)
    {
        if ($algorithm === static::$lastAlgorithmSupported) {
            return true;
        }

        if (in_array(strtolower($algorithm), hash_algos(), true)) {
            static::$lastAlgorithmSupported = $algorithm;
            return true;
        }

        return false;
    }

    /**
     * Clear the cache of last algorithm supported
     */
    public static function clearLastAlgorithmCache()
    {
        static::$lastAlgorithmSupported = null;
    }
}
