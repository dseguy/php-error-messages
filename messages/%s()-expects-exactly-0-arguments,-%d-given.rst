.. _%s()-expects-exactly-0-arguments,-%d-given:

%s() expects exactly 0 arguments, %d given
------------------------------------------
 
.. meta::
	:description:
		%s() expects exactly 0 arguments, %d given: The mentionned method does not accept any argument, and reports it.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: %s() expects exactly 0 arguments, %d given
		:og:description: The mentionned method does not accept any argument, and reports it
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29-expects-exactly-0-arguments%2C-%25d-given.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: %s() expects exactly 0 arguments, %d given
		:twitter:description: %s() expects exactly 0 arguments, %d given: The mentionned method does not accept any argument, and reports it
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The mentionned method does not accept any argument, and reports it. 

This is the case of func_num_args(), get_called_class(), error_get_last(), json_last_error_msg(), mysqli_connect_errno(), mysqli_get_links_stats(), mysqli_connect_error(), DOMDocumentFragment::__construct(), XSLTProcessor::hasExsltSupport(), etc. It is also the case for the property hook ``get()``.

Example
_______

.. code-block:: php

   <?php
   
   function dump_error(callable $callable) {
       try {
           var_dump($callable());
       } catch (Throwable $e) {
           var_dump($e->getMessage());
       }
   }
   
   ?>

Solutions
_________

+ Remove all arguments when calling such method.
