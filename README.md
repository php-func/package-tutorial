# Package Tutorial 📦

Source for my package tutorial.

## Installation
Use the dependancy mananger [composer] to install `package-tutorial`.

```bash
composer require thinkverse/package-tutorial
```

## Usage
```php
use Thinkverse\Repeat;

print Repeat::sentence('Hello World.'); // Hello World.
print Repeat::sentence(); // No sentence given.
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT]

[composer]: https://getcomposer.org/
[mit]: https://choosealicense.com/licenses/mit/