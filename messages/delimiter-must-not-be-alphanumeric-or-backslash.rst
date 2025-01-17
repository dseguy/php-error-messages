.. _delimiter-must-not-be-alphanumeric-or-backslash:

Delimiter must not be alphanumeric or backslash
-----------------------------------------------
 
.. meta::
	:description:
		Delimiter must not be alphanumeric or backslash: The first character of a regex is the delimiter, that delimits the regex.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Delimiter must not be alphanumeric or backslash
	:og:description: The first character of a regex is the delimiter, that delimits the regex
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/delimiter-must-not-be-alphanumeric-or-backslash.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Delimiter must not be alphanumeric or backslash
	:twitter:description: Delimiter must not be alphanumeric or backslash: The first character of a regex is the delimiter, that delimits the regex
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The first character of a regex is the delimiter, that delimits the regex. There is a first and a last delimiter. 

In the case of this error, the first regex character is of invalid type. It cannot be alphanumeric (a-z, A-Z and digits), nore the backslash ``\``. 

Note that if the first characters are white spaces, such as space, tabulation, new line, they are ignored as potential delimiter.

Later, the NUL character (``chr(0)``) was added to the list of the forbidden characters.

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

See Also
________

+ `PCRE Patterns <https://www.php.net/manual/en/pcre.pattern.php>`_


In more recent PHP versions, this error message is now :ref:`delimiter-must-not-be-alphanumeric,-backslash,-or-nul`.
