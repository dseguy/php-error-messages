.. _security-protocol-must-be-one-of-"des",-"aes128",-or-"aes-e_error:

Security protocol must be one of "DES", "AES128", or "AES E_ERROR
-----------------------------------------------------------------
 
.. meta::
	:description:
		Security protocol must be one of "DES", "AES128", or "AES E_ERROR: The fourth argument of snmp3_get() must be one of the following values, &quot;DES&quot;, &quot;AES128&quot;, or &quot;AES&quot;.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Security protocol must be one of &quot;DES&quot;, &quot;AES128&quot;, or &quot;AES E_ERROR
	:og:description: The fourth argument of snmp3_get() must be one of the following values, &quot;DES&quot;, &quot;AES128&quot;, or &quot;AES&quot;
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/security-protocol-must-be-one-of-%22des%22%2C-%22aes128%22%2C-or-%22aes-e_error.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Security protocol must be one of "DES", "AES128", or "AES E_ERROR
	:twitter:description: Security protocol must be one of "DES", "AES128", or "AES E_ERROR: The fourth argument of snmp3_get() must be one of the following values, "DES", "AES128", or "AES"
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/security-protocol-must-be-one-of-\"des\",-\"aes128\",-or-\"aes-e_error.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/security-protocol-must-be-one-of-\"des\",-\"aes128\",-or-\"aes-e_error.html","name":"Security protocol must be one of \"DES\", \"AES128\", or \"AES E_ERROR","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The fourth argument of snmp3_get() must be one of the following values, \"DES\", \"AES128\", or \"AES\"","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/security-protocol-must-be-one-of-\"des\",-\"aes128\",-or-\"aes-e_error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The fourth argument of snmp3_get() must be one of the following values, "DES", "AES128", or "AES". 

The DES protocol must be active to see this error message. Otherwise, a distinct message is displayed. 

Case is important. There are not constants to for these values.

Example
_______

.. code-block:: php

   <?php
   
   try {
       var_dump(snmp3_get($hostname, $community, '', 'protocol', '', '', '', '');
   } catch (\ValueError $e) {
       echo $e->getMessage() . \PHP_EOL;
   }
   
   ?>

Solutions
_________

+ Use one of the three possible values.

Related Error Messages
______________________

+ :ref:`security-protocol-must-be-one-of-"aes128",-or-"aes-e_error`
