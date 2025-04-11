.. _illegal-offset-type-in-isset-or-empty:

Illegal offset type in isset or empty
-------------------------------------
 
.. meta::
	:description:
		Illegal offset type in isset or empty: PHP only uses integers and strings as array index.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Illegal offset type in isset or empty
	:og:description: PHP only uses integers and strings as array index
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/illegal-offset-type-in-isset-or-empty.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Illegal offset type in isset or empty
	:twitter:description: Illegal offset type in isset or empty: PHP only uses integers and strings as array index
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/illegal-offset-type-in-isset-or-empty.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/illegal-offset-type-in-isset-or-empty.html","name":"Illegal offset type in isset or empty","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"PHP only uses integers and strings as array index","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/illegal-offset-type-in-isset-or-empty.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP only uses integers and strings as array index. While certain other types may be converted silently to those types, as ``null`` or ``boolean``, objects and arrays yield an illegal type for index.

This error is is specific to ``isset`` and ``empty``: these functions are usually very silent, yet an dedicated error message was created for the type check.

This error is reported at compile time when PHP can detect the type then, otherwise, it is reported at execution time.

Example
_______

.. code-block:: php

   <?php
   
   $array = [1];
   
   var_dump(isset($array[[]]));
   
   ?>

Solutions
_________

+ Convert these types into a string or a integer first.
+ Cast these types into a string or a integer first.

Related Error Messages
______________________

+ :ref:`cannot-access-offset-of-type-%s-in-isset-or-empty`
+ :ref:`cannot-access-offset-of-type-%s-on-%s`
+ :ref:`illegal-offset-type-in-unset`
+ :ref:`illegal-offset-type`
