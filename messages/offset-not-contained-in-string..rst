.. _offset-not-contained-in-string.:

Offset not contained in string.
-------------------------------
 
.. meta::
	:description:
		Offset not contained in string.: strpos() searches for a string called ``$needle`` in another string called ``$haystack``, starting at the offset passed as third argument, and called ``$offset``.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Offset not contained in string.
	:og:description: strpos() searches for a string called ``$needle`` in another string called ``$haystack``, starting at the offset passed as third argument, and called ``$offset``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/offset-not-contained-in-string..html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Offset not contained in string.
	:twitter:description: Offset not contained in string.: strpos() searches for a string called ``$needle`` in another string called ``$haystack``, starting at the offset passed as third argument, and called ``$offset``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/offset-not-contained-in-string..html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/offset-not-contained-in-string..html","name":"Offset not contained in string.","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"strpos() searches for a string called ``$needle`` in another string called ``$haystack``, starting at the offset passed as third argument, and called ``$offset``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/offset-not-contained-in-string..html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
strpos() searches for a string called ``$needle`` in another string called ``$haystack``, starting at the offset passed as third argument, and called ``$offset``. 

The offset must be smaller than the full length of the ``$haystack``: otherwise, PHP starts to search beyond the end of the data, and that will always fail. 

This error message is shared by several PHP native and extension functions, namely ``mbstring`` and ``iconv``: ``strpos()``, ``strrpos()``, ``stripos()``, ``strripos()``, ``mb_strpos()``, ``mb_strrpos()``, ``mb_stripos()``, ``mb_strripos()``, ``iconv_strpos`` and ``iconv_strrpos``. 

Before PHP 8.0, the failure was reported as a non-blocking warning. Since PHP 8.0, it is a fatal error.

Example
_______

.. code-block:: php

   <?php
   
   var_dump(strpos('abc', 'a', 4));
   
   ?>

Solutions
_________

+ Check that the offset is not beyond the length of the string.
+ Use a try catch around this methodcall.
+ Lengthen the source string.


In previous PHP versions, this error message used to be :ref:`must-be-contained-in-argument-#1-($haystack)`.


In more recent PHP versions, this error message is now :ref:`must-be-contained-in-argument-#1-($haystack)`.
