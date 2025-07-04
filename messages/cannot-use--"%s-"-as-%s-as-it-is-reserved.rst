.. _cannot-use--"%s-"-as-%s-as-it-is-reserved:

Cannot use \"%s\" as %s as it is reserved
-----------------------------------------
 
.. meta::
	:description:
		Cannot use \"%s\" as %s as it is reserved: ``array`` and ``callable`` cannot be used with the leading backslash.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use \&quot;%s\&quot; as %s as it is reserved
	:og:description: ``array`` and ``callable`` cannot be used with the leading backslash
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use--%22%25s-%22-as-%25s-as-it-is-reserved.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use \"%s\" as %s as it is reserved
	:twitter:description: Cannot use \"%s\" as %s as it is reserved: ``array`` and ``callable`` cannot be used with the leading backslash
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"%s-\"-as-%s-as-it-is-reserved.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"%s-\"-as-%s-as-it-is-reserved.html","name":"Cannot use \\\"%s\\\" as %s as it is reserved","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Jul 2025 18:24:53 +0000","dateModified":"Tue, 01 Jul 2025 18:24:53 +0000","description":"``array`` and ``callable`` cannot be used with the leading backslash","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use--\"%s-\"-as-%s-as-it-is-reserved.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``array`` and ``callable`` cannot be used with the leading backslash. This bug was fixed in PHP 8.5.

Example
_______

.. code-block:: php

   <?php
   
   // Since PHP 8.5
   function foo() : \array {} 
   
   ?>

Solutions
_________

+ Use the type without the leading ``\``.
+ Upgrade to PHP 8.5 (when available).

Related Error Messages
______________________

+ :ref:`type-declaration-'%s'-must-be-unqualified`
