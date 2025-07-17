# commonmark-ext-heading-shifter
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](#)
[![Copyright: Tuchsoft](https://img.shields.io/badge/%C2%A9-Tuchsoft-7519e2.svg)](https://tuchsoft.com)

CommonMark extension for shifting heading levels by a configurable amount of levels.

## Install

```sh
composer require tuchsoft/commonmark-ext-heading-shifter
```

## Usage
```php
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment;
use TuchSoft\CommonMarkHeadingShifter\HeadingShifterExtension;

$converter = new CommonMarkConverter([
    'heading_shifter' => [
        'shift_by' => 1
        ]
    ]);

$converter->getEnvironment()->addExtension(new HeadingShifterExtension());

$converter->convertToHtml("# Heading"); //<h2>Heading</h2>
```

## Author

👤 **Mattia Bonzi @ [TuchSoft](https://tuchsoft.com) <mattia@tuchsoft.com>**

* Website: [tuchsoft.com](https://tuchsoft.com)
* Github: [@tuchsoft](https://github.com/tuchsoft)

[![TuchSoft logo](https://tuchsoft.com/assets/logo/logo-dark.png)](https://tuchsoft.com)

## 🤝 Contributing

Contributions, issues and feature requests are welcome!

Feel free to check [issues page](github.com/tuchsoft/commonmark-ext-heading-shifter/issues). 
