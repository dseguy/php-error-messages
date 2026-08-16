# Call to %s %s::%s() from global scope

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-%s-%s::%s()-from-global-scope.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-%s-%s::%s()-from-global-scope.html","name":"Call to %s %s::%s() from global scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"This error reports that the requested method exists, but is not available from the context of call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-%s-%s::%s()-from-global-scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error reports that the requested method exists, but is not available from the context of call. Here, the method is `private` and should only be called from within its definition class. 

There are distinct messages for calling an unknown method, or calling a protected method.

## Example

```php
<?php

class X {
    public function foo() {}
    private function goo() {}
}

$x = new X;
$x->goo();

?>
```

## Literal Examples
+ Call to private x::goo() from global scope

## Alternatives
+ Call a public method on that class.
+ Check for typos in the name of the method.
+ Change the visibility of the method, to be able to call it.

## Related error messages
+ [call-to-undefined-method-%s::%s()](call-to-undefined-method-%s::%s\(\).html)
+ [trying-to-invoke-%s-method-%s::%s()-from-scope-%s](trying-to-invoke-%s-method-%s::%s\(\)-from-scope-%s.html)
