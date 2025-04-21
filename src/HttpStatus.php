<?php
namespace CharithaPrabhashwara\HttpLib;

/**
 * #### HTTP Status Codes Library
 * ##### Provides constants for all standard HTTP status codes.
 * ###### Author: Charitha Prabhashwara
 * ###### Date: 2023-10-01
 * ###### Documentation: [https://link-url-here.org](https://link-url-here.org)
 * 
 * This class defines constants for HTTP status codes as defined in the HTTP/1.1 standard and other relevant specifications.
 * Each constant is documented with its corresponding status code, description, and usage.
 * 
 * ### Usage Example:
 * ```php
 * use CharithaPrabhashwara\HttpLib\HttpStatus;
 * 
 * echo HttpStatus::OK; // Outputs: 200
 * ```
 */
class HttpStatus{
    // 1xx Informational responses

   /**
     * HTTP 100 Continue
     *
     * Informational Status Code (1xx)
     *
     * Indicates that the initial part of the request has been received and the client should proceed
     * with sending the request body. This status code is typically used in conjunction with the
     * `Expect: 100-continue` header, allowing the server to validate the request headers before the client
     * sends a potentially large payload (e.g., in a POST or PUT request).
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/100
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#1xx_Informational_responses
     *
     * @author Charitha Prabhashwara
     * @date 2024-04-21
     */
    public const CONTINUE = 100;

    /**
     * HTTP 101 Switching Protocols
     *
     * Informational Status Code (1xx)
     *
     * Indicates that the server understands and is willing to comply with the client's request to switch protocols,
     * as sent in the `Upgrade` header. This status code is commonly used during the initial handshake phase of
     * WebSocket connections or when upgrading from HTTP/1.1 to HTTP/2 or another protocol.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/101
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#1xx_Informational_responses
     *
     * @author Charitha Prabhashwara
     * @date 2024-04-21
     */
    public const SWITCHING_PROTOCOLS = 101;

    /**
     * HTTP 102 Processing
     *
     * Informational Status Code (1xx)
     *
     * Indicates that the server has received and is processing the request, but no response is available yet.
     * This status code is primarily used with WebDAV requests to avoid client timeouts when a request may take
     * a long time to complete.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/102
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#1xx_Informational_responses
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const PROCESSING = 102;

    /**
     * HTTP 103 Early Hints
     *
     * Informational Status Code (1xx)
     *
     * Indicates that the server is likely to send a final response, and the client can begin preloading resources
     * specified in the `Link` header. This status code is primarily used to improve perceived performance by
     * allowing the browser to start fetching assets (e.g., CSS, JS) before the full response is ready.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/103
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#1xx_Informational_responses
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-20
     */
    public const EARLY_HINTS = 103;
    
    // Successful responses
    
    /**
     * HTTP 200 OK
     *
     * Successful Status Code (2xx)
     *
     * Indicates that the request has succeeded. The meaning of the success depends on the HTTP method:
     * - GET: the resource has been fetched and is transmitted in the response.
     * - POST: the resource has been created or updated.
     * - DELETE/PUT: the operation was successful.
     *
     * This is the most commonly used HTTP status code.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/200
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @author Charitha Prabhashwara
     * @date 2023-10-01
     */
    public const OK= 200;

    /**
     * HTTP 201 Created
     *
     * Successful Status Code (2xx)
     *
     * Indicates that the request has been fulfilled and has resulted in one or more new resources being created.
     * This status code is typically returned in response to POST or PUT requests when a new resource has been successfully created.
     * A `Location` header is often included in the response to indicate the URI of the newly created resource.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/201
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @author Charitha Prabhashwara
     * @date 2023-10-01
     */
    public const CREATED = 201;

    /**
     * HTTP 202 Accepted
     *
     * Successful Status Code (2xx)
     *
     * Indicates that the request has been accepted for processing, but the processing has not been completed.
     * This status code is typically used for asynchronous operations. The request might be acted upon in the future,
     * and the final outcome may be delivered via a separate process or callback.
     *
     * No guarantee is given that the request will be completed successfully.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/202
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @author Charitha Prabhashwara
     * @date 2023-10-01
     */
    public const Accepted = 202;


