.. _cannot-be-empty:

cannot be empty
---------------
 
.. meta::
	:description:
		cannot be empty: The provided parameter is of the valid type, but cannot be left empty.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: cannot be empty
	:og:description: The provided parameter is of the valid type, but cannot be left empty
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-be-empty.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: cannot be empty
	:twitter:description: cannot be empty: The provided parameter is of the valid type, but cannot be left empty
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-be-empty.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-be-empty.html","name":"cannot be empty","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 13:37:28 +0000","dateModified":"Fri, 04 Jul 2025 13:37:28 +0000","description":"The provided parameter is of the valid type, but cannot be left empty","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-be-empty.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The provided parameter is of the valid type, but cannot be left empty.

Example
_______

.. code-block:: php

   <?php
   
   print_r(explode('', 'abc')); // Not possible with an empty delimiter
   
   print_r(str_split(1, 'abc')); 
   
   ?>

Solutions
_________

+ When parsing data, make sure that the separator is not empty.


In previous PHP versions, this error message used to be :ref:`empty-delimiter`.


In more recent PHP versions, this error message is now :ref:`must-not-be-empty`.
