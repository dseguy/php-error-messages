.. _the-connection-has-no-charset-associated:

The connection has no charset associated
----------------------------------------
 
.. meta::
	:description:
		The connection has no charset associated: This error appears when PHP cannot retrieve the character set used by the connection to MySQL.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The connection has no charset associated
	:og:description: This error appears when PHP cannot retrieve the character set used by the connection to MySQL
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-connection-has-no-charset-associated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The connection has no charset associated
	:twitter:description: The connection has no charset associated: This error appears when PHP cannot retrieve the character set used by the connection to MySQL
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-connection-has-no-charset-associated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-connection-has-no-charset-associated.html","name":"The connection has no charset associated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:06:02 +0000","dateModified":"Tue, 31 Mar 2026 09:06:02 +0000","description":"This error appears when PHP cannot retrieve the character set used by the connection to MySQL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-connection-has-no-charset-associated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when PHP cannot retrieve the character set used by the connection to MySQL. The mysqli_get_charset() function tries to fetch the data from the connexion, but the result was not usable.

Such error is probably circumstancial: the server may have gone away, or crashed, leading to no answer about charset.

Example
_______

.. code-block:: php

   <?php
   
       $db = mysqli_init();
       $db->real_connect(localhost,user,password,test);
       var_dump($db->get_charset()); 
   
   ?>

Solutions
_________

+ Check the server health.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
