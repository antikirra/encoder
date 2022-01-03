<?php

declare(strict_types=1);

namespace Antikirra\Encoder;

use Tuupola\Base58;

class Base58Encoder implements EncoderInterface
{
    private Base58 $encoder;

    public function __construct()
    {
        $this->encoder = new Base58(['characters' => Base58::BITCOIN]);
    }

    public function encode(string $content): string
    {
        return $this->encoder->encode($content);
    }

    public function decode(string $content): string
    {
        return $this->encoder->decode($content);
    }
}