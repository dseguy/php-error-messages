.. _unsupported-declare-'%s':

Unsupported declare \'%s\'
--------------------------
 
.. meta::
	:description:
		Unsupported declare \'%s\': ``declare`` sets some directives for the file or block.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unsupported declare \&#039;%s\&#039;
	:og:description: ``declare`` sets some directives for the file or block
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unsupported-declare-%27%25s%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unsupported declare \'%s\'
	:twitter:description: Unsupported declare \'%s\': ``declare`` sets some directives for the file or block
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unsupported-declare-'%s'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unsupported-declare-'%s'.html","name":"Unsupported declare \\'%s\\'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"``declare`` sets some directives for the file or block","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unsupported-declare-'%s'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``declare`` sets some directives for the file or block. The possible directives are limited to three: ``strict_types``, the most common, ``ticks`` and ``encoding``.

Example
_______

.. code-block:: php

   <?php
   
   declare(a = 1);
   
   ?>

Solutions
_________

+ Use one of the three valid declare directives.
+ Remove the declare call.