    /**
     * HTTP 203 Non-Authoritative Information
     *
     * Successful Status Code (2xx)
     *
     * Indicates that the request was successful, but the enclosed payload has been modified by a transforming proxy
     * from that of the origin server’s `200 OK` response. This status is typically used in environments with
     * intermediary caches or filters that alter the response content before delivering it to the client.
     *
     * The information may be slightly different from the original source, but the request itself succeeded.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/203
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @author Charitha Prabhashwara
     * @date 2023-10-01
     */
    public const NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * #### The HTTP 204 No Content.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 204 No Content indicates that the server successfully processed the request and is not returning any content.
     */
    public const NO_CONTENT= 204;

    /**
     * #### The HTTP 205 Reset Content.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 205 Reset Content tells the client to reset the document view, such as clearing a form for input.
     */
    public const RESET_CONTENT = 205;

    /**
     * #### The HTTP 206 Partial Content.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 206 Partial Content is used when the server is delivering only part of the resource due to a range header sent by the client.
     */
    public const PARTIAL_CONTENT= 206;

    /**
     * #### The HTTP 207 Multi-Status.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 207 Multi-Status provides status for multiple independent operations.
     */
    public const MULTI_STATUS = 207;

    /**
     * #### The HTTP 208 Already Reported.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 208 Already Reported indicates that the members of a DAV binding have already been enumerated in a previous reply to this request, and are not being included again.
     */
    public const ALREADY_REPORTED = 208;

    /**
     * #### The HTTP 226 IM Used.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 226 IM Used indicates that the server has fulfilled a GET request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.
     */
    public const IM_USED = 226;

    //Redirrection messages

    /**
     * #### The HTTP 300 Multiple Choices.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 300 Multiple Choices indicates that the request has more than one possible response. The user-agent or user should choose one of them.
     */
    public const MULTIPLE_CHOICES = 300;

    /**
     * #### The HTTP 301 Moved Permanently.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 301 Moved Permanently indicates that the resource has been permanently moved to a new URL.
     */
    public const MOVED_PERMANENTLY = 301;

    /**
     * #### The HTTP 302 Found.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 302 Found indicates that the resource is temporarily located at a different URL.
     */
    public const FOUND = 302;

    /**
     * #### The HTTP 303 See Other.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 303 See Other indicates that the response to the request can be found under another URI using a GET method.
     */
    public const SEE_OTHER = 303;

    /**
     * #### The HTTP 304 Not Modified.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 304 Not Modified indicates that the resource has not been modified since the version specified by the request headers.
     */
    public const NOT_MODIFIED = 304;

    /**
     * #### The HTTP 305 Use Proxy.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 305 Use Proxy indicates that the requested resource must be accessed through the proxy given by the location field.
     */
    public const USE_PROXY = 305;

    /**
     * #### The HTTP 306 Switch Proxy.
     * ##### Redirection Status Code (Deprecated)
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 306 Switch Proxy is no longer used and is reserved for future use. It was previously used to indicate that
     * subsequent requests should use the specified proxy.
     * 
     * @deprecated This status code is deprecated and should not be used.
     */
    public const SWITCH_PROXY = 306;

    /**
     * #### The HTTP 307 Temporary Redirect.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 307 Temporary Redirect indicates that the resource is temporarily located at a different URI, but the request method should not change.
     */
    public const TEMPORARY_REDIRECT = 307;

    /**
     * #### The HTTP 308 Permanent Redirect.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 308 Permanent Redirect indicates that the resource is permanently located at a different URI, and the request method should not change.
     */
    public const PERMANENT_REDIRECT = 308;

    // Client error responses

    /**
     * #### The HTTP 400 Bad Request.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 400 Bad Request indicates that the server cannot or will not process the request due to a client error.
     */
    public const BAD_REQUEST = 400;

    /**
     * #### The HTTP 401 Unauthorized.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 401 Unauthorized indicates that the request requires user authentication.
     */
    public const UNAUTHORIZED = 401;
    
    /**
     * #### The HTTP 402 Payment Required.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 402 Payment Required is reserved for future use and is not widely used.
     */
    public const PAYMENT_REQUIRED = 402;

    /**
     * #### The HTTP 403 Forbidden.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 403 Forbidden indicates that the server understands the request but refuses to authorize it.
     */
    public const FORBIDDEN = 403;

