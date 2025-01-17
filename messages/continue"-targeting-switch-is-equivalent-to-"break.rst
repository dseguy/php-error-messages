.. _continue"-targeting-switch-is-equivalent-to-"break:

continue" targeting switch is equivalent to "break
--------------------------------------------------
 
.. meta::
	:description:
		continue" targeting switch is equivalent to "break: The recommendation is to use ``break`` inside a switch, and ``continue`` in loops.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: continue&quot; targeting switch is equivalent to &quot;break
	:og:description: The recommendation is to use ``break`` inside a switch, and ``continue`` in loops
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/continue%5C%22-targeting-switch-is-equivalent-to-%5C%22break.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: continue" targeting switch is equivalent to "break
	:twitter:description: continue" targeting switch is equivalent to "break: The recommendation is to use ``break`` inside a switch, and ``continue`` in loops
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The recommendation is to use ``break`` inside a switch, and ``continue`` in loops. Both keywords achieve the same feature of terminating the current structure and following up with the execution, they carry different human meanings.

Example
_______

.. code-block:: php

   <?php
       
   switch($a) {
       case 1:
           continue;
   }
   
   ?>

Solutions
_________

+ Use ``break``.
