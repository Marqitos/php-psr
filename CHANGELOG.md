# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## Changelog by package

- [psr/http-message](/Marqitos/php-psr/blob/main/psr_http-message_CHANGELOG.md)
- [fig/http-message-util](/Marqitos/php-psr/blob/main/psr_http-message-util_CHANGELOG.md)
- [psr/http-client](/Marqitos/php-psr/blob/main/psr_http-client_CHANGELOG.md)
- [psr/clock](/Marqitos/php-psr/blob/main/psr_clock_CHANGELOG.md)

## psr/http-client v1.0.3 - 2023-09-23

Add `source` link in composer.json. No code changes.

## psr/http-client v1.0.2 - 2023-04-10

Allow PSR-7 (psr/http-message) 2.0. No code changes.

## psr/http-message v2.0.0 - 2023-04-04

### Changed

- Declared return type for all methods.

## psr/clock v1.0.0 - 2022-11-25

First stable release after PSR-20 acceptance

## psr/clock v0.1.0 - 2021-06-01

First release

## psr/http-message-util v1.1.5 - 2020-11-24

### Added

- [#19](https://github.com/php-fig/http-message-util/pull/19) adds support for PHP 8.

## psr/http-client v1.0.1 - 2020-06-29

Allow installation with PHP 8. No code changes.

## psr/http-message-util v1.1.4 - 2020-02-05

### Removed

- [#15](https://github.com/php-fig/http-message-util/pull/15) removes the dependency on psr/http-message, as it is not technically necessary for usage of this package.

## psr/http-message-util v1.1.3 - 2018-11-19

### Added

- [#10](https://github.com/php-fig/http-message-util/pull/10) adds the constants `StatusCodeInterface::STATUS_EARLY_HINTS` (103) and
  `StatusCodeInterface::STATUS_TOO_EARLY` (425).

## psr/http-client v1.0.0 - 2018-10-31

First stable release. No changes since 0.3.0.

## psr/http-client v0.3.0 - 2018-09-05

Added Interface suffix on exceptions

## psr/http-client v0.2.0 - 2018-08-14

All exceptions are in `Psr\Http\Client` namespace

## psr/http-client v0.1.0 - 2018-02-03

First release

## psr/http-message-util v1.1.2 - 2017-02-09

### Added

- [#4](https://github.com/php-fig/http-message-util/pull/4) adds the constant
  `StatusCodeInterface::STATUS_MISDIRECTED_REQUEST` (421).

## psr/http-message-util v1.1.1 - 2017-02-06

### Added

- [#3](https://github.com/php-fig/http-message-util/pull/3) adds the constant
  `StatusCodeInterface::STATUS_IM_A_TEAPOT` (418).

## psr/http-message-util v1.1.0 - 2016-09-19

### Added

- [#1](https://github.com/php-fig/http-message-util/pull/1) adds
  `Fig\Http\Message\StatusCodeInterface`, with constants named after common
  status reason phrases, with values indicating the status codes themselves.

## psr/http-message v1.0.1 - 2016-08-06

### Fixed

- Updated all `@return self` annotation references in interfaces to use
  `@return static`, which more closelly follows the semantics of the
  specification.
- Updated the `MessageInterface::getHeaders()` return annotation to use the
  value `string[][]`, indicating the format is a nested array of strings.
- Updated the `@link` annotation for `RequestInterface::withRequestTarget()`
  to point to the correct section of RFC 7230.
- Updated the `ServerRequestInterface::withUploadedFiles()` parameter annotation
  to add the parameter name (`$uploadedFiles`).
- Updated a `@throws` annotation for the `UploadedFileInterface::moveTo()`
  method to correctly reference the method parameter (it was referencing an
  incorrect parameter name previously).

## psr/http-message-util v1.0.0 - 2016-08-05

### Added

- Adds `Fig\Http\Message\RequestMethodInterface`, with constants covering the
  most common HTTP request methods as specified by the IETF.

## psr/http-message v1.0.0 - 2016-05-18

Initial stable release; reflects accepted PSR-7 specification.
