.. _delimiter-must-not-be-alphanumeric,-backslash,-or-nul-byte:

Delimiter must not be alphanumeric, backslash, or NUL byte
----------------------------------------------------------
 
.. meta::
	:description:
		Delimiter must not be alphanumeric, backslash, or NUL byte: The first character of a regex is the delimiter, that delimits the regex.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Delimiter must not be alphanumeric, backslash, or NUL byte
	:og:description: The first character of a regex is the delimiter, that delimits the regex
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/delimiter-must-not-be-alphanumeric%2C-backslash%2C-or-nul-byte.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Delimiter must not be alphanumeric, backslash, or NUL byte
	:twitter:description: Delimiter must not be alphanumeric, backslash, or NUL byte: The first character of a regex is the delimiter, that delimits the regex
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/delimiter-must-not-be-alphanumeric,-backslash,-or-nul-byte.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/delimiter-must-not-be-alphanumeric,-backslash,-or-nul-byte.html","name":"Delimiter must not be alphanumeric, backslash, or NUL byte","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 13:24:18 +0000","dateModified":"Fri, 04 Jul 2025 13:24:18 +0000","description":"The first character of a regex is the delimiter, that delimits the regex","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/delimiter-must-not-be-alphanumeric,-backslash,-or-nul-byte.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The first character of a regex is the delimiter, that delimits the regex. There is a first and a last delimiter. 

In the case of this error, the first regex character is of invalid type. It cannot be alphanumeric (a-z, A-Z and digits), the backslash ``\`` nor the nul byte ``chr(0)``. 

Note that if the first characters are white spaces, such as space, tabulation, new line, they are ignored as potential delimiter.

Example
_______

.. code-block:: php

   <?php
   
   preg_match('a[bc]a', 'abc');
   
   ?>

Solutions
_________

+ Use a non-alphanumeric character, like ``/``, ``#``.

Related Error Messages
______________________

+ :ref:`no-ending-delimiter-'%c'-found`
+ :ref:`delimiter-must-not-be-alphanumeric,-backslash,-or-nul`

See Also
________

+ `PCREPatterns <https://www.php.net/manual/en/pcre.pattern.php>`_


In previous PHP versions, this error message used to be :ref:`delimiter-must-not-be-alphanumeric,-backslash,-or-nul`.
