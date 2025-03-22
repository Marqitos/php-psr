# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## Changelog by package

- [psr/http-message](psr_http-message_CHANGELOG.md)

## 1.0.1 - 2016-08-06 - psr/http-message

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

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

## 1.0.0 - 2016-05-18 - psr/http-message

Initial stable release; reflects accepted PSR-7 specification.
