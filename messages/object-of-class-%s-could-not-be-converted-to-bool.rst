.. _object-of-class-%s-could-not-be-converted-to-bool:

Object of class %s could not be converted to bool
-------------------------------------------------
 
.. meta::
	:description:
		Object of class %s could not be converted to bool: PHP reports that the object cannot be used as a boolean.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Object of class %s could not be converted to bool
	:og:description: PHP reports that the object cannot be used as a boolean
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/object-of-class-%25s-could-not-be-converted-to-bool.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object of class %s could not be converted to bool
	:twitter:description: Object of class %s could not be converted to bool: PHP reports that the object cannot be used as a boolean
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/object-of-class-%s-could-not-be-converted-to-bool.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/object-of-class-%s-could-not-be-converted-to-bool.html","name":"Object of class %s could not be converted to bool","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"PHP reports that the object cannot be used as a boolean","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/object-of-class-%s-could-not-be-converted-to-bool.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP reports that the object cannot be used as a boolean. Converting an object into a boolean is a PHP engine feature, and should be always on. Though, some extensions have not systematically implemented it.

Here, gmp is lacking the support for converting objects into a boolean, though it was fixed in PHP 8.4. When meeting such error, it should be reported to the author of the extension.

Example
_______

.. code-block:: php

   <?php
   
   $x = gmp_result('12', 3);
   
   if ($x) {
       print $x is truthy;
   }
   
   ?>


Literal Examples
****************
+ Object of class GMP could not be converted to bool

Solutions
_________

+ Make an explicit comparison, with ``is_object()``.
+ Make an explicit comparison, with ``instanceof``.

Related Error Messages
______________________

+ :ref:`object-of-class-%s-could-not-be-converted-to-string`
+ :ref:`object-of-class-%s-could-not-be-converted-to-float`
+ :ref:`object-of-class-%s-could-not-be-converted-to-int`
