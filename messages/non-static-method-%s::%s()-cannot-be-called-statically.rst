.. _non-static-method-%s::%s()-cannot-be-called-statically:

Non-static method %s::%s() cannot be called statically
------------------------------------------------------
 
.. meta::
	:description:
		Non-static method %s::%s() cannot be called statically: While a non-static method can call a static method, the contrary is not possible.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Non-static method %s::%s() cannot be called statically
	:og:description: While a non-static method can call a static method, the contrary is not possible
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/non-static-method-%25s%3A%3A%25s%28%29-cannot-be-called-statically.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non-static method %s::%s() cannot be called statically
	:twitter:description: Non-static method %s::%s() cannot be called statically: While a non-static method can call a static method, the contrary is not possible
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/non-static-method-%s::%s()-cannot-be-called-statically.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/non-static-method-%s::%s()-cannot-be-called-statically.html","name":"Non-static method %s::%s() cannot be called statically","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Mar 2025 15:35:07 +0000","dateModified":"Mon, 03 Mar 2025 15:35:07 +0000","description":"While a non-static method can call a static method, the contrary is not possible","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-static-method-%s::%s()-cannot-be-called-statically.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
While a non-static method can call a static method, the contrary is not possible. In particular, the non-static method will not be able to have a valid ``$this`` variable, since the static call doesn't provide one.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       static function foo() {
           //Non-static method x::foo() cannot be called statically
           self::goo();
       }
       
       function goo() {}
   }
   
   (new X)->foo();
   
   ?>


Literal Examples
****************
+ Non-static method x::foo() cannot be called statically

Solutions
_________

+ Make the concrete method static too.
+ Find an object to call the non-static method.

Related Error Messages
______________________

+ :ref:`non-static-method-%s::%s()-should-not-be-called-statically`

Changed Behavior
________________

This error may appear in different PHP versions `nonStaticMethodCalledStatically <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/nonStaticMethodCalledStatically.html>`_.
