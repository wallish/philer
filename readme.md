## Description

Display randomly a french philosophical sentense

## Installation

### Requirements

To use Philer, your sever must support:

- PHP 5.4 or greater

### Installing

Philer utilizes composer for installation. Insert `"wallish/philer": "dev-master"` in your `composer.json` file:

```json
"require": {
    "wallish/philer": "dev-master"
},
```

### Quick Start

```php
$philer = new Philer();
$philer->display();
```

## Credits

teodc