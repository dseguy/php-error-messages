.. _syntax-error,-unexpected-identifier-"%s",-expecting-"{":

syntax error, unexpected identifier "%s", expecting "{"
-------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected identifier "%s", expecting "{": In this case, PHP found two identifiers in a row: ``X`` and ``Y``.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected identifier &quot;%s&quot;, expecting &quot;{&quot;
	:og:description: In this case, PHP found two identifiers in a row: ``X`` and ``Y``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22%25s%22%2C-expecting-%22%7B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected identifier "%s", expecting "{"
	:twitter:description: syntax error, unexpected identifier "%s", expecting "{": In this case, PHP found two identifiers in a row: ``X`` and ``Y``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"{\".html","name":"syntax error, unexpected identifier \"%s\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"In this case, PHP found two identifiers in a row: ``X`` and ``Y``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In this case, PHP found two identifiers in a row: ``X`` and ``Y``. This never happens in PHP code. Either a keyword should have separated them, or one of them is a duplicate.

Example
_______

.. code-block:: php

   <?php
   
   class X Y {}
   
   enum E Z {}
   
   interface I W {}
   
   ?>

Solutions
_________

+ Add a missing keyword between the two identifiers: here, ``implements`` or ``extends`` could work.
+ Remove one of the duplicate name.
