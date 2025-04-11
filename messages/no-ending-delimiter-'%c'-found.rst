.. _no-ending-delimiter-'%c'-found:

No ending delimiter '%c' found
------------------------------
 
.. meta::
	:description:
		No ending delimiter '%c' found: This error is a regex related error, not a PHP one.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: No ending delimiter &#039;%c&#039; found
	:og:description: This error is a regex related error, not a PHP one
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/no-ending-delimiter-%27%25c%27-found.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No ending delimiter '%c' found
	:twitter:description: No ending delimiter '%c' found: This error is a regex related error, not a PHP one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/no-ending-delimiter-'%c'-found.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/no-ending-delimiter-'%c'-found.html","name":"No ending delimiter '%c' found","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error is a regex related error, not a PHP one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no-ending-delimiter-'%c'-found.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is a regex related error, not a PHP one. The regular expression is the first argument of the call. It is invalid, as regex are supposed to start and end with the same non-alphanumeric character. 

Then, PHP stops the process, and returns false. In this case, false may be confused with a failure to find the pattern in the string, and yield unexpected results.

Example
_______

.. code-block:: php

   <?php
   
   preg_match('/[a-b]', 'abc');
   
   ?>


Literal Examples
****************
+ No ending delimiter '/' found

Solutions
_________

+ Fix the regex.

Related Error Messages
______________________

+ :ref:`delimiter-must-not-be-alphanumeric,-backslash,-or-nul-byte`
+ :ref:`delimiter-must-not-be-alphanumeric,-backslash,-or-nul`
+ :ref:`delimiter-must-not-be-alphanumeric-or-backslash`

See Also
________

+ `PCREPatterns <https://www.php.net/manual/en/pcre.pattern.php>`_
