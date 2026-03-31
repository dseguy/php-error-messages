.. _must-be-a-list-array:

must be a list array
--------------------
 
.. meta::
	:description:
		must be a list array: This error is reported when the provided list of parameters, in ``mysqli_stmt_execute()`` or ``mysqli::stmt_execute()`` is not a list: the index must start at 0, and be auto-generated.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be a list array
	:og:description: This error is reported when the provided list of parameters, in ``mysqli_stmt_execute()`` or ``mysqli::stmt_execute()`` is not a list: the index must start at 0, and be auto-generated
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-a-list-array.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be a list array
	:twitter:description: must be a list array: This error is reported when the provided list of parameters, in ``mysqli_stmt_execute()`` or ``mysqli::stmt_execute()`` is not a list: the index must start at 0, and be auto-generated
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-list-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-list-array.html","name":"must be a list array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error is reported when the provided list of parameters, in ``mysqli_stmt_execute()`` or ``mysqli::stmt_execute()`` is not a list: the index must start at 0, and be auto-generated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-a-list-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is reported when the provided list of parameters, in ``mysqli_stmt_execute()`` or ``mysqli::stmt_execute()`` is not a list: the index must start at 0, and be auto-generated.

Example
_______

.. code-block:: php

   <?php
   
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   $link = mysqli_connect('localhost', 'my_user', 'my_password', 'world');
   
   mysqli_query($link, 'CREATE TEMPORARY TABLE myCity LIKE City');
   
   /* Prepare an insert statement */
   $stmt = mysqli_prepare($link, 'INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)');
   
   $val1 = 'Stuttgart';
   $val2 = 'DEU';
   $val3 = 'Baden-Wuerttemberg';
   
   /* Execute the statement */
   mysqli_stmt_execute($stmt, [$val1, $val2, 'val' => $val3]);
   
   ?>

Solutions
_________

+ Check that no index is explicitly named in the array of parameters.
+ Apply array_values() to make the array a list.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
