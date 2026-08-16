# Required Trait %s wasn't added to %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/required-trait-%s-wasn't-added-to-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/required-trait-%s-wasn't-added-to-%s.html","name":"Required Trait %s wasn't added to %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-10T11:05:56+01:00","dateModified":"2026-03-31T11:06:56+02:00","description":"This error happens during name conflict resolution for traits","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/required-trait-%s-wasn't-added-to-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error happens during name conflict resolution for traits. It means that one of the mentioned trait is not `use` in the code, and cannot be replaced or replacing another method. In the example below, the trait T2 is mentioned, but is not in the `use` command.

## Example

```php
<?php
trait T1 {
    function foo() {echo "T1\n";}
}
trait T2 {
        function foo() {echo "T2\n";}
}
class C {
    use T1 {
        T2::foo insteadof T1;
    }
}
?>
```

## Literal Examples
+ Required Trait T2 wasn't added to C

## Alternatives
+ Add the missing trait to the class.
+ Remove the extra name resolution from the class.
