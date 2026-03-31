.. _charset-"%s"-is-not-supported,-assuming-utf-8:

Charset "%s" is not supported, assuming UTF-8
---------------------------------------------
 
.. meta::
	:description:
		Charset "%s" is not supported, assuming UTF-8: The provided character set, third argument, is not valid.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Charset &quot;%s&quot; is not supported, assuming UTF-8
	:og:description: The provided character set, third argument, is not valid
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/charset-%22%25s%22-is-not-supported%2C-assuming-utf-8.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Charset "%s" is not supported, assuming UTF-8
	:twitter:description: Charset "%s" is not supported, assuming UTF-8: The provided character set, third argument, is not valid
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/charset-\"%s\"-is-not-supported,-assuming-utf-8.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/charset-\"%s\"-is-not-supported,-assuming-utf-8.html","name":"Charset \"%s\" is not supported, assuming UTF-8","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The provided character set, third argument, is not valid","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/charset-\"%s\"-is-not-supported,-assuming-utf-8.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The provided character set, third argument, is not valid.

Example
_______

.. code-block:: php

   <?php
   
       htmlentities($a, $b, 'xxx');
   
   ?>


Literal Examples
****************
+ Charset "xxx" is not supported, assuming UTF-8

Solutions
_________

+ Use a valid character set.
+ Check for typos, or empty values.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
