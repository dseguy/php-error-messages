.. _property-x::\$p-cannot-have-type-void:

Property x::$p cannot have type void
------------------------------------
 
.. meta::
	:description:
		Property x::$p cannot have type void: Void is a type, that can only be used with return type, on methods or functions.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Property x::$p cannot have type void
	:og:description: Void is a type, that can only be used with return type, on methods or functions
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-x%3A%3A%24p-cannot-have-type-void.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property x::$p cannot have type void
	:twitter:description: Property x::$p cannot have type void: Void is a type, that can only be used with return type, on methods or functions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-x::$p-cannot-have-type-void.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-x::$p-cannot-have-type-void.html","name":"Property x::$p cannot have type void","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Void is a type, that can only be used with return type, on methods or functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/property-x::$p-cannot-have-type-void.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Void is a type, that can only be used with return type, on methods or functions. Here, void represents the absence of value: this is not possible for a property or an argument. The null value is then the closest possible type that can be assigned to a property, yet representing no value.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       private void $property;
   }
   
   ?>

Solutions
_________

+ Use another type for the property.
+ Remove the property.
+ Use the null type.

Related Error Messages
______________________

+ :ref:`void-cannot-be-used-as-a-parameter-type`

See Also
________

+ `ThethreenothingsofPHP <https://www.exakat.io/en/the-three-nothings-of-php/>`_
