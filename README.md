<h1 align="center">Search String Parser</h1>

<p align="center">
<a href="https://travis-ci.org/stefanzweifel/php-search-string-parser">
    <img src="https://travis-ci.org/stefanzweifel/php-search-string-parser.svg" alt="">
</a>
<a href="https://packagist.org/packages/wnx/search-string-parser">
    <img src="https://poser.pugx.org/wnx/search-string-parser/v/stable" alt="">
</a>
<a href="https://packagist.org/packages/wnx/search-string-parser">
    <img src="https://poser.pugx.org/wnx/search-string-parser/downloads" alt="">
</a>
<a href="https://packagist.org/packages/wnx/search-string-parser">
    <img src="https://poser.pugx.org/wnx/search-string-parser/license" alt="">
</a>
</p>

> HEADLINE


### Installing

The easiest way to install the package is by using composer.

```shell
composer require "wnx/search-string-parser"
```


## Usage

> TBD

## Running the tests

The package has tests written in phpunit. You can run them with the following command.

```shell
./vendor/bin/phpunit
```

## Running the command in a local test project

If you're working on the package locally and want to just run the command in a demo project you can use the [composer path-repository format](https://getcomposer.org/doc/05-repositories.md#path).
Add the following snippet to the `composer.json` in your demo project.

```json
{
    "repositories": [
        {
            "type": "path",
            "url": "/path/to/search-string-parser/",
            "options": {
                "symlink": true
            }
        }
    ],
}
```

And "install" the package with `composer require wnx/search-string-parser`. The package should now be symlinked in your demo project.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/stefanzweifel/search-string-parser/tags).

## Credits

* [Stefan Zweifel](https://github.com/stefanzweifel)
* [All Contributors](https://github.com/stefanzweifel/search-string-parser/graphs/contributors)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
