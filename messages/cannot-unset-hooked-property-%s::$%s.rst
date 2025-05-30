.. _cannot-unset-hooked-property-%s::\$%s:

Cannot unset hooked property %s::$%s
------------------------------------
 
.. meta::
	:description:
		Cannot unset hooked property %s::$%s: It is not allowed to unset a hooked property, aka, a property with a ``get`` or ``set`` (or both) hook.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot unset hooked property %s::$%s
	:og:description: It is not allowed to unset a hooked property, aka, a property with a ``get`` or ``set`` (or both) hook
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-unset-hooked-property-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot unset hooked property %s::$%s
	:twitter:description: Cannot unset hooked property %s::$%s: It is not allowed to unset a hooked property, aka, a property with a ``get`` or ``set`` (or both) hook
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-unset-hooked-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-unset-hooked-property-%s::$%s.html","name":"Cannot unset hooked property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"It is not allowed to unset a hooked property, aka, a property with a ``get`` or ``set`` (or both) hook","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-unset-hooked-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not allowed to unset a hooked property, aka, a property with a ``get`` or ``set`` (or both) hook.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public string $property {
           get => $this->x;
       }
   }
   
   $x = new X;
   unset($x->x);
   
   ?>


Literal Examples
****************
+ Cannot unset hooked property x::$property

Solutions
_________

+ Assign null, or a null value to this property.
+ Reset the property to its default value.
