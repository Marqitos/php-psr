<?php
/**
 * This file is part of the Rodas\Psr\Http\Message library
 *
 * Based on Http\Message\StatusCodeInterface.php
 * fig/http-message-util (Psr\Http\Message) from PHP Framework Interoperability Group
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Rodas\Psr
 * @subpackage psr-http-message
 * @copyright 2025 Marcos Porto <php@marcospor.to>
 * @license https://opensource.org/license/mit The MIT License
 * @link https://marcospor.to/repositories/psr
 */

declare(strict_types=1);

namespace Rodas\Psr\Http\Message;

use Stringable;
use ValueError;

use function filter_var;
use function strtoupper;

use const FILTER_VALIDATE_INT;

/**
 * Defines cases for common HTTP status code.
 *
 * @see https://tools.ietf.org/html/rfc2295#section-8.1
 * @see https://tools.ietf.org/html/rfc2324#section-2.3
 * @see https://tools.ietf.org/html/rfc2518#section-9.7
 * @see https://tools.ietf.org/html/rfc2774#section-7
 * @see https://tools.ietf.org/html/rfc3229#section-10.4
 * @see https://tools.ietf.org/html/rfc4918#section-11
 * @see https://tools.ietf.org/html/rfc5842#section-7.1
 * @see https://tools.ietf.org/html/rfc5842#section-7.2
 * @see https://tools.ietf.org/html/rfc6585#section-3
 * @see https://tools.ietf.org/html/rfc6585#section-4
 * @see https://tools.ietf.org/html/rfc6585#section-5
 * @see https://tools.ietf.org/html/rfc6585#section-6
 * @see https://tools.ietf.org/html/rfc7231#section-6
 * @see https://tools.ietf.org/html/rfc7238#section-3
 * @see https://tools.ietf.org/html/rfc7725#section-3
 * @see https://tools.ietf.org/html/rfc7540#section-9.1.2
 * @see https://tools.ietf.org/html/rfc8297#section-2
 * @see https://tools.ietf.org/html/rfc8470#section-7
 */
