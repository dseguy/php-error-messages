.. _syntax-error,-unexpected-namespaced-name-"%s",-expecting-"function":

syntax error, unexpected namespaced name "%s", expecting "function"
-------------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected namespaced name "%s", expecting "function": A namespaced name is an identifier with at least one backslash.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected namespaced name &quot;%s&quot;, expecting &quot;function&quot;
	:og:description: A namespaced name is an identifier with at least one backslash
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-namespaced-name-%22%25s%22%2C-expecting-%22function%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected namespaced name "%s", expecting "function"
	:twitter:description: syntax error, unexpected namespaced name "%s", expecting "function": A namespaced name is an identifier with at least one backslash
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-namespaced-name-\"%s\",-expecting-\"function\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-namespaced-name-\"%s\",-expecting-\"function\".html","name":"syntax error, unexpected namespaced name \"%s\", expecting \"function\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 12:47:20 +0000","dateModified":"Fri, 04 Jul 2025 12:47:20 +0000","description":"A namespaced name is an identifier with at least one backslash","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-namespaced-name-\"%s\",-expecting-\"function\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A namespaced name is an identifier with at least one backslash. The body of a class, enumeration, trait or interface does not use any namespaces, as it declares methods, constants and proeprties. There may be namespaced names in a ``use`` declaration, but such expression starts with a keyword.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   
   A\B;
   
   C\D($e);
   
   }
   
   ?>


Literal Examples
****************
+ syntax error, unexpected namespaced name "A\B", expecting "function\

Solutions
_________

+ Add the ``use`` keyword before the name to import a trait.
+ Add the ``function`` keyword before the name to make it a method, although there should not be any ``\`` in the method name.
+ Add the ``const`` keyword before the name to make it a constant, although there should not be any ``\`` in the constant name.
+ Add the ``#[`` keyword before the name to make it an attribute.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-fully-qualified-name-"%s",-expecting-"function"`
