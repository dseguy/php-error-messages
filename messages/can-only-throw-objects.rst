.. _can-only-throw-objects:

Can only throw objects
----------------------
 
.. meta::
	:description:
		Can only throw objects: The ``throw`` keyword operates on exceptions, which are always objects.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Can only throw objects
	:og:description: The ``throw`` keyword operates on exceptions, which are always objects
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/can-only-throw-objects.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Can only throw objects
	:twitter:description: Can only throw objects: The ``throw`` keyword operates on exceptions, which are always objects
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/can-only-throw-objects.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/can-only-throw-objects.html","name":"Can only throw objects","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Apr 2025 19:30:28 +0000","dateModified":"Wed, 02 Apr 2025 19:01:13 +0000","description":"The ``throw`` keyword operates on exceptions, which are always objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/can-only-throw-objects.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``throw`` keyword operates on exceptions, which are always objects. So, it is not possible to throw other types, such as integers, strings or arrays.

Example
_______

.. code-block:: php

   <?php
   
   throw 1;
   
   ?>

Solutions
_________

+ Use ``throw new Exception()``.
+ Use ``throw new Error()``.
+ Use ``throw $object``, where $object contains an error or an exception.
+ Use ``throw ($object)``, where $object contains an error or an exception.

Related Error Messages
______________________

+ :ref:`clone-method-called-on-non-object`
