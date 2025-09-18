.. _strlen():-passing-null-to-parameter-#1-(\$string)-of-type-string-is-deprecated:

strlen(): Passing null to parameter #1 ($string) of type string is deprecated
-----------------------------------------------------------------------------
 
.. meta::
	:description:
		strlen(): Passing null to parameter #1 ($string) of type string is deprecated: ``strlen()`` calculates the length of a string.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: strlen(): Passing null to parameter #1 ($string) of type string is deprecated
	:og:description: ``strlen()`` calculates the length of a string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/strlen%28%29%3A-passing-null-to-parameter-%231-%28%24string%29-of-type-string-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strlen(): Passing null to parameter #1 ($string) of type string is deprecated
	:twitter:description: strlen(): Passing null to parameter #1 ($string) of type string is deprecated: ``strlen()`` calculates the length of a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/strlen():-passing-null-to-parameter-#1-($string)-of-type-string-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/strlen():-passing-null-to-parameter-#1-($string)-of-type-string-is-deprecated.html","name":"strlen(): Passing null to parameter #1 ($string) of type string is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 17 Sep 2025 17:18:00 +0000","dateModified":"Wed, 17 Sep 2025 17:18:00 +0000","description":"``strlen()`` calculates the length of a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/strlen():-passing-null-to-parameter-#1-($string)-of-type-string-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``strlen()`` calculates the length of a string. It only works on strings, and, in particular, cannot compute the length of the ``null`` value. 

Example
_______

.. code-block:: php

   <?php
   
   $s = null;
   print strlen($s); 
   
   ?>

Solutions
_________

+ Process ``null`` in a separate branch of code.
+ Convert ``null`` to the empty string before using strlen().
