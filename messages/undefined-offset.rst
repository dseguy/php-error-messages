.. _undefined-offset:

Undefined offset
----------------
 
.. meta::
	:description:
		Undefined offset: This notice is emitted when an offset (string or integer) is being used before being defined.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Undefined offset
	:og:description: This notice is emitted when an offset (string or integer) is being used before being defined
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/undefined-offset.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Undefined offset
	:twitter:description: Undefined offset: This notice is emitted when an offset (string or integer) is being used before being defined
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/undefined-offset.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/undefined-offset.html","name":"Undefined offset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This notice is emitted when an offset (string or integer) is being used before being defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/undefined-offset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This notice is emitted when an offset (string or integer) is being used before being defined. In a word, the elemenent at this offset is not created yet, so PHP creates it on the fly, as NULL, then uses it.

Example
_______

.. code-block:: php

   <?php
   
   echo [1,2,3][4];
   
   ?>

Solutions
_________

+ Test the existence of the offset before usage.
+ Gives the offset a default value before usage.


In more recent PHP versions, this error message is now :ref:`undefined-array-key`.
