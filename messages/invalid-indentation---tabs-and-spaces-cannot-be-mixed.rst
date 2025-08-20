.. _invalid-indentation---tabs-and-spaces-cannot-be-mixed:

Invalid indentation - tabs and spaces cannot be mixed
-----------------------------------------------------
 
.. meta::
	:description:
		Invalid indentation - tabs and spaces cannot be mixed: Since PHP 7.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Invalid indentation - tabs and spaces cannot be mixed
	:og:description: Since PHP 7
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/invalid-indentation---tabs-and-spaces-cannot-be-mixed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Invalid indentation - tabs and spaces cannot be mixed
	:twitter:description: Invalid indentation - tabs and spaces cannot be mixed: Since PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/invalid-indentation---tabs-and-spaces-cannot-be-mixed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/invalid-indentation---tabs-and-spaces-cannot-be-mixed.html","name":"Invalid indentation - tabs and spaces cannot be mixed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 20 Aug 2025 20:59:33 +0000","dateModified":"Wed, 20 Aug 2025 20:59:33 +0000","description":"Since PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/invalid-indentation---tabs-and-spaces-cannot-be-mixed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Since PHP 7.3, HEREDOCS and NOWDOCS syntax allows the text to be indented by the same amount than the closing tag (here ``X``). The indentation must be built with only spaces or only tabulations, and cannot be a mix of both.

Example
_______

.. code-block:: php

   <?php
   
   $x = <<<X
          classic text
   	 X // one tabulation + one space
   
   ?>

Solutions
_________

+ Make the indentation spaces only.
+ Make the indentation tabulations only.
