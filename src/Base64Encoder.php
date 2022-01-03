<?php

declare(strict_types=1);

namespace Antikirra\Encoder;

class Base64Encoder implements EncoderInterface
{
    public function encode(string $content): string
    {
        return base64_encode($content);
    }

    public function decode(string $content): string
    {
        return base64_decode($content);
    }
}