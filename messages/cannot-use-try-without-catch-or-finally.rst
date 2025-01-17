.. _cannot-use-try-without-catch-or-finally:

Cannot use try without catch or finally
---------------------------------------
 
.. meta::
	:description:
		Cannot use try without catch or finally: Try command have catch and finally clauses.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use try without catch or finally
	:og:description: Try command have catch and finally clauses
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-try-without-catch-or-finally.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use try without catch or finally
	:twitter:description: Cannot use try without catch or finally: Try command have catch and finally clauses
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Try command have catch and finally clauses. While both are optional, they can't be omitted both at the same time.

Example
_______

.. code-block:: php

   <?php
   
   try {}
   
   ?>

Solutions
_________

+ Add a catch clause.
+ Add a finally clause.
