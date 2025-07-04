.. _write-of-%zu-bytes-failed-with-errno=%d-%s:

Write of %zu bytes failed with errno=%d %s
------------------------------------------
 
.. meta::
	:description:
		Write of %zu bytes failed with errno=%d %s: When the errno=22, this error happens when the path is an invalid path.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Write of %zu bytes failed with errno=%d %s
	:og:description: When the errno=22, this error happens when the path is an invalid path
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/write-of-%25zu-bytes-failed-with-errno%3D%25d-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Write of %zu bytes failed with errno=%d %s
	:twitter:description: Write of %zu bytes failed with errno=%d %s: When the errno=22, this error happens when the path is an invalid path
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/write-of-%zu-bytes-failed-with-errno=%d-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/write-of-%zu-bytes-failed-with-errno=%d-%s.html","name":"Write of %zu bytes failed with errno=%d %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 13:27:12 +0000","dateModified":"Fri, 04 Jul 2025 13:27:12 +0000","description":"When the errno=22, this error happens when the path is an invalid path","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/write-of-%zu-bytes-failed-with-errno=%d-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When the errno=22, this error happens when the path is an invalid path. It may hold forbidden characters, such as colon ``:`` or space `` ``.

Example
_______

.. code-block:: php

   <?php
   
   file_put_contents($path, $content);
   
   ?>


Literal Examples
****************
+ Write of 200 bytes failed with errno=22

Solutions
_________

+ Check the path of the file.
