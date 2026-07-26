.. _parameter-\$%s-of-%s-hook-%s::\$%s-must-not-have-a-default-value:

Parameter $%s of %s hook %s::$%s must not have a default value
--------------------------------------------------------------
 
.. meta::
	:description:
		Parameter $%s of %s hook %s::$%s must not have a default value: The parameter of a ``set`` property hook cannot declare a default value.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Parameter $%s of %s hook %s::$%s must not have a default value
	:og:description: The parameter of a ``set`` property hook cannot declare a default value
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/parameter-%24%25s-of-%25s-hook-%25s%3A%3A%24%25s-must-not-have-a-default-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Parameter $%s of %s hook %s::$%s must not have a default value
	:twitter:description: Parameter $%s of %s hook %s::$%s must not have a default value: The parameter of a ``set`` property hook cannot declare a default value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value.html","name":"Parameter $%s of %s hook %s::$%s must not have a default value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:01:32 +0000","dateModified":"Sun, 26 Jul 2026 06:01:32 +0000","description":"The parameter of a ``set`` property hook cannot declare a default value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The parameter of a ``set`` property hook cannot declare a default value. The hook is always invoked with the value being assigned to the property, so a default value would never actually be used, and PHP rejects it as meaningless.

Example
_______

.. code-block:: php

   <?php
   
   class X
   {
       public string $property {
           set(string $value = 'default') {
               $this->property = $value;
           }
       }
   }
   
   ?>


Literal Examples
****************
+ Parameter $value of set hook X::$property must not have a default value

Solutions
_________

+ Remove the default value from the hook's parameter.
+ If a fallback value is needed, assign a default to the property itself, or handle it inside the hook's body.

Related Error Messages
______________________

+ :ref:`parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference`
+ :ref:`parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic`
+ :ref:`%s-hook-of-property-%s::$%s-must-accept-exactly-one-parameters`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
