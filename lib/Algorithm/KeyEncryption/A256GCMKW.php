<?php

namespace SpomkyLabs\Jose\Algorithm\KeyEncryption;

/**
 * Class A256GCMKW.
 */
class A256GCMKW extends AESGCMKW
{
    /**
     * @return int
     */
    protected function getKeySize()
    {
        return 256;
    }

    /**
     * @return string
     */
    public function getAlgorithmName()
    {
        return "A256GCMKW";
    }
}
