.. _case-%s-of-non-backed-enum-%s-must-not-have-a-value:

Case %s of non-backed enum %s must not have a value
---------------------------------------------------
 
.. meta::
	:description:
		Case %s of non-backed enum %s must not have a value: An enum is either purely a set of named cases (a ``pure`` enum), or it is a ``backed`` enum, where every case is associated with an ``int`` or ``string`` value declared after the enum name, like ``enum Suit: int``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Case %s of non-backed enum %s must not have a value
	:og:description: An enum is either purely a set of named cases (a ``pure`` enum), or it is a ``backed`` enum, where every case is associated with an ``int`` or ``string`` value declared after the enum name, like ``enum Suit: int``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/case-%25s-of-non-backed-enum-%25s-must-not-have-a-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Case %s of non-backed enum %s must not have a value
	:twitter:description: Case %s of non-backed enum %s must not have a value: An enum is either purely a set of named cases (a ``pure`` enum), or it is a ``backed`` enum, where every case is associated with an ``int`` or ``string`` value declared after the enum name, like ``enum Suit: int``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/case-%s-of-non-backed-enum-%s-must-not-have-a-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/case-%s-of-non-backed-enum-%s-must-not-have-a-value.html","name":"Case %s of non-backed enum %s must not have a value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:01:32 +0000","dateModified":"Sun, 26 Jul 2026 06:01:32 +0000","description":"An enum is either purely a set of named cases (a ``pure`` enum), or it is a ``backed`` enum, where every case is associated with an ``int`` or ``string`` value declared after the enum name, like ``enum Suit: int``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/case-%s-of-non-backed-enum-%s-must-not-have-a-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An enum is either purely a set of named cases (a ``pure`` enum), or it is a ``backed`` enum, where every case is associated with an ``int`` or ``string`` value declared after the enum name, like ``enum Suit: int``.

Once an enum does not declare a backing type, none of its cases may be given a value. Assigning a value to a case, like ``case Hearts = 1;``, requires the enum itself to declare a backing type.

Example
_______

.. code-block:: php

   <?php
   
   enum Suit
   {
       case Hearts = 1;
       case Spades;
   }
   
   ?>


Literal Examples
****************
+ Case Hearts of non-backed enum Suit must not have a value

Solutions
_________

+ Remove the value from the case declaration, to keep the enum a pure enum.
+ Add a backing type to the enum declaration, such as ``enum Suit: int``, so every case can carry a value.

Related Error Messages
______________________

+ :ref:`enum-case-type-%s-does-not-match-enum-backing-type-%s`
+ :ref:`enum-backing-type-must-be-int-or-string`
+ :ref:`duplicate-value-in-enum-%s-for-cases-%s-and-%s`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
