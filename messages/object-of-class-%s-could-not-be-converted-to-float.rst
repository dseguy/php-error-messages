.. _object-of-class-%s-could-not-be-converted-to-float:

Object of class %s could not be converted to float
--------------------------------------------------
 
.. meta::
	:description:
		Object of class %s could not be converted to float: PHP reports that the object cannot be used as an float.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Object of class %s could not be converted to float
	:og:description: PHP reports that the object cannot be used as an float
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/object-of-class-%25s-could-not-be-converted-to-float.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object of class %s could not be converted to float
	:twitter:description: Object of class %s could not be converted to float: PHP reports that the object cannot be used as an float
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/object-of-class-%s-could-not-be-converted-to-float.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/object-of-class-%s-could-not-be-converted-to-float.html","name":"Object of class %s could not be converted to float","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jan 2025 15:24:07 +0000","dateModified":"Wed, 15 Jan 2025 15:24:07 +0000","description":"PHP reports that the object cannot be used as an float","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/object-of-class-%s-could-not-be-converted-to-float.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP reports that the object cannot be used as an float. Converting an object into a float is only possible when the underlying class has provided the code for it. There is no userland code to do that, such as a magic code: it is only possible via a call to a method that returns a float.

Among the PHP classes, ``gmp`` and ``bcmath`` (in PHP 8.4) extensions provide classes which also works with math operations. Most of the other classes do not convert easily to numbers, as it makes little sense to convert a database connexion (for example) into a number.


Example
_______

.. code-block:: php

   <?php
   
   class Y { }
   
   // Error!
   echo new Y + 1; 
   
   $multiplication = gmp_mul('12', 3);
   
   print $multiplication * 4; // 144
   
   $number = new BcMath\Number('1.234');
   
   $addition = $number->add(new BcMath\Number('2.34567'));
   
   print $addition + 1; // 4.57967
   
   ?>


Literal Examples
****************
+ Object of class Y could not be converted to float
+ Object of class Mysqli could not be converted to float

Solutions
_________

+ Implement tod that returns an integer, on that object.
+ Upgrade to PHP 8.4, to use automatic conversion with ``bcmath``.

Related Error Messages
______________________

+ :ref:`object-of-class-%s-could-not-be-converted-to-bool`
+ :ref:`object-of-class-%s-could-not-be-converted-to-string`
+ :ref:`object-of-class-%s-could-not-be-converted-to-int`
