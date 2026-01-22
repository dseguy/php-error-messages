.. _must-be-between-1-and-7:

must be between 1 and 7
-----------------------
 
.. meta::
	:description:
		must be between 1 and 7: When processing days of the week as an integers, the days are represented by the integers from 1 (Monday) to 7 (Sunday).
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be between 1 and 7
	:og:description: When processing days of the week as an integers, the days are represented by the integers from 1 (Monday) to 7 (Sunday)
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-between-1-and-7.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be between 1 and 7
	:twitter:description: must be between 1 and 7: When processing days of the week as an integers, the days are represented by the integers from 1 (Monday) to 7 (Sunday)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-between-1-and-7.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-between-1-and-7.html","name":"must be between 1 and 7","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Sep 2025 15:10:59 +0000","dateModified":"Sun, 14 Sep 2025 15:10:59 +0000","description":"When processing days of the week as an integers, the days are represented by the integers from 1 (Monday) to 7 (Sunday)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-between-1-and-7.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When processing days of the week as an integers, the days are represented by the integers from 1 (Monday) to 7 (Sunday). Other values are non used, and are reported as faulty.

Example
_______

.. code-block:: php

   <?php
   
   $c = new IntlGregorianCalendar(NULL, 'pt_PT');
   
   try {
       var_dump($c->setMinimalDaysInFirstWeek(0));
   } catch (\ValueError $e) {
       echo $e->getMessage() . \PHP_EOL;
   }
   
   ?>

Solutions
_________

+ Use an integer with a value between 1 and 7.
