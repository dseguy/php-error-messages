.. _syntax-error,-unexpected-fully-qualified-name-"%s",-expecting-"function":

syntax error, unexpected fully qualified name "%s", expecting "function"
------------------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected fully qualified name "%s", expecting "function": This error appears when a fully qualified name is used in the body of a class, (or any CITE).
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected fully qualified name &quot;%s&quot;, expecting &quot;function&quot;
	:og:description: This error appears when a fully qualified name is used in the body of a class, (or any CITE)
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-fully-qualified-name-%22%25s%22%2C-expecting-%22function%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected fully qualified name "%s", expecting "function"
	:twitter:description: syntax error, unexpected fully qualified name "%s", expecting "function": This error appears when a fully qualified name is used in the body of a class, (or any CITE)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"function\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"function\".html","name":"syntax error, unexpected fully qualified name \"%s\", expecting \"function\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 12:47:32 +0000","dateModified":"Fri, 04 Jul 2025 12:47:32 +0000","description":"This error appears when a fully qualified name is used in the body of a class, (or any CITE)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"function\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when a fully qualified name is used in the body of a class, (or any CITE).

Example
_______

.. code-block:: php

   <?php
   
   class X {
       \A\B;
   }
   
   ?>

Solutions
_________

+ Remove the standalone name.
+ Add the ``use`` keyword before the standalone name, to import a related trait.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-namespaced-name-"%s",-expecting-"function"`
