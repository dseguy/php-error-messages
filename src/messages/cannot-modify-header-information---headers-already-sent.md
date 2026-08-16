# Cannot modify header information - headers already sent

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-modify-header-information---headers-already-sent.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-modify-header-information---headers-already-sent.html","name":"Cannot modify header information - headers already sent","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:38:16 +0000","dateModified":"Mon, 13 Jul 2026 08:38:16 +0000","description":"This error happens when PHP has already started sending the body of the response to the client","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-modify-header-information---headers-already-sent.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error happens when PHP has already started sending the body of the response to the client. In HTTP protocol, the headers must comme first, and after, the body.

There are several reasons for PHP to start sending the body early. Among the most frequent, there might be a space, or the UTF-8 BOM at the beginning of an included file. They may also be at the end of the code, if there is a closing PHP tag.

There may also be some displays, with `echo`, or from errors.

## Example

```php
 <?php
// There is a space before the opening tag

headers('my headers');

// There is a space after the closing tag, which impact including and autoloading files
?> 
```

## Alternatives
+ Check the beginning of the script for invisible, or visible characters before the opening PHP tag.
+ Check the beginning of the UTF-8 BOM before the opening PHP tag.
+ Check the end of the script for invisible characters after the closing PHP tag, if any.
+ Check any included files for the first three tips.
+ Check for any call to a display functions, such as ``echo``, ``print``, ``print_r``, ``var_dump()``, ``debug_print_backtrace()``.
+ Check that ``output_buffering`` is active in the PHP configuration.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()