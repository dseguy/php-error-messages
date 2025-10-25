.. _cannot-modify-readonly-object-of-class-%s:

Cannot modify readonly object of class %s
-----------------------------------------
 
.. meta::
	:description:
		Cannot modify readonly object of class %s: It is possible to call the constructor on an existing object, after its creation.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot modify readonly object of class %s
	:og:description: It is possible to call the constructor on an existing object, after its creation
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-modify-readonly-object-of-class-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot modify readonly object of class %s
	:twitter:description: Cannot modify readonly object of class %s: It is possible to call the constructor on an existing object, after its creation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-modify-readonly-object-of-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-modify-readonly-object-of-class-%s.html","name":"Cannot modify readonly object of class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 22 Oct 2025 17:41:06 +0000","dateModified":"Wed, 22 Oct 2025 17:41:06 +0000","description":"It is possible to call the constructor on an existing object, after its creation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-modify-readonly-object-of-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is possible to call the constructor on an existing object, after its creation. In the case of the Url objects, the underlying URL string is readonly, and the renewed call to the constructor is not possible.

Example
_______

.. code-block:: php

   <?php
   
   $uri = new Uri\WhatWg\Url('https://www.php.net/');
   $uri->__construct('https://php.net/');
   
   ?>


Literal Examples
****************
+ Cannot modify readonly object of class Uri\WhatWg\Url

Solutions
_________

+ Create a new Url object, instead of updating the existing one.

Related Error Messages
______________________

+ :ref:`cannot-modify-readonly-property-%s::$%s`
