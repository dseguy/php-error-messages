.. _syntax-error,-unexpected-identifier-"%s",-expecting-","-or-";":

syntax error, unexpected identifier "%s", expecting "," or ";"
--------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected identifier "%s", expecting "," or ";": This error is not related to the upcoming identifier, but to the previous delimiters.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: syntax error, unexpected identifier &quot;%s&quot;, expecting &quot;,&quot; or &quot;;&quot;
		:og:description: This error is not related to the upcoming identifier, but to the previous delimiters
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22%25s%22%2C-expecting-%22%2C%22-or-%22%3B%22.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: syntax error, unexpected identifier "%s", expecting "," or ";"
		:twitter:description: syntax error, unexpected identifier "%s", expecting "," or ";": This error is not related to the upcoming identifier, but to the previous delimiters
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This error is not related to the upcoming identifier, but to the previous delimiters. In both cases of the illustration, a string was started, with single or double quotes: yet, inside these strings, there was another set of the same delimiter. The parser could not differentiate between the two usages, and exited the string.

Example
_______

.. code-block:: php

   <?php
   
   echo '<a href='https://www.exakat.io'>Exakat.io</a>';
   
   echo "<a href="https://www.exakat.io">Exakat.io</a>";
   
   ?>

Solutions
_________

+ Escape quotes inside a string, when they are used as delimiter.
+ Use the other quotes inside the string: if single quotes are used as delimiters, use double quotes in it.
+ Switch to the heredoc syntax, to simplify the syntax for both quotes.
