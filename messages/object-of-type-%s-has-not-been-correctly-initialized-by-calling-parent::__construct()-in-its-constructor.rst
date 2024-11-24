.. _object-of-type-%s-has-not-been-correctly-initialized-by-calling-parent::__construct()-in-its-constructor:

Object of type %s has not been correctly initialized by calling parent::__construct() in its constructor
--------------------------------------------------------------------------------------------------------
 
	.. meta::
		:description:
			Object of type %s has not been correctly initialized by calling parent::__construct() in its constructor: PHP needs an explicit call to the parent constructor to init the parent class.

		:og:type: article
		:og:title: Object of type %s has not been correctly initialized by calling parent::__construct() in its constructor
		:og:description: PHP needs an explicit call to the parent constructor to init the parent class
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/object-of-type-%25s-has-not-been-correctly-initialized-by-calling-parent%3A%3A__construct%28%29-in-its-constructor.html

Description
___________
 
PHP needs an explicit call to the parent constructor to init the parent class. Sometimes, overwritten constructor is an expected features. With PHP native classes, ``Datetime`` and ``Datetimezone`` must be explicitely called when extended. 

Note that this error is only raised when the object is used, and not at instantiation time.

Example
_______

.. code-block:: php

   <?php
   
   class x extends datetime {
   	public function __construct() { }
   }
   
   $o = new x;
   var_dump($o->format(d));
   ?>


Literal Examples
****************
+ Object of type x has not been correctly initialized by calling parent::__construct() in its constructor

Solutions
_________

+ Add a call to the parent __construct() method.
