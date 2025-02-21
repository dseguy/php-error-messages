.. _non-enum-class-%s-cannot-implement-interface-%s:

Non-enum class %s cannot implement interface %s
-----------------------------------------------
 
.. meta::
	:description:
		Non-enum class %s cannot implement interface %s: UnitEnum is an PHP native and reserved interface.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Non-enum class %s cannot implement interface %s
	:og:description: UnitEnum is an PHP native and reserved interface
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/non-enum-class-%25s-cannot-implement-interface-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non-enum class %s cannot implement interface %s
	:twitter:description: Non-enum class %s cannot implement interface %s: UnitEnum is an PHP native and reserved interface
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/non-enum-class-%s-cannot-implement-interface-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/non-enum-class-%s-cannot-implement-interface-%s.html","name":"Non-enum class %s cannot implement interface %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"UnitEnum is an PHP native and reserved interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-enum-class-%s-cannot-implement-interface-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
UnitEnum is an PHP native and reserved interface. It is only used with enumerations. It is also handled by PHP itself, which adds it to enumerations: there is no need to add it explictely. This applies to ``BackedEnum`` and ``UnitEnum``, as of PHP 8.4.

Example
_______

.. code-block:: php

   <?php
   
   class X implements YnitEnum {}
   
   ?>


Literal Examples
****************
+ Non-enum class x cannot implement interface UnitEnum
+ Non-enum class x cannot implement interface BackEnum

Solutions
_________

+ Turn the class into an enumeration.
+ Remove the UnitEnum implementation.

Related Error Messages
______________________

+ :ref:`%s-%s-cannot-implement-previously-implemented-interface-%s`
