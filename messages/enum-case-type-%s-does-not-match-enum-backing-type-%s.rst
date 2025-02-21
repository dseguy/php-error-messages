.. _enum-case-type-%s-does-not-match-enum-backing-type-%s:

Enum case type %s does not match enum backing type %s
-----------------------------------------------------
 
.. meta::
	:description:
		Enum case type %s does not match enum backing type %s: Enumeration may be backed with a scalar type, ``int`` or ``string``.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Enum case type %s does not match enum backing type %s
	:og:description: Enumeration may be backed with a scalar type, ``int`` or ``string``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/enum-case-type-%25s-does-not-match-enum-backing-type-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enum case type %s does not match enum backing type %s
	:twitter:description: Enum case type %s does not match enum backing type %s: Enumeration may be backed with a scalar type, ``int`` or ``string``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enum-case-type-%s-does-not-match-enum-backing-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enum-case-type-%s-does-not-match-enum-backing-type-%s.html","name":"Enum case type %s does not match enum backing type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Enumeration may be backed with a scalar type, ``int`` or ``string``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/enum-case-type-%s-does-not-match-enum-backing-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Enumeration may be backed with a scalar type, ``int`` or ``string``. When doing so, each case must have a value of that type. And no type juggling happens, so ``'1'`` is not an integer, while ``1`` is not a string. The types must match perfectly one with another.

Example
_______

.. code-block:: php

   <?php
   
   enum E : string {
       case A = 1;
   }
   
   ?>

Solutions
_________

+ Change the type on the enumeration to fit the value.
+ Change the type on the value to fit the enumeration.
+ Remove types and values.
