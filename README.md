RAD Module
==========

[![Build Status on TravisCI](https://secure.travis-ci.org/xp-framework/rad.svg)](http://travis-ci.org/xp-framework/rad)
[![XP Framework Module](https://raw.githubusercontent.com/xp-framework/web/master/static/xp-framework-badge.png)](https://github.com/xp-framework/core)
[![BSD Licence](https://raw.githubusercontent.com/xp-framework/web/master/static/licence-bsd.png)](https://github.com/xp-framework/core/blob/master/LICENCE.md)
[![Required PHP 5.4+](https://raw.githubusercontent.com/xp-framework/web/master/static/php-5_4plus.png)](http://php.net/)
[![Latest Stable Version](https://poser.pugx.org/xp-framework/rad/version.png)](https://packagist.org/packages/xp-framework/rad)

This module allows rapid application development as PHP warnings are not raised as exceptions, which is the framework's default behaviour since [RFC #291](https://github.com/xp-framework/rfc/issues/291) was implemented.

Example
-------

```sh
$ xp -w '$a++'
Uncaught exception: Exception lang.reflect.TargetInvocationException (xp\runtime\Evaluate::main)
  at lang.reflect.Method::invoke(NULL, array[1]) [line 248 of class-main.php]
Caused by Exception lang.NullPointerException (Undefined variable: a)
  at <main>::__error(8, (0x15)'Undefined variable: a', (0x60)'...', 1, array[5]) [line 1 of Evaluate.class.php(37) : eval()'d code]
  at <main>::eval() [line 37 of Evaluate.class.php]
  at xp.runtime.Evaluate::main(array[1]) [line 0 of StackTraceElement.class.php]
  ... 2 more

```

Simply add this module to your class path to enable the RAD mode:

```sh
$ xp -cp ../rad/src/main/php/ -w '$a++'
null
```