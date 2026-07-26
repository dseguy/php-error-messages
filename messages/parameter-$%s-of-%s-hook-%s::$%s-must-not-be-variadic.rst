.. _parameter-\$%s-of-%s-hook-%s::\$%s-must-not-be-variadic:

Parameter $%s of %s hook %s::$%s must not be variadic
-----------------------------------------------------
 
.. meta::
	:description:
		Parameter $%s of %s hook %s::$%s must not be variadic: A ``set`` property hook must accept exactly one, ordinary parameter: the incoming value.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Parameter $%s of %s hook %s::$%s must not be variadic
	:og:description: A ``set`` property hook must accept exactly one, ordinary parameter: the incoming value
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/parameter-%24%25s-of-%25s-hook-%25s%3A%3A%24%25s-must-not-be-variadic.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Parameter $%s of %s hook %s::$%s must not be variadic
	:twitter:description: Parameter $%s of %s hook %s::$%s must not be variadic: A ``set`` property hook must accept exactly one, ordinary parameter: the incoming value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic.html","name":"Parameter $%s of %s hook %s::$%s must not be variadic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:01:32 +0000","dateModified":"Sun, 26 Jul 2026 06:01:32 +0000","description":"A ``set`` property hook must accept exactly one, ordinary parameter: the incoming value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A ``set`` property hook must accept exactly one, ordinary parameter: the incoming value. Declaring it as variadic with ``...`` does not make sense, since the hook is always called with exactly one value, never with a variable number of arguments.

Example
_______

.. code-block:: php

   <?php
   
   class X
   {
       public string $property {
           set(string ...$value) {
               $this->property = implode(',', $value);
           }
       }
   }
   
   ?>


Literal Examples
****************
+ Parameter $value of set hook X::$property must not be variadic

Solutions
_________

+ Remove the ``...`` from the hook's parameter, and declare it as a regular parameter.

Related Error Messages
______________________

+ :ref:`parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference`
+ :ref:`parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value`
+ :ref:`%s-hook-of-property-%s::$%s-must-accept-exactly-one-parameters`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
