.. _datetimeinterface-can't-be-implemented-by-user-classes:

DateTimeInterface can't be implemented by user classes
------------------------------------------------------
 
.. meta::
	:description:
		DateTimeInterface can't be implemented by user classes: DateTimeInterface is an interface.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: DateTimeInterface can&#039;t be implemented by user classes
	:og:description: DateTimeInterface is an interface
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/datetimeinterface-can%27t-be-implemented-by-user-classes.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DateTimeInterface can't be implemented by user classes
	:twitter:description: DateTimeInterface can't be implemented by user classes: DateTimeInterface is an interface
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/datetimeinterface-can't-be-implemented-by-user-classes.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/datetimeinterface-can't-be-implemented-by-user-classes.html","name":"DateTimeInterface can't be implemented by user classes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 18:53:44 +0000","dateModified":"Sun, 16 Feb 2025 18:53:05 +0000","description":"DateTimeInterface is an interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/datetimeinterface-can't-be-implemented-by-user-classes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
DateTimeInterface is an interface. It should be available for usage with the implements keyword, but the PHP engines forbids it. Instead, it is recommended to extends the DateTime or DateTimeImmutable classes. 

On the other hand, DateTimeInterface is available to type arguments, properties, etc. or to use with instanceof and catch.

Example
_______

.. code-block:: php

   <?php
   
   class X implements DateTimeInterface {}
   
   ?>

Solutions
_________

+ Extends DateTime class.
+ Extends DateTimeImmutable class.
