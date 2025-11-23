.. _autoload()-is-deprecated,-use-spl_autoload_register()-instead:

__autoload() is deprecated, use spl_autoload_register() instead
---------------------------------------------------------------
 
.. meta::
	:description:
		__autoload() is deprecated, use spl_autoload_register() instead: The initial autoloader was a custom function, that was called whenever a class, interface or trait had to be loaded, but could not be found by PHP yet.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: __autoload() is deprecated, use spl_autoload_register() instead
	:og:description: The initial autoloader was a custom function, that was called whenever a class, interface or trait had to be loaded, but could not be found by PHP yet
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/__autoload%28%29-is-deprecated%2C-use-spl_autoload_register%28%29-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __autoload() is deprecated, use spl_autoload_register() instead
	:twitter:description: __autoload() is deprecated, use spl_autoload_register() instead: The initial autoloader was a custom function, that was called whenever a class, interface or trait had to be loaded, but could not be found by PHP yet
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/autoload()-is-deprecated,-use-spl_autoload_register()-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/autoload()-is-deprecated,-use-spl_autoload_register()-instead.html","name":"__autoload() is deprecated, use spl_autoload_register() instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Sep 2025 15:00:28 +0000","dateModified":"Sun, 14 Sep 2025 15:00:28 +0000","description":"The initial autoloader was a custom function, that was called whenever a class, interface or trait had to be loaded, but could not be found by PHP yet","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/autoload()-is-deprecated,-use-spl_autoload_register()-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The initial autoloader was a custom function, that was called whenever a class, interface or trait had to be loaded, but could not be found by PHP yet.

This approach was useful, but limited management operation: in particular, it was not possible to add more functions, or remove some of them. So, it was replaced with the ``spl_autoload_register()`` function, which add a closure to a list of autoloaders.

Example
_______

.. code-block:: php

   <?php
   
   function __autoload() {}
   
   ?>

Solutions
_________

+ Give another name to the ``__autoload`` function, and register it as autoloader with spl_autoload_register().
+ Remove the ``__autoload`` function.


In more recent PHP versions, this error message is now :ref:`autoload()-is-no-longer-supported,-use-spl_autoload_register()-instead`.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `autoload <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/autoload.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Php/oldAutoloadUsage <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/oldAutoloadUsage.html>`_.