    /**
     * #### The HTTP 404 Not Found.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 404 Not Found indicates that the server cannot find the requested resource.
     */
    public const NOT_FOUND = 404;

    /**
     * #### The HTTP 405 Method Not Allowed.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 405 Method Not Allowed indicates that the request method is known by the server but is not supported by the target resource.
     */
    public const METHOD_NOT_ALLOWED = 405;

    /**
     * #### The HTTP 406 Not Acceptable.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 406 Not Acceptable indicates that the server cannot produce a response matching the list of acceptable values defined in the request's proactive content negotiation headers.
     */
    public const NOT_ACCEPTABLE = 406;

    /**
     * #### The HTTP 407 Proxy Authentication Required.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 407 Proxy Authentication Required indicates that the client must first authenticate itself with the proxy.
     */
    public const PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * #### The HTTP 408 Request Timeout.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 408 Request Timeout indicates that the server did not receive a complete request message within the time that it was prepared to wait.
     */
    public const REQUEST_TIMEOUT = 408;

    /**
     * #### The HTTP 409 Conflict.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 409 Conflict indicates that the request could not be completed due to a conflict with the current state of the target resource.
     */
    public const CONFLICT = 409;

    /**
     * #### The HTTP 410 Gone.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 410 Gone indicates that the target resource is no longer available at the origin server and that this condition is likely to be permanent.
     */
    public const GONE = 410;

    /**
     * #### The HTTP 411 Length Required.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 411 Length Required indicates that the server refuses to accept the request without a defined Content-Length header.
     */
    public const LENGTH_REQUIRED = 411;

    /**
     * #### The HTTP 412 Precondition Failed.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 413 Payload Too Large indicates that the request payload is larger than the server is willing or able to process.
     * This may occur when a client uploads a file that exceeds server-defined limits.
     */
    public const PRECONDITION_FAILED = 412;

    /**
     * #### The HTTP 413 Payload Too Large.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 413 Payload Too Large indicates that the request payload is larger than the server is willing or able to process.
     */
    public const PAYLOAD_TOO_LARGE = 413;//recheck
    public const REQUEST_URI_TOO_LONG = 414;//recheck
    public const URI_TOO_LONG= 414;//recheck
    public const UNSUPPORTED_MEDIA_TYPE = 415;
    public const REQUESTED_RANGE_NOT_SATISFIABLE = 416;//recheck
    public const RANGE_NOT_SATISFIABLE = 416;//recheck
    public const EXPECTATION_FAILED = 417;
    public const IM_A_TEAPOT = 418;
    public const MISDIRECTED_REQUEST = 421;
    public const UNPROCESSABLE_ENTITY = 422;//recheck
    public const UNPROCESSABLE_CONTENT = 422;//recheck
    public const LOCKED = 423;
    public const FAILED_DEPENDENCY = 424;
    public const TOO_EARLY = 425;
    public const UPGRADE_REQUIRED = 426;
    public const PRECONDITION_REQUIRED = 428;
    public const TOO_MANY_REQUESTS = 429;
    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    // Server error responses
    public const INTERNAL_SERVER_ERROR = 500;
    public const NOT_IMPLEMENTED = 501;
    public const BAD_GATEWAY = 502;
    public const SERVICE_UNAVAILABLE = 503;
    public const GATEWAY_TIMEOUT = 504;
    public const HTTP_VERSION_NOT_SUPPORTED = 505;
    public const VARIANT_ALSO_NEGOTIATES = 506;
    public const INSUFFICIENT_STORAGE = 507;
    public const LOOP_DETECTED = 508;
    public const NOT_EXTENDED = 510;
    public const NETWORK_AUTHENTICATION_REQUIRED = 511;
    public const NETWORK_CONNECT_TIMEOUT_ERROR = 599;
    public const UNKNOWN = 0;
    public const UNKNOWN_ERROR = 0;
    public const UNKNOWN_STATUS = 0;
    public const UNKNOWN_HTTP_STATUS = 0;
    public const UNKNOWN_HTTP_ERROR = 0;
    public const UNKNOWN_HTTP_RESPONSE = 0;
    public const UNKNOWN_HTTP_RESPONSE_CODE = 0;
    public const UNKNOWN_HTTP_RESPONSE_STATUS = 0;
    public const UNKNOWN_HTTP_RESPONSE_STATUS_CODE = 0;


}