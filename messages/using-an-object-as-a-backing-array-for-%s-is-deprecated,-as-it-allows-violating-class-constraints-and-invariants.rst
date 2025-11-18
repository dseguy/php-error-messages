.. _using-an-object-as-a-backing-array-for-%s-is-deprecated,-as-it-allows-violating-class-constraints-and-invariants:

Using an object as a backing array for %s is deprecated, as it allows violating class constraints and invariants
----------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Using an object as a backing array for %s is deprecated, as it allows violating class constraints and invariants: It is not allowed anymore to create an ArrayObject based on an object.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Using an object as a backing array for %s is deprecated, as it allows violating class constraints and invariants
	:og:description: It is not allowed anymore to create an ArrayObject based on an object
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/using-an-object-as-a-backing-array-for-%25s-is-deprecated%2C-as-it-allows-violating-class-constraints-and-invariants.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Using an object as a backing array for %s is deprecated, as it allows violating class constraints and invariants
	:twitter:description: Using an object as a backing array for %s is deprecated, as it allows violating class constraints and invariants: It is not allowed anymore to create an ArrayObject based on an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-an-object-as-a-backing-array-for-%s-is-deprecated,-as-it-allows-violating-class-constraints-and-invariants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-an-object-as-a-backing-array-for-%s-is-deprecated,-as-it-allows-violating-class-constraints-and-invariants.html","name":"Using an object as a backing array for %s is deprecated, as it allows violating class constraints and invariants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Nov 2025 19:46:24 +0000","dateModified":"Sun, 16 Nov 2025 19:46:24 +0000","description":"It is not allowed anymore to create an ArrayObject based on an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/using-an-object-as-a-backing-array-for-%s-is-deprecated,-as-it-allows-violating-class-constraints-and-invariants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not allowed anymore to create an ArrayObject based on an object. This leads to many unexpected behaviors, that are not supported anymore by PHP.

Example
_______

.. code-block:: php

   <?php
   
   $object = new stdClass;
   $object->a = 1;
   
   new ArrayObject($object);
   
   ?>


Literal Examples
****************
+ Using an object as a backing array for ArrayObject is deprecated, as it allows violating class constraints and invariants

Solutions
_________

+ Cast the object to array before using it with ArrayObject.
+ Do not use ArrayObject.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
