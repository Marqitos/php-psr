# PHP Standards Recommendations

This package compiles several [PHP Standards Recommendations](https://www.php-fig.org/psr) packages, so they can be loaded using Fallback Autoload or even require_once.
The packages included are:

- psr/clock
- psr/http-client
- psr/http-message
- psr/log
- fig/http-message-util (The Fig namespace has been renamed to Psr)

```text
src/             (Psr\ namespace)
├── Clock/       (psr/clock)
└── Http/
    ├── Client/  (psr/http-client)
    ├── Message/ (psr/http-message & fig/http-message-util)
    └── Log/     (psr/log)
```

---

The PSRs (PHP Standards Recommendations) are standards recommendations for PHP. They are proposals developed by PHP-FIG, the PHP Framework Interoperability Group, with the goal of improving interoperability between different PHP frameworks and libraries.

Classes, Interfaces and Traits, work of [PHP Standards Recommendations](https://www.php-fig.org/psr), part of [The PHP framework interop group](https://www.php-fig.org)

## PSR Implementations [^1]

These recommendations cover a wide variety of practices and conventions, from coding style to project structuring. TThis repository includes several **`class`es**, **`interface`s**, and **`trait`s**; to cover the following standards:

## PSR-03 . [Logger Interface](https://www.php-fig.org/psr/psr-18)

### Basics

- The LoggerInterface exposes eight methods to write logs to the eight RFC 5424 levels (`debug`, `info`, `notice`, `warning`, `error`, `critical`, `alert`, `emergency`).

- A ninth method, log, accepts a log level as the first argument. Calling this method with one of the log level constants MUST have the same result as calling the level-specific method. Calling this method with a level not defined by this specification MUST throw a Psr\Log\InvalidArgumentException if the implementation does not know about the level. Users SHOULD NOT use a custom level without knowing for sure the current implementation supports it.

### Message

- Every method accepts a string as the message, or an object with a __toString() method. Implementors MAY have special handling for the passed objects. If that is not the case, implementors MUST cast it to a string.

- The message MAY contain placeholders which implementors MAY replace with values from the context array.

### Context

- Every method accepts an array as context data. This is meant to hold any extraneous information that does not fit well in a string. The array can contain anything. Implementors MUST ensure they treat context data with as much lenience as possible. A given value in the context MUST NOT throw an exception nor raise any php error, warning or notice.
- If an Exception object is passed in the context data, it MUST be in the 'exception' key. Logging exceptions is a common pattern and this allows implementors to extract a stack trace from the exception when the log backend supports it. Implementors MUST still verify that the 'exception' key is actually an Exception before using it as such, as it MAY contain anything.

### References

- [RFC 2119](https://tools.ietf.org/html/rfc2119)
- [RFC 5424](https://tools.ietf.org/html/rfc5424)

## PSR-07 . [HTTP Message Interface](https://www.php-fig.org/psr/psr-7)

HTTP messages are the foundation of web development. Web browsers and HTTP clients such as cURL create HTTP request messages that are sent to a web server, which provides an HTTP response message. Server-side code receives an HTTP request message, and returns an HTTP response message.

HTTP messages are typically abstracted from the end-user consumer, but as developers, we typically need to know how they are structured and how to access or manipulate them in order to perform our tasks, whether that might be making a request to an HTTP API, or handling an incoming request.

- [Interfaces](docs/PSR7-Interfaces.md)
- [Usage](docs/PSR7-Usage.md)
- [ChangeLog](psr_http-message_CHANGELOG.md)

### References

- [RFC 2119](https://tools.ietf.org/html/rfc2119)
- [RFC 3986](https://tools.ietf.org/html/rfc3986)
- [RFC 7230](https://tools.ietf.org/html/rfc7230)
- [RFC 7231](https://tools.ietf.org/html/rfc7231)

### Messages

An HTTP message is either a request from a client to a server or a response from a server to a client. This specification defines interfaces for the HTTP messages `Psr\Http\Message\RequestInterface` and `Psr\Http\Message\ResponseInterface` respectively.

Both `Psr\Http\Message\RequestInterface` and `Psr\Http\Message\ResponseInterface` extend `Psr\Http\Message\MessageInterface`. While `Psr\Http\Message\MessageInterface` MAY be implemented directly, implementors SHOULD implement `Psr\Http\Message\RequestInterface` and `Psr\Http\Message\ResponseInterface`.

### PSR Http Message Util

This repository holds utility classes and constants to facilitate common
operations of [PSR-7](https://www.php-fig.org/psr/psr-7/); the primary purpose is
to provide constants for referring to request methods, response status codes and
messages, and potentially common headers.

Implementation of PSR-7 interfaces is **not** within the scope of this package.

This package includes the implementations described in the 'fig/http-message-util' package,
but alternates the Fig\Http\Message namespace with Psr\Http\Message.
Therefore, they are located in the same namespace and folder as the PSR-07 implementations.

#### Interfaces

- `Fig\Http\Message\RequestMethodInterface.php` as `Psr\Http\Message\RequestMethodInterface.php`
- `Fig\Http\Message\StatusCodeInterface.php` as `Psr\Http\Message\StatusCodeInterface.php`

#### References

- [RFC 2295: section 8.1](https://tools.ietf.org/html/rfc2295#section-8.1)
- [RFC 2324: section 2.3](https://tools.ietf.org/html/rfc2324#section-2.3)
- [RFC 2518: section 9.7](https://tools.ietf.org/html/rfc2518#section-9.7)
- [RFC 2774: section 7](https://tools.ietf.org/html/rfc2774#section-7)
- [RFC 3229: section 10.4](https://tools.ietf.org/html/rfc3229#section-10.4)
- [RFC 4918: section 11](https://tools.ietf.org/html/rfc4918#section-11)
- [RFC 5842: section 7.1](https://tools.ietf.org/html/rfc5842#section-7.1) & [section 7.2](https://tools.ietf.org/html/rfc5842#section-7.2)
- [RFC 6585: section 3](https://tools.ietf.org/html/rfc6585#section-3), [section 4](https://tools.ietf.org/html/rfc6585#section-4), [section 5](https://tools.ietf.org/html/rfc6585#section-5) & [section 6](https://tools.ietf.org/html/rfc6585#section-6)
- [RFC 7231: section 6](https://tools.ietf.org/html/rfc7231#section-6)
- [RFC 7238: section 3](https://tools.ietf.org/html/rfc7238#section-3)
- [RFC 7725: section 3](https://tools.ietf.org/html/rfc7725#section-3)
- [RFC 7540: section 9.1.2](https://tools.ietf.org/html/rfc7540#section-9.1.2)
- [RFC 8297: section 2](https://tools.ietf.org/html/rfc8297#section-2)
- [RFC 8470: section 7](https://tools.ietf.org/html/rfc8470#section-7)

## PSR-18 . [HTTP Client](https://www.php-fig.org/psr/psr-18)

### Goal

The goal of this PSR is to allow developers to create libraries decoupled from HTTP client implementations. This will make libraries more reusable as it reduces the number of dependencies and lowers the likelihood of version conflicts.

A second goal is that HTTP clients can be replaced as per the [Liskov substitution principle](https://en.wikipedia.org/wiki/Liskov_substitution_principle). This means that all clients MUST behave in the same way when sending a request.

### Definitions

- **Client** - A Client is a library that implements this specification for the purposes of sending PSR-7-compatible HTTP Request messages and returning a PSR-7-compatible HTTP Response message to a Calling library.

- **Calling Library** - A Calling Library is any code that makes use of a Client. It does not implement this specification's interfaces but consumes an object that implements them (a Client).

### Client

A Client is an object implementing `ClientInterface`.

A Client MAY:

- Choose to send an altered HTTP request from the one it was provided. For example, it could compress an outgoing message body.

- Choose to alter a received HTTP response before returning it to the calling library. For example, it could decompress an incoming message body.

If a Client chooses to alter either the HTTP request or HTTP response, it MUST ensure that the object remains internally consistent. For example, if a Client chooses to decompress the message body then it MUST also remove the `Content-Encoding` header and adjust the `Content-Length` header.

Note that as a result, since *PSR-7 objects are immutable*, the Calling Library MUST NOT assume that the object passed to `ClientInterface::sendRequest()` will be the same PHP object that is actually sent. For example, the Request object that is returned by an exception MAY be a different object than the one passed to `sendRequest()`, so comparison by reference (===) is not possible.

A Client MUST:

- Reassemble a multi-step HTTP 1xx response itself so that what is returned to the Calling Library is a valid HTTP response of status code 200 or higher.

### Error handling

A Client MUST NOT treat a well-formed HTTP request or HTTP response as an error condition. For example, response status codes in the 400 and 500 range MUST NOT cause an exception and MUST be returned to the Calling Library as normal.

A Client MUST throw an instance of `Psr\Http\Client\ClientExceptionInterface` if and only if it is unable to send the HTTP request at all or if the HTTP response could not be parsed into a PSR-7 response object.

If a request cannot be sent because the request message is not a well-formed HTTP request or is missing some critical piece of information (such as a Host or Method), the Client MUST throw an instance of `Psr\Http\Client\RequestExceptionInterface`.

If the request cannot be sent due to a network failure of any kind, including a timeout, the Client MUST throw an instance of `Psr\Http\Client\NetworkExceptionInterface`.

Clients MAY throw more specific exceptions than those defined here (a `TimeOutException` or `HostNotFoundException` for example), provided they implement the appropriate interface defined above.

## PSR-20 . [Clock](https://www.php-fig.org/psr/psr-20/)

### Introduction

Creating a standard way of accessing the clock would allow interoperability during testing, when testing behavior that has timing-based side effects. Common ways to get the current time include calling `\time()` or new `\DateTimeImmutable('now')`. However, this makes mocking the current time impossible in some situations.

### Definitions

- **Clock** - The clock is able to read the current time and date.

- **Timestamp** - The current time as an integer number of seconds since Jan 1, 1970 00:00:00 UTC.

### Usage

Get the current timestamp

This should be done by using the `getTimestamp()` method on the returned `\DateTimeImmutable`:

`$timestamp = $clock->now()->getTimestamp();`

### References

- [RFC 2119](https://tools.ietf.org/html/rfc2119)

---
[![Ask DeepWiki](https://deepwiki.com/badge.svg)](https://deepwiki.com/Marqitos/php-psr)

[^1]:**[Implementation versions](VERSIONS.md)**
