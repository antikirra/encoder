# Encoder

## Install

```bash
composer require antikirra/encoder
```

## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Antikirra\Encoder;

$encoder = new Encoder\Base58Encoder(); // or new Encoder\Base64Encoder()
$encoded = $encoder->encode('Lorem ipsum dolor sit amet'); // string(36) "3LkXoMopZc1HpvP3sJeGwC1uBaWH8sCTtKij"
$decoded = $encoder->decode($encoded); // string(26) "Lorem ipsum dolor sit amet"
```