.. _unknown-or-bad-format-(%s):

Unknown or bad format (%s)
--------------------------
 
.. meta::
	:description:
		Unknown or bad format (%s): This error is emitted by the Date extension, when creating a DatePeriod class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unknown or bad format (%s)
	:og:description: This error is emitted by the Date extension, when creating a DatePeriod class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unknown-or-bad-format-%28%25s%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unknown or bad format (%s)
	:twitter:description: Unknown or bad format (%s): This error is emitted by the Date extension, when creating a DatePeriod class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unknown-or-bad-format-(%s).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unknown-or-bad-format-(%s).html","name":"Unknown or bad format (%s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Mar 2025 08:22:33 +0000","dateModified":"Sat, 15 Mar 2025 08:22:33 +0000","description":"This error is emitted by the Date extension, when creating a DatePeriod class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unknown-or-bad-format-(%s).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is emitted by the Date extension, when creating a DatePeriod class. That class requires a start date as the first argument, and the provided value could not be parsed.

Example
_______

.. code-block:: php

   <?php
   
   new DatePeriod('L');
   
   ?>


Literal Examples
****************
+ Unknown or bad format (L)

Solutions
_________

+ Use a valid date.
+ Use a DateTimeInterface object as first argument: DateTimeImmutable, DateTime, etc.
+ Use the DatePeriod::createFromISO8601String() method to handle ISO 8601 formats.
