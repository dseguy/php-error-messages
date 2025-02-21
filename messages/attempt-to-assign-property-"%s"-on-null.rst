.. _attempt-to-assign-property-"%s"-on-null:

Attempt to assign property "%s" on null
---------------------------------------
 
.. meta::
	:description:
		Attempt to assign property "%s" on null: ``null`` is not an object, and it can&#039;t be used as such.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Attempt to assign property &quot;%s&quot; on null
	:og:description: ``null`` is not an object, and it can&#039;t be used as such
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/attempt-to-assign-property-%22%25s%22-on-null.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Attempt to assign property "%s" on null
	:twitter:description: Attempt to assign property "%s" on null: ``null`` is not an object, and it can't be used as such
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/attempt-to-assign-property-\"%s\"-on-null.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/attempt-to-assign-property-\"%s\"-on-null.html","name":"Attempt to assign property \"%s\" on null","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"``null`` is not an object, and it can't be used as such","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/attempt-to-assign-property-\"%s\"-on-null.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``null`` is not an object, and it can't be used as such. Until PHP 8.0, the engine would automatically create a ``stdClass`` object, and replace the ``null`` value with it. This is not the case anymore.

Example
_______

.. code-block:: php

   <?php
   
   $a = null;
   
   $a->b = 1;
   
   ?>


Literal Examples
****************
+ Attempt to assign property "b" on null

Solutions
_________

+ Instantiate any object and replace ``null`` with it.
+ Explicitly instantiate a ``stdClass`` object and replace ``null`` with it.
+ Remove the property usage.
+ Use another variable to use this property.


In previous PHP versions, this error message used to be :ref:`creating-default-object-from-empty-value`.
