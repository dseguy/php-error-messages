.. _extra-data-starting-at-offset-%d-of-%zd-bytes:

Extra data starting at offset %d of %zd bytes
---------------------------------------------
 
.. meta::
	:description:
		Extra data starting at offset %d of %zd bytes: Some extra data were found while processing the serialized string.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Extra data starting at offset %d of %zd bytes
	:og:description: Some extra data were found while processing the serialized string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/extra-data-starting-at-offset-%25d-of-%25zd-bytes.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Extra data starting at offset %d of %zd bytes
	:twitter:description: Extra data starting at offset %d of %zd bytes: Some extra data were found while processing the serialized string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/extra-data-starting-at-offset-%d-of-%zd-bytes.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/extra-data-starting-at-offset-%d-of-%zd-bytes.html","name":"Extra data starting at offset %d of %zd bytes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 17 Aug 2025 14:23:33 +0000","dateModified":"Sun, 17 Aug 2025 14:23:33 +0000","description":"Some extra data were found while processing the serialized string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/extra-data-starting-at-offset-%d-of-%zd-bytes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Some extra data were found while processing the serialized string. They are not needed, so they should not be there. It is recommended to investigate why too much data was provided, as it may devolve in a security issue.

There is no way to check the amount of needed data before unserializing the string.

Example
_______

.. code-block:: php

   <?php
   
   // 1 3   are too much in this string.
   print_r(unserialize('O:1:"a":1:{s:8:"property";s:3:"yes". '1 3';}));
   
   ?>


Literal Examples
****************
+ Extra data starting at offset 31 of 3 bytes

Solutions
_________

+ Catch the warning and review the string after execution.
+ Set up a validation of the incoming string, such as a check sum.
