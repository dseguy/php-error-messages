.. _use-of-"self"-in-callables-is-deprecated:

Use of "self" in callables is deprecated
----------------------------------------
 
.. meta::
	:description:
		Use of "self" in callables is deprecated: Since PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Use of &quot;self&quot; in callables is deprecated
	:og:description: Since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/use-of-%22self%22-in-callables-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Use of "self" in callables is deprecated
	:twitter:description: Use of "self" in callables is deprecated: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/use-of-\"self\"-in-callables-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/use-of-\"self\"-in-callables-is-deprecated.html","name":"Use of \"self\" in callables is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 22 Jan 2025 12:05:43 +0000","dateModified":"Wed, 22 Jan 2025 12:05:43 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/use-of-\"self\"-in-callables-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Since PHP 8.2, it is not possible anymore to use ``self`` as a string, when creating a callable. ``self`` is a keyword with contextual meaning. Then, it has little meaning as a string and leads to confusion.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       static function foo() {
           echo __METHOD__;
       }
   
       static function test() {
           call_user_func(array('self','foo'));
       }
   }
   
   X::test();
   
   ?>

Solutions
_________

+ Use ``self::class`` to make this class name non-ambiguous.
+ Use another way to create a closure for the method, such as ``self::foo(...)``.

Related Error Messages
______________________

+ :ref:`use-of-"parent"-in-callables-is-deprecated`
+ :ref:`use-of-"static"-in-callables-is-deprecated`

See Also
________

+ `PHP RFC: Deprecate partially supported callables <https://wiki.php.net/rfc/deprecate_partially_supported_callables>`_
