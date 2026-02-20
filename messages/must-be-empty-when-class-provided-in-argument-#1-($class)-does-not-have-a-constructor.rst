.. _must-be-empty-when-class-provided-in-argument-#1-(\$class)-does-not-have-a-constructor:

must be empty when class provided in argument #1 ($class) does not have a constructor
-------------------------------------------------------------------------------------
 
.. meta::
	:description:
		must be empty when class provided in argument #1 ($class) does not have a constructor: The class referenced in the PDO::fetchObject method does not have a constructor.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be empty when class provided in argument #1 ($class) does not have a constructor
	:og:description: The class referenced in the PDO::fetchObject method does not have a constructor
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-empty-when-class-provided-in-argument-%231-%28%24class%29-does-not-have-a-constructor.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be empty when class provided in argument #1 ($class) does not have a constructor
	:twitter:description: must be empty when class provided in argument #1 ($class) does not have a constructor: The class referenced in the PDO::fetchObject method does not have a constructor
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-empty-when-class-provided-in-argument-#1-($class)-does-not-have-a-constructor.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-empty-when-class-provided-in-argument-#1-($class)-does-not-have-a-constructor.html","name":"must be empty when class provided in argument #1 ($class) does not have a constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 22:11:09 +0000","dateModified":"Thu, 19 Feb 2026 22:11:09 +0000","description":"The class referenced in the PDO::fetchObject method does not have a constructor","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-empty-when-class-provided-in-argument-#1-($class)-does-not-have-a-constructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The class referenced in the PDO::fetchObject method does not have a constructor. No argument will be handed to it, so there is no need to pass that argument.

Example
_______

.. code-block:: php

   <?php
   
   class X
   {
       public $id;
       protected $val;
       private $val2;
   }
   
   $stmt->execute(); // STMT is a PDO statement
   try {
       var_dump($stmt->fetchObject(X::class, [0]));
   } catch (\Throwable $e) {
       echo $e::class, ': ', $e->getMessage(), \PHP_EOL;
   }
   
   ?>

Solutions
_________

+ Omit the second argument.
+ Use an empty array for the second argument.
+ Use a null value for the second argument.

Related Error Messages
______________________

+ :ref:`must-be-empty-when-class-provided-in-argument-#2-($class)-does-not-have-a-constructor`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
