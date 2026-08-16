# Introduction

This is the PHP error messages database: a reference collecting every error, warning, notice, and deprecation message that the PHP engine can emit, each with a plain-language explanation of what it means and why PHP raised it. PHP's own output is often terse — a single line pointing at a line number, with no context on the underlying rule being broken. This book exists to close that gap, one message at a time.

The database is maintained by [Exakat](https://www.exakat.io/), the static analysis engine for PHP, and draws on the same body of knowledge Exakat uses to detect issues in real codebases before they reach production. Where relevant, each entry links back to the PHP language construct involved, notes which PHP version introduced or changed the behavior, and points to further reading in the official manual or RFCs.

You can reach any message in two ways. If you already have the exact error text — copied straight from a stack trace or log file — search for it directly; messages are indexed verbatim, including printf-style placeholders such as `%s` and `%d`. If you're exploring more broadly, browse by [syntax error](syntaxerror.md), by [tag](tags.md) (deprecation, type error, visibility, and so on), or by [feature](features.md) to see every message associated with a given PHP language construct.

This book tracks PHP's evolution release by release: deprecation notices that will become fatal errors in future versions are flagged as such, so you can fix them ahead of an upgrade rather than after one breaks production.

## Contributions

Contributions are welcomed, by submitting PR to the [repository](https://github.com/dseguy/php-error-messages)

+ New or missing error messages to be added, preferably with their reproduction code
+ Extra links to external resources
+ Documentation complements
+ Checks on the related notions and thesaurus
