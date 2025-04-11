.. _value-of-type-%s-is-not-callable:

Value of type %s is not callable
--------------------------------
 
.. meta::
	:description:
		Value of type %s is not callable: There was an attempt to call a function whose name was provided in a variable, but that value could not be related to a callable code.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Value of type %s is not callable
	:og:description: There was an attempt to call a function whose name was provided in a variable, but that value could not be related to a callable code
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/value-of-type-%25s-is-not-callable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Value of type %s is not callable
	:twitter:description: Value of type %s is not callable: There was an attempt to call a function whose name was provided in a variable, but that value could not be related to a callable code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/value-of-type-%s-is-not-callable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/value-of-type-%s-is-not-callable.html","name":"Value of type %s is not callable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"There was an attempt to call a function whose name was provided in a variable, but that value could not be related to a callable code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/value-of-type-%s-is-not-callable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
There was an attempt to call a function whose name was provided in a variable, but that value could not be related to a callable code. 

+ ``null`` : not a callable
+ ``true``, ``false`` : booleans are not callable
+ ``int`` : integers are not callable
+ ``float`` : float are not callable
+ ``array`` : arrays are callable when they have two elements, with keys 0 and 1. First one is a class or an object of that class, the second is a string with a visible method name on that class. Otherwise, they are not valid callables.
+ ``string`` : strings are callable when they represent a function, with the leading backslash, ``\strlen``, or a method, with a class name, a double colon ``::``, and a visible method name. Otherwise, they are not valid callables.
+ ``object`` : object are callable when their class has a ``__invoke`` method. This might be through a parent, like ``Closure``. Otherwise, objects are not callable, although their method are.

All of these may be checked with a call to ``is_callable()`` on the variable, before using it.

Example
_______

.. code-block:: php

   <?php
   
   $method = null;
   $method();
   
   ?>


Literal Examples
****************
+ Value of type int is not callable
+ Value of type bool is not callable
+ Value of type string is not callable
+ Value of type float is not callable

Solutions
_________

+ Check the variable with ``is_callable()``, before using it with the call syntax.
+ Use one of the available format.

Related Error Messages
______________________

+ :ref:`object-of-type-%s-is-not-callable`
