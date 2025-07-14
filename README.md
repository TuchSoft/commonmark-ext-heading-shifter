# commonmark-title-shifter
![Version](https://img.shields.io/badge/version-1.0.0-blue.svg?cacheSeconds=2592000)
[![Documentation](https://img.shields.io/badge/documentation-yes-brightgreen.svg)](github.com/mattiabonzi/phpvarparser)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](#)

CommonMark extension for shifting heading levels by a configurable amount of levels.

## Install

```sh
composer require tuchsoft/commonmark-title-shifter
```

## Usage
```php
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment;
use TuchSoft\CommonMarkHeadingShifter\CommonMarkHeadingShifterExtension;

$converter = new CommonMarkConverter([
    'title_shifter' => [
        'shift_by' => 1
        ]
    ]);

$converter->getEnvironment()->addExtension(new CommonMarkHeadingShifterExtension());

```

## Author

👤 **Mattia Bonzi <mattia@tuchsoft.com>**

* Website: [tuchsoft.com](https://tuchsoft.com)
* Github: [@tuchsoft](https://github.com/tuchsoft)

[![TuchSoft logo](https://tuchsoft.com/assets/images/logo-dark.webp)](https://tuchsoft.com)

## 🤝 Contributing

Contributions, issues and feature requests are welcome!

Feel free to check [issues page](github.com/mattiabonzi/phpvarparser/issues). 

## Show your support

Give a ⭐️ if this project helped you!


***
_This README was generated with ❤️ by [readme-md-generator](https://github.com/kefranabg/readme-md-generator)_