
[![Build Status](https://travis-ci.org/Dispify/class_aliases.svg?branch=master)](https://travis-ci.org/Dispify/class_aliases)
[![codecov](https://codecov.io/gh/Dispify/class_aliases/branch/master/graph/badge.svg)](https://codecov.io/gh/Dispify/class_aliases)
[![GitHub license](https://img.shields.io/github/license/Dispify/class_aliases)](https://github.com/Dispify/class_aliases/blob/master/LICENSE)

![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/dispify/class_aliases)

class_aliases
=

There is a **class_parents**, **class_uses**, **class_implements** function in the PHP. 
PHP allows to declare aliases of class but there is no **class_aliases** function
which returns all aliases for specified class name. This library adds this functionality.

Getting Started
-

```
$ composer require dispify/class_aliases
```

```
class A {}
class_alias(A::class, 'Alias');

Dispify\class_aliases(A::class); // returns ['alias']
```
> :warning: The class is created by **class_alias** is lowercased!
