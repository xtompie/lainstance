# Lainstance

Laravel container extension for resolving and defining singletons alongside classes

## Installation

```bash
composer require xtompie/lainstance
```

## Usage

### Getting instance

```php
<?php

use Xtompie\Lainstance\Instance;

class Foo
{
    use Instance;
}

$foo = Foo::instance();

```

### Automatic Injection

```php
<?php

use Xtompie\Lainstance\Instance;

class Bar
{
}

class Foo
{
    use Instance;

    public function __construct(
        public Bar $bar
    ) {}
}

$foo = Foo::instance();
echo get_class($foo->bar); // => Bar

```

### Shared aka singleton binding

```php
<?php

use Xtompie\Lainstance\Instance;
use Xtompie\Lainstance\Shared;

class Foo implements Shared
{
    use Instance;
}

echo Foo::instance() === Foo::instance(); // => 1

```