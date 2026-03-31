.. _%s::__sleep()-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize:

%s::__sleep() should return an array only containing the names of instance-variables to serialize
-------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		%s::__sleep() should return an array only containing the names of instance-variables to serialize: The return type of ``__sleep`` is actually ``array``, even when it is not mentioned.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s::__sleep() should return an array only containing the names of instance-variables to serialize
	:og:description: The return type of ``__sleep`` is actually ``array``, even when it is not mentioned
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%3A%3A__sleep%28%29-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s::__sleep() should return an array only containing the names of instance-variables to serialize
	:twitter:description: %s::__sleep() should return an array only containing the names of instance-variables to serialize: The return type of ``__sleep`` is actually ``array``, even when it is not mentioned
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s::__sleep()-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s::__sleep()-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize.html","name":"%s::__sleep() should return an array only containing the names of instance-variables to serialize","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"The return type of ``__sleep`` is actually ``array``, even when it is not mentioned","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s::__sleep()-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The return type of ``__sleep`` is actually ``array``, even when it is not mentioned. Any other returned value generate this error.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function __sleep() {
           return 1;
       }
   }
   
   serialize(new X);
   
   ?>

Solutions
_________

+ Return an array from __sleep.
+ Add the return type ``array`` and return an array from __sleep.
+ Remove the __sleep() method.

Related Error Messages
______________________

+ :ref:`%s"-returned-as-member-variable-from-__sleep()-but-does-not-exist`


In previous PHP versions, this error message used to be :ref:`sleep-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize.`.
