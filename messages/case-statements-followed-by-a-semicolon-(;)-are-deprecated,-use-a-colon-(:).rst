.. _case-statements-followed-by-a-semicolon-(;)-are-deprecated,-use-a-colon-(:):

Case statements followed by a semicolon (;) are deprecated, use a colon (:)
---------------------------------------------------------------------------
 
.. meta::
	:description:
		Case statements followed by a semicolon (;) are deprecated, use a colon (:): It is possible to use a semi-colon ``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Case statements followed by a semicolon (;) are deprecated, use a colon (:)
	:og:description: It is possible to use a semi-colon ``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/case-statements-followed-by-a-semicolon-%28%3B%29-are-deprecated%2C-use-a-colon-%28%3A%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Case statements followed by a semicolon (;) are deprecated, use a colon (:)
	:twitter:description: Case statements followed by a semicolon (;) are deprecated, use a colon (:): It is possible to use a semi-colon ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/case-statements-followed-by-a-semicolon-(;)-are-deprecated,-use-a-colon-(:).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/case-statements-followed-by-a-semicolon-(;)-are-deprecated,-use-a-colon-(:).html","name":"Case statements followed by a semicolon (;) are deprecated, use a colon (:)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 18 Oct 2025 14:24:11 +0000","dateModified":"Sat, 18 Oct 2025 14:24:11 +0000","description":"It is possible to use a semi-colon ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/case-statements-followed-by-a-semicolon-(;)-are-deprecated,-use-a-colon-(:).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is possible to use a semi-colon ``;`` instead of a colon ``:`` after a case in a switch. This is deprecated in PHP 8.5, and will disappear in PHP 9.

Example
_______

.. code-block:: php

   <?php
   
   switch($a) {
       case 1;
           echo one;
           break;
   }
   
   ?>

Solutions
_________

+ Replace the semicolon by a colon.
+ Do not place a closing tag after a case value.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `none <https://exakat.readthedocs.io/en/latest/Reference/Rules/none.html>`_.
