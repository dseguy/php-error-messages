.. _datetimezone-object-is-unconstructed:

DateTimeZone object is unconstructed
------------------------------------
 
.. meta::
	:description:
		DateTimeZone object is unconstructed: ``IntlTimeZone::fromDateTimeZone()`` converts a ``DateTimeZone`` object into an ``IntlTimeZone`` one.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: DateTimeZone object is unconstructed
	:og:description: ``IntlTimeZone::fromDateTimeZone()`` converts a ``DateTimeZone`` object into an ``IntlTimeZone`` one
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/datetimezone-object-is-unconstructed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DateTimeZone object is unconstructed
	:twitter:description: DateTimeZone object is unconstructed: ``IntlTimeZone::fromDateTimeZone()`` converts a ``DateTimeZone`` object into an ``IntlTimeZone`` one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/datetimezone-object-is-unconstructed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/datetimezone-object-is-unconstructed.html","name":"DateTimeZone object is unconstructed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 12:23:30 +0000","dateModified":"Sat, 25 Jul 2026 12:23:30 +0000","description":"``IntlTimeZone::fromDateTimeZone()`` converts a ``DateTimeZone`` object into an ``IntlTimeZone`` one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/datetimezone-object-is-unconstructed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``IntlTimeZone::fromDateTimeZone()`` converts a ``DateTimeZone`` object into an ``IntlTimeZone`` one. To do so, it reads the internal timezone data that ``DateTimeZone::__construct()`` normally sets up.

If it is given a ``DateTimeZone`` instance that was created without going through its constructor -- for example via ``ReflectionClass::newInstanceWithoutConstructor()``, or an object left in a broken state after a failed ``unserialize()`` -- that internal data is missing, and the conversion cannot proceed.

Example
_______

.. code-block:: php

   <?php
   
   $tz = (new ReflectionClass(DateTimeZone::class))->newInstanceWithoutConstructor();
   
   // The object exists, but __construct() was never called
   IntlTimeZone::fromDateTimeZone($tz);
   
   ?>

Solutions
_________

+ Always create the ``DateTimeZone`` with ``new DateTimeZone($identifier)`` rather than bypassing its constructor.
+ If the object comes from unserialization, verify it succeeded and produced a valid object before using it.
+ Wrap the call in a ``try``/``catch`` (Error) if the ``DateTimeZone`` instance's origin cannot be controlled.

Related Error Messages
______________________

+ :ref:`the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed`
+ :ref:`intllistformatter-object-is-already-constructed`

See Also
________

+ `IntlTimeZone::fromDateTimeZone <https://www.php.net/manual/en/intltimezone.fromdatetimezone.php>`_
+ `DateTimeZone <https://www.php.net/manual/en/class.datetimezone.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
