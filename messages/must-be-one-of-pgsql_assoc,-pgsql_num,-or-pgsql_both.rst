.. _must-be-one-of-pgsql_assoc,-pgsql_num,-or-pgsql_both:

must be one of PGSQL_ASSOC, PGSQL_NUM, or PGSQL_BOTH
----------------------------------------------------
 
.. meta::
	:description:
		must be one of PGSQL_ASSOC, PGSQL_NUM, or PGSQL_BOTH: pg_fetch_all() 2nd argument must be one of 3 possible pgsql constants:  PGSQL_ASSOC, PGSQL_NUM and PGSQL_BOTH.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be one of PGSQL_ASSOC, PGSQL_NUM, or PGSQL_BOTH
	:og:description: pg_fetch_all() 2nd argument must be one of 3 possible pgsql constants:  PGSQL_ASSOC, PGSQL_NUM and PGSQL_BOTH
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-one-of-pgsql_assoc%2C-pgsql_num%2C-or-pgsql_both.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be one of PGSQL_ASSOC, PGSQL_NUM, or PGSQL_BOTH
	:twitter:description: must be one of PGSQL_ASSOC, PGSQL_NUM, or PGSQL_BOTH: pg_fetch_all() 2nd argument must be one of 3 possible pgsql constants:  PGSQL_ASSOC, PGSQL_NUM and PGSQL_BOTH
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-one-of-pgsql_assoc,-pgsql_num,-or-pgsql_both.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-one-of-pgsql_assoc,-pgsql_num,-or-pgsql_both.html","name":"must be one of PGSQL_ASSOC, PGSQL_NUM, or PGSQL_BOTH","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Sep 2025 15:58:54 +0000","dateModified":"Sun, 14 Sep 2025 15:58:54 +0000","description":"pg_fetch_all() 2nd argument must be one of 3 possible pgsql constants:  PGSQL_ASSOC, PGSQL_NUM and PGSQL_BOTH","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-one-of-pgsql_assoc,-pgsql_num,-or-pgsql_both.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
pg_fetch_all() 2nd argument must be one of 3 possible pgsql constants:  PGSQL_ASSOC, PGSQL_NUM and PGSQL_BOTH.

It is also the case of pg_fetch_array() and pg_fetch_row()'s 3rd argument; and pg_select()'s 4th argument.

It is possible to use raw integers, instead of the constants, although this is not recommended.

Example
_______

.. code-block:: php

   <?php
   
   try {
       var_dump(pg_last_notice($db, 99));
   } catch (\ValueError $e) {
       echo $e->getMessage() . \PHP_EOL;
   }
   
   ?>

Solutions
_________

+ Use one of the three constants.

See Also
________

+ `PredefinedConstants <https://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-notice-all>`_

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Functions/UseConstantAsArguments <https://exakat.readthedocs.io/en/latest/Reference/Rules/Functions/UseConstantAsArguments.html>`_.
