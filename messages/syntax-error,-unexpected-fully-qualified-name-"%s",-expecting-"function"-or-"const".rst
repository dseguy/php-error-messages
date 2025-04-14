.. _syntax-error,-unexpected-fully-qualified-name-"%s",-expecting-"function"-or-"const":

syntax error, unexpected fully qualified name "%s", expecting "function" or "const"
-----------------------------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected fully qualified name "%s", expecting "function" or "const": There should not be any fully qualified name inside the body of a class, enumeration, trait or interface.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected fully qualified name &quot;%s&quot;, expecting &quot;function&quot; or &quot;const&quot;
	:og:description: There should not be any fully qualified name inside the body of a class, enumeration, trait or interface
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-fully-qualified-name-%22%25s%22%2C-expecting-%22function%22-or-%22const%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected fully qualified name "%s", expecting "function" or "const"
	:twitter:description: syntax error, unexpected fully qualified name "%s", expecting "function" or "const": There should not be any fully qualified name inside the body of a class, enumeration, trait or interface
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"function\"-or-\"const\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"function\"-or-\"const\".html","name":"syntax error, unexpected fully qualified name \"%s\", expecting \"function\" or \"const\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 14 Apr 2025 20:17:15 +0000","dateModified":"Mon, 14 Apr 2025 20:17:15 +0000","description":"There should not be any fully qualified name inside the body of a class, enumeration, trait or interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"function\"-or-\"const\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
There should not be any fully qualified name inside the body of a class, enumeration, trait or interface. Names are used for methods or constants, or with the ``use`` expression, to import a trait.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       \A;
   }
   
   ?>

Solutions
_________

+ Add the ``use`` keyword before the name to import a trait.
+ Add the ``function`` keyword before the name to make it a method, although there should not be any ``\`` in the method name.
+ Add the ``const`` keyword before the name to make it a constant, although there should not be any ``\`` in the constant name.
+ Add the ``#[`` keyword before the name to make it an attribute.
