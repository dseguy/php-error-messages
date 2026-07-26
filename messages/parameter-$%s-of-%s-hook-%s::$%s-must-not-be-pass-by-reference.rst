.. _parameter-\$%s-of-%s-hook-%s::\$%s-must-not-be-pass-by-reference:

Parameter $%s of %s hook %s::$%s must not be pass-by-reference
--------------------------------------------------------------
 
.. meta::
	:description:
		Parameter $%s of %s hook %s::$%s must not be pass-by-reference: The parameter of a ``set`` property hook receives the value being assigned to the property.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Parameter $%s of %s hook %s::$%s must not be pass-by-reference
	:og:description: The parameter of a ``set`` property hook receives the value being assigned to the property
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/parameter-%24%25s-of-%25s-hook-%25s%3A%3A%24%25s-must-not-be-pass-by-reference.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Parameter $%s of %s hook %s::$%s must not be pass-by-reference
	:twitter:description: Parameter $%s of %s hook %s::$%s must not be pass-by-reference: The parameter of a ``set`` property hook receives the value being assigned to the property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference.html","name":"Parameter $%s of %s hook %s::$%s must not be pass-by-reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:01:32 +0000","dateModified":"Sun, 26 Jul 2026 06:01:32 +0000","description":"The parameter of a ``set`` property hook receives the value being assigned to the property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The parameter of a ``set`` property hook receives the value being assigned to the property. It cannot be declared as pass-by-reference with a leading ``&``, since a property hook is not meant to modify the caller's variable; it only reacts to, or transforms, the value on its way into the property.

Example
_______

.. code-block:: php

   <?php
   
   class X
   {
       public string $property {
           set(&$value) {
               $this->property = $value;
           }
       }
   }
   
   ?>


Literal Examples
****************
+ Parameter $value of set hook X::$property must not be pass-by-reference

Solutions
_________

+ Remove the ``&`` from the hook's parameter.

Related Error Messages
______________________

+ :ref:`parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic`
+ :ref:`parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value`
+ :ref:`%s-hook-of-property-%s::$%s-must-accept-exactly-one-parameters`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
