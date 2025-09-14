.. _must-be-one-of-pgsql_notice_last,-pgsql_notice_all,-or-pgsql_notice_clear:

must be one of PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR
-------------------------------------------------------------------------
 
.. meta::
	:description:
		must be one of PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR: pg_last_notice() 2nd argument must be one of 3 possible pgsql constants: PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be one of PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR
	:og:description: pg_last_notice() 2nd argument must be one of 3 possible pgsql constants: PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-one-of-pgsql_notice_last%2C-pgsql_notice_all%2C-or-pgsql_notice_clear.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be one of PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR
	:twitter:description: must be one of PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR: pg_last_notice() 2nd argument must be one of 3 possible pgsql constants: PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-one-of-pgsql_notice_last,-pgsql_notice_all,-or-pgsql_notice_clear.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-one-of-pgsql_notice_last,-pgsql_notice_all,-or-pgsql_notice_clear.html","name":"must be one of PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Sep 2025 15:59:05 +0000","dateModified":"Sun, 14 Sep 2025 15:59:05 +0000","description":"pg_last_notice() 2nd argument must be one of 3 possible pgsql constants: PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-one-of-pgsql_notice_last,-pgsql_notice_all,-or-pgsql_notice_clear.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
pg_last_notice() 2nd argument must be one of 3 possible pgsql constants: PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR.

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