enum StatusCode: int {
    // Informational 1xx
    case CONTINUE                        = 100;
    case SWITCHING_PROTOCOLS             = 101;
    case PROCESSING                      = 102;
    case EARLY_HINTS                     = 103;
    case UPLOAD_RESUMPTION_SUPPORTED     = 104;
    // Successful 2xx
    case OK                              = 200;
    case CREATED                         = 201;
    case ACCEPTED                        = 202;
    case NON_AUTHORITATIVE_INFORMATION   = 203;
    case NO_CONTENT                      = 204;
    case RESET_CONTENT                   = 205;
    case PARTIAL_CONTENT                 = 206;
    case MULTI_STATUS                    = 207;
    case ALREADY_REPORTED                = 208;
    case IM_USED                         = 226;
    // Redirection 3xx
    case MULTIPLE_CHOICES                = 300;
    case MOVED_PERMANENTLY               = 301;
    case FOUND                           = 302;
    case SEE_OTHER                       = 303;
    case NOT_MODIFIED                    = 304;
    case USE_PROXY                       = 305;
    case RESERVED                        = 306;
    case TEMPORARY_REDIRECT              = 307;
    case PERMANENT_REDIRECT              = 308;
    // Client Errors 4xx
    case BAD_REQUEST                     = 400;
    case UNAUTHORIZED                    = 401;
    case PAYMENT_REQUIRED                = 402;
    case FORBIDDEN                       = 403;
    case NOT_FOUND                       = 404;
    case METHOD_NOT_ALLOWED              = 405;
    case NOT_ACCEPTABLE                  = 406;
    case PROXY_AUTHENTICATION_REQUIRED   = 407;
    case REQUEST_TIMEOUT                 = 408;
    case CONFLICT                        = 409;
    case GONE                            = 410;
    case LENGTH_REQUIRED                 = 411;
    case PRECONDITION_FAILED             = 412;
    case PAYLOAD_TOO_LARGE               = 413;
    case URI_TOO_LONG                    = 414;
    case UNSUPPORTED_MEDIA_TYPE          = 415;
    case RANGE_NOT_SATISFIABLE           = 416;
    case EXPECTATION_FAILED              = 417;
    case IM_A_TEAPOT                     = 418;
    case MISDIRECTED_REQUEST             = 421;
    case UNPROCESSABLE_ENTITY            = 422;
    case LOCKED                          = 423;
    case FAILED_DEPENDENCY               = 424;
    case TOO_EARLY                       = 425;
    case UPGRADE_REQUIRED                = 426;
    case PRECONDITION_REQUIRED           = 428;
    case TOO_MANY_REQUESTS               = 429;
    case REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    case UNAVAILABLE_FOR_LEGAL_REASONS   = 451;
    // Server Errors 5xx
    case INTERNAL_SERVER_ERROR           = 500;
    case NOT_IMPLEMENTED                 = 501;
    case BAD_GATEWAY                     = 502;
    case SERVICE_UNAVAILABLE             = 503;
    case GATEWAY_TIMEOUT                 = 504;
    case VERSION_NOT_SUPPORTED           = 505;
    case VARIANT_ALSO_NEGOTIATES         = 506;
    case INSUFFICIENT_STORAGE            = 507;
    case LOOP_DETECTED                   = 508;
    case NOT_EXTENDED                    = 510;
    case NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * Map of standard HTTP status code/reason phrases
     *
     * @psalm-var array<positive-int, non-empty-string>
     */
    CONST PHRASES = [
        // INFORMATIONAL CODES
        100 => 'Continue',
        101 => 'Switching Protocols',
        102 => 'Processing',
        103 => 'Early Hints',
        // phpcs:ignore Generic.Files.LineLength.TooLong
        104 => 'Upload Resumption Supported (TEMPORARY - registered 2024-11-13, extension registered 2025-09-15, expires 2026-11-13)',
        // SUCCESS CODES
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-Status',
        208 => 'Already Reported',
        226 => 'IM Used',
        // REDIRECTION CODES
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        306 => 'Switch Proxy', // Deprecated to 306 => '(Unused)'
        307 => 'Temporary Redirect',
        308 => 'Permanent Redirect',
        // CLIENT ERROR
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Content Too Large',
        414 => 'URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Range Not Satisfiable',
        417 => 'Expectation Failed',
        418 => 'I\'m a teapot',
        421 => 'Misdirected Request',
        422 => 'Unprocessable Content',
        423 => 'Locked',
        424 => 'Failed Dependency',
        425 => 'Too Early',
        426 => 'Upgrade Required',
        428 => 'Precondition Required',
        429 => 'Too Many Requests',
        431 => 'Request Header Fields Too Large',
        444 => 'Connection Closed Without Response',
        451 => 'Unavailable For Legal Reasons',
        // SERVER ERROR
        499 => 'Client Closed Request',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
        506 => 'Variant Also Negotiates',
        507 => 'Insufficient Storage',
        508 => 'Loop Detected',
        510 => 'Not Extended (OBSOLETED)',
        511 => 'Network Authentication Required',
        599 => 'Network Connect Timeout Error',
    ];

    /**
     * Return a StatusCode from a int or numeric string
     * or the status code text snake-case
     *
     * @param  string|Stringable|integer $status
     * @return StatusCode
     */
    public static function parse(string|Stringable|int $status): StatusCode {
        if (is_int($status)) {
            $statusCode = $status;
        } else {
            $statusCode = filter_var($status, FILTER_VALIDATE_INT);
        }
        if ($statusCode === false) {
            foreach(StatusCode::cases() as $case) {
                if ($case->name == strtoupper((string) $status)) {
                    return $case;
                }
            }
            throw new ValueError('Invalid status code');
        }
        return self::from($statusCode);
    }

    /**
     * Try return a StatusCode from a int or numeric string
     * or the status code text snake-case
     *
     * @param  string|Stringable|integer $status
     * @return StatusCode|null
     */
    public static function tryParse(string|Stringable|int $status): ?StatusCode {
        if (is_int($status)) {
            $statusCode = $status;
        } else {
            $statusCode = filter_var($status, FILTER_VALIDATE_INT);
        }
        if ($statusCode === false) {
            foreach(StatusCode::cases() as $case) {
                if ($case->name == strtoupper((string) $status)) {
                    return $case;
                }
            }
            return null;
        }
        return self::tryFrom($statusCode);
    }

    /**
     * Return the standard HTTP status reason phrase
     *
     * @param  StatusCode|integer $code
     * @return string|null
     */
    public static function getPhrase(StatusCode|int $code): string {
        if ($code instanceof StatusCode) {
            $code = $code->value;
        }
        return self::PHRASES[$code];
    }
}
