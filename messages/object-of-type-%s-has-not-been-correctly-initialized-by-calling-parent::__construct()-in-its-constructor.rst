.. _object-of-type-%s-has-not-been-correctly-initialized-by-calling-parent::__construct()-in-its-constructor:

Object of type %s has not been correctly initialized by calling parent::__construct() in its constructor
--------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Object of type %s has not been correctly initialized by calling parent::__construct() in its constructor: PHP needs an explicit call to the parent constructor to init the parent class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Object of type %s has not been correctly initialized by calling parent::__construct() in its constructor
	:og:description: PHP needs an explicit call to the parent constructor to init the parent class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/object-of-type-%25s-has-not-been-correctly-initialized-by-calling-parent%3A%3A__construct%28%29-in-its-constructor.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object of type %s has not been correctly initialized by calling parent::__construct() in its constructor
	:twitter:description: Object of type %s has not been correctly initialized by calling parent::__construct() in its constructor: PHP needs an explicit call to the parent constructor to init the parent class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/object-of-type-%s-has-not-been-correctly-initialized-by-calling-parent::__construct()-in-its-constructor.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/object-of-type-%s-has-not-been-correctly-initialized-by-calling-parent::__construct()-in-its-constructor.html","name":"Object of type %s has not been correctly initialized by calling parent::__construct() in its constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"PHP needs an explicit call to the parent constructor to init the parent class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/object-of-type-%s-has-not-been-correctly-initialized-by-calling-parent::__construct()-in-its-constructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP needs an explicit call to the parent constructor to init the parent class. Sometimes, overwritten constructor is an expected features. With PHP native classes, ``Datetime`` and ``Datetimezone`` must be explicitely called when extended. 

Note that this error is only raised when the object is used, and not at instantiation time.

Example
_______

.. code-block:: php

   <?php
   
   class X extends DateTime {
   	public function __construct() { }
   }
   
   $object = new X;
   var_dump(object->format("d"));
   ?>


Literal Examples
****************
+ Object of type X has not been correctly initialized by calling parent::__construct() in its constructor

Solutions
_________

+ Add a call to the parent __construct() method.
