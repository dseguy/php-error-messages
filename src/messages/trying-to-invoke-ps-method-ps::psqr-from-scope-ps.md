# Trying to invoke %s method %s::%s() from scope %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trying-to-invoke-ps-method-ps::psqr-from-scope-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trying-to-invoke-ps-method-ps::psqr-from-scope-ps.html","name":"Trying to invoke %s method %s::%s() from scope %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-14T18:12:40+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"This error reports that the requested method exists, but is not available from the context of call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trying-to-invoke-ps-method-ps::psqr-from-scope-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error reports that the requested method exists, but is not available from the context of call. Here, the method is `protected` and should only be called from a child class of `x`. 

There are distinct messages for calling an unknown method, or calling a private method.

## Example

```php
<?php

class X {
    protected function foo() {}
}

class Y {
    function g() {
        $x = new X;
        $x->foo();
    }
}

(new Y)->g();

?>
```

## Alternatives
+ Check the name of the method for typo.
+ Check the object of the method is the correct one.

## Related error messages
+ [call-to-undefined-method-%s::%s()](call-to-undefined-method-%s::%s\(\).html)
+ [call-to-%s-%s::%s()-from-global-scope](call-to-%s-%s::%s\(\)-from-global-scope.html)
