.. _creating-default-object-from-empty-value:

Creating default object from empty value
----------------------------------------
 
.. meta::
	:description:
		Creating default object from empty value: This deprecation message is emitted in PHP 7.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Creating default object from empty value
	:og:description: This deprecation message is emitted in PHP 7
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/creating-default-object-from-empty-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Creating default object from empty value
	:twitter:description: Creating default object from empty value: This deprecation message is emitted in PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/creating-default-object-from-empty-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/creating-default-object-from-empty-value.html","name":"Creating default object from empty value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 30 Aug 2025 21:02:19 +0000","dateModified":"Sat, 30 Aug 2025 21:02:19 +0000","description":"This deprecation message is emitted in PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/creating-default-object-from-empty-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This deprecation message is emitted in PHP 7.x to signal that an object was created without instantiation. In the illustration code, ``$x`` does not exist before assigning it a property ``a``, and a value. The created object is ``stdClass``.

This error is specific to the creation of the variable: if ``$x`` was set with ``null``, a different message was emitted.

Example
_______

.. code-block:: php

   <?php
   
   $x->a = 1;
   
   ?>

Solutions
_________

+ Explicitly create the object before accessing its properties.
+ Cast an array to ``(object)``.
+ Instanciate a ``stdClass``.


In more recent PHP versions, this error message is now :ref:`attempt-to-assign-property-"%s"-on-null`.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `creatingObjectOnNull <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/creatingObjectOnNull.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `creatingObjectOnNull <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/creatingObjectOnNull.html>`_.
