.. _cannot-declare-variadic-promoted-property:

Cannot declare variadic promoted property
-----------------------------------------
 
.. meta::
	:description:
		Cannot declare variadic promoted property: Properties may be declared, as an parameter in a constructor.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot declare variadic promoted property
	:og:description: Properties may be declared, as an parameter in a constructor
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-declare-variadic-promoted-property.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot declare variadic promoted property
	:twitter:description: Cannot declare variadic promoted property: Properties may be declared, as an parameter in a constructor
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-declare-variadic-promoted-property.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-declare-variadic-promoted-property.html","name":"Cannot declare variadic promoted property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Properties may be declared, as an parameter in a constructor","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-declare-variadic-promoted-property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Properties may be declared, as an parameter in a constructor. Then, they also act as an parameter, and a local variable.

Variadic option is a parameter only option, which pack all the remaning arguments in the final parameter. 

Variadic option makes no sense in a property definition, as only one value is stored there.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	function __construct(
   		private string ...$x
   	) {}
   }
   
   ?>

Solutions
_________

+ Remove the property definition from the constructor: keep the argument use the variadic, and define the property in the traditional way.
+ Remove the variadic option.
