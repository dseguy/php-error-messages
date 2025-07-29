.. _key-element-cannot-be-a-reference:

Key element cannot be a reference
---------------------------------
 
.. meta::
	:description:
		Key element cannot be a reference: In a foreach() loop, the value may be a reference, when it needs to be updated.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Key element cannot be a reference
	:og:description: In a foreach() loop, the value may be a reference, when it needs to be updated
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/key-element-cannot-be-a-reference.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Key element cannot be a reference
	:twitter:description: Key element cannot be a reference: In a foreach() loop, the value may be a reference, when it needs to be updated
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/key-element-cannot-be-a-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/key-element-cannot-be-a-reference.html","name":"Key element cannot be a reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 29 Jul 2025 17:13:09 +0000","dateModified":"Tue, 29 Jul 2025 17:13:09 +0000","description":"In a foreach() loop, the value may be a reference, when it needs to be updated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/key-element-cannot-be-a-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In a foreach() loop, the value may be a reference, when it needs to be updated. The key, on the other hand, cannot be changed, and hence, cannot have a reference.

Example
_______

.. code-block:: php

   <?php
   
   foreach($array as &$key => $value) {}
   
   ?>

Solutions
_________

+ Remove the reference from the key.
+ Use array_flip() to make the keys the values, and update them, then use the same function again.
