.. _returning-null-from-%s::__debuginfo()-is-deprecated,-return-an-empty-array-instead:

Returning null from %s::__debugInfo() is deprecated, return an empty array instead
----------------------------------------------------------------------------------
 
.. meta::
	:description:
		Returning null from %s::__debugInfo() is deprecated, return an empty array instead: The ``__debugInfo()`` magic method allows a class to customize what ``var_dump()`` displays for its instances.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Returning null from %s::__debugInfo() is deprecated, return an empty array instead
	:og:description: The ``__debugInfo()`` magic method allows a class to customize what ``var_dump()`` displays for its instances
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/returning-null-from-%25s%3A%3A__debuginfo%28%29-is-deprecated%2C-return-an-empty-array-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Returning null from %s::__debugInfo() is deprecated, return an empty array instead
	:twitter:description: Returning null from %s::__debugInfo() is deprecated, return an empty array instead: The ``__debugInfo()`` magic method allows a class to customize what ``var_dump()`` displays for its instances
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/returning-null-from-%s::__debuginfo()-is-deprecated,-return-an-empty-array-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/returning-null-from-%s::__debuginfo()-is-deprecated,-return-an-empty-array-instead.html","name":"Returning null from %s::__debugInfo() is deprecated, return an empty array instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 16:26:32 +0000","dateModified":"Wed, 05 Aug 2026 16:26:32 +0000","description":"The ``__debugInfo()`` magic method allows a class to customize what ``var_dump()`` displays for its instances","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/returning-null-from-%s::__debuginfo()-is-deprecated,-return-an-empty-array-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``__debugInfo()`` magic method allows a class to customize what ``var_dump()`` displays for its instances. When this method returns ``null``, PHP has historically treated it as an empty array, but the behavior was inconsistent.

Since PHP 8.4, returning ``null`` from ``__debugInfo()`` is deprecated. This deprecation ensures consistent behavior and explicit return types.

Returning an empty array ``[]`` achieves the same effect (hides all properties from ``var_dump()``) while being type-safe and unambiguous.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public function __debugInfo(): ?array {
           return null;
       }
   }
   
   var_dump(new X);
   
   ?>


Literal Examples
****************
+ Returning null from X::__debugInfo() is deprecated, return an empty array instead

Solutions
_________

+ Return an empty array ``[]`` instead of ``null`` from ``__debugInfo()``.
+ Remove the ``__debugInfo()`` method entirely if you want the default ``var_dump()`` behavior.
+ Return the array of properties you want to display: ``return ['key' => $this->value];``.

Related Error Messages
______________________

+ :ref:`method-%s::%s()-cannot-be-static`

See Also
________

+ `debuginfo <https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.debuginfo>`_
+ `var_dump <https://www.php.net/manual/en/function.var-dump.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `debugInfoCannotReturnNull <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/debugInfoCannotReturnNull.html>`_.
