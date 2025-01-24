.. _must-be-a-valid-encoding,-"%s"-given:

must be a valid encoding, "%s" given
------------------------------------
 
.. meta::
	:description:
		must be a valid encoding, "%s" given: The encoding arguments, in any ``mb_`` function, must be a supported encoding.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be a valid encoding, &quot;%s&quot; given
	:og:description: The encoding arguments, in any ``mb_`` function, must be a supported encoding
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-a-valid-encoding%2C-%22%25s%22-given.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be a valid encoding, "%s" given
	:twitter:description: must be a valid encoding, "%s" given: The encoding arguments, in any ``mb_`` function, must be a supported encoding
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-encoding,-\"%s\"-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-encoding,-\"%s\"-given.html","name":"must be a valid encoding, \"%s\" given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 22 Jan 2025 11:00:16 +0000","dateModified":"Thu, 16 Jan 2025 10:55:04 +0000","description":"The encoding arguments, in any ``mb_`` function, must be a supported encoding","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-encoding,-\"%s\"-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The encoding arguments, in any ``mb_`` function, must be a supported encoding. Otherwise, the mbstring extension doesn't know how to handle it.

The current list of encodings is available with the function ``mb_list_encodings()``. Encoding names are case insensitive.

The list of supported encoding depends on the PHP version. Some are added or removed, depending on the version.


Example
_______

.. code-block:: php

   <?php
   
   	print mb_chr(128024, 'UTF-8')); // emoji of an elephant
   
   	//Argument #2 ($encoding) must be a valid encoding, "elephpant" given 
   	print mb_chr($value, 'elephpant'));
   ?>


Literal Examples
****************
+ must be a valid encoding, "qprint" given
+ must be a valid encoding, "uuencode" given

Solutions
_________

+ Check the encoding with mb_list_encodings() before using one.
