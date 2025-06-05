.. _undefined-array-key:

Undefined array key
-------------------
 
.. meta::
	:description:
		Undefined array key: This notice is emitted when an offset (string or integer) is being used before being defined.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Undefined array key
	:og:description: This notice is emitted when an offset (string or integer) is being used before being defined
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/undefined-array-key.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Undefined array key
	:twitter:description: Undefined array key: This notice is emitted when an offset (string or integer) is being used before being defined
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/undefined-array-key.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/undefined-array-key.html","name":"Undefined array key","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 07 May 2025 17:28:13 +0000","dateModified":"Wed, 07 May 2025 17:28:13 +0000","description":"This notice is emitted when an offset (string or integer) is being used before being defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/undefined-array-key.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This notice is emitted when an offset (string or integer) is being used before being defined. In a word, the element at this offset does not exist, so PHP creates it on the fly, as NULL, then uses it.

Example
_______

.. code-block:: php

   <?php
   
   // undefined array key 4
   echo [1,2,3][4];
   
   // undefined array key 'a'
   echo [1,2,3]['a'];
   
   // undefined array key 1
   list($a, $b) = ['c'];
   
   ?>

Solutions
_________

+ Test the existence of the offset before usage.
+ Gives the offset a default value before usage.
+ Check that the right operand of a list() call has enough elements to fit the left operand.

Related Error Messages
______________________

+ :ref:`undefined-variable`
+ :ref:`is-an-invalid-offset`


In previous PHP versions, this error message used to be :ref:`undefined-offset`.
