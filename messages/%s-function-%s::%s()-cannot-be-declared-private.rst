.. _%s-function-%s::%s()-cannot-be-declared-private:

%s function %s::%s() cannot be declared private
-----------------------------------------------
 
.. meta::
	:description:
		%s function %s::%s() cannot be declared private: A method may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s function %s::%s() cannot be declared private
	:og:description: A method may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-function-%25s%3A%3A%25s%28%29-cannot-be-declared-private.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s function %s::%s() cannot be declared private
	:twitter:description: %s function %s::%s() cannot be declared private: A method may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
A method may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time. 

These two properties are mutually exclusive.


Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private abstract function foo() ;
   }
   
   ?>


Literal Examples
****************
+ abstract function X::foo() cannot be declared private

Solutions
_________

+ Make the method protected or public.
+ Remove the abstract keyword.
