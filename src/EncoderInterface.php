<?php

declare(strict_types=1);

namespace Antikirra\Encoder;

interface EncoderInterface
{
    public function encode(string $content): string;

    public function decode(string $content): string;
}