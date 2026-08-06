.. _%s-hook-of-property-%s::\$%s-must-accept-exactly-one-parameters:

%s hook of property %s::$%s must accept exactly one parameters
--------------------------------------------------------------
 
.. meta::
	:description:
		%s hook of property %s::$%s must accept exactly one parameters: When the ``set`` hook of a property is declared with an explicit parameter list, that list must contain exactly one parameter: the value being assigned.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s hook of property %s::$%s must accept exactly one parameters
	:og:description: When the ``set`` hook of a property is declared with an explicit parameter list, that list must contain exactly one parameter: the value being assigned
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-hook-of-property-%25s%3A%3A%24%25s-must-accept-exactly-one-parameters.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s hook of property %s::$%s must accept exactly one parameters
	:twitter:description: %s hook of property %s::$%s must accept exactly one parameters: When the ``set`` hook of a property is declared with an explicit parameter list, that list must contain exactly one parameter: the value being assigned
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-hook-of-property-%s::$%s-must-accept-exactly-one-parameters.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-hook-of-property-%s::$%s-must-accept-exactly-one-parameters.html","name":"%s hook of property %s::$%s must accept exactly one parameters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"When the ``set`` hook of a property is declared with an explicit parameter list, that list must contain exactly one parameter: the value being assigned","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-hook-of-property-%s::$%s-must-accept-exactly-one-parameters.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When the ``set`` hook of a property is declared with an explicit parameter list, that list must contain exactly one parameter: the value being assigned. Declaring zero, two, or more parameters is not allowed.

This is different from omitting the parenthesis altogether, in which case the hook implicitly receives the value through a variable named ``$value``.

Example
_______

.. code-block:: php

   <?php
   
   class X
   {
       public string $property {
           set($a, $b) {
               $this->property = $a;
           }
       }
   }
   
   ?>


Literal Examples
****************
+ set hook of property X::$property must accept exactly one parameters

Solutions
_________

+ Keep only one parameter in the hook's parameter list.
+ Remove the parameter list entirely and use the implicit ``$value`` variable instead.

Related Error Messages
______________________

+ :ref:`get-hook-of-property-%s::$%s-must-not-have-a-parameter-list`
+ :ref:`parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic`
+ :ref:`parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value`
+ :ref:`parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
