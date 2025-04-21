<?php
namespace CharithaPrabhashwara\HttpLib\HttpStatus;

class HttpStatus{
    // 1xx Informational responses

    /**
     * #### The HTTP 100 Continue.
     * ##### Informational Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org)) 
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 100 Continue means the server has received the request headers, and the client should now send the
     * request body (e.g., in a POST request). It's used when the client includes the Expect: 100-continue header,
     * allowing the server to validate headers before the client sends a potentially large body.
     */
    public const CONTINUE = 100;

    /**
     * #### The HTTP 101 Switching Protocols.
     * ##### Informational Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 101 Switching Protocols indicates that the server is switching protocols as requested by the client.
     * This is typically used in WebSocket connections or when the client requests an upgrade to a different protocol.
     * 
     */
    public const SWITCHING_PROTOCOLS = 101;

    /**
    * #### The HTTP 102 Processing.
    * ##### Informational Status Code
    * ###### Readmore ([Wikipedia](https://link-url-here.org))
    * ###### Author: Charitha Prabhashwara | Date: 2025-04-20 | Documentation: [https://link-url-here.org](https://link-url-here.org)
    *
    * 102 Processing indicates that the server has received and is processing the request, but no response is available yet.
    */
    public const PROCESSING = 102;

    /**
    * #### The HTTP 103 Early Hints.
    * ##### Informational Status Code
    * ###### Readmore ([Wikipedia](https://link-url-here.org))
    * ###### Author: Charitha Prabhashwara | Date: 2025-04-20 | Documentation: [https://link-url-here.org](https://link-url-here.org)
    * 
    * 103 Early Hints is primarily intended to be used with the Link header to allow the user agent to start preloading resources while the server prepares a response.
    */
    public const EARLY_HINTS = 103;
    
    // Successful responses

    public const OK= 200;
    public const CREATED = 201;
    public const Accepted = 202;
    public const NON_AUTHORITATIVE_INFORMATION = 203;
    public const NO_CONTENT= 204;
    public const RESET_CONTENT = 205;
    public const PARTIAL_CONTENT= 206;
    public const MULTI_STATUS = 207;
    public const ALREADY_REPORTED = 208;
    public const IM_USED = 226;

    //Redirrection messages

    public const MULTIPLE_CHOICES = 300;
    public const MOVED_PERMANENTLY = 301;
    public const FOUND = 302;
    public const SEE_OTHER = 303;
    public const NOT_MODIFIED = 304;
    public const USE_PROXY = 305;
    //public const SWITCH_PROXY = 306;
    public const TEMPORARY_REDIRECT = 307;
    public const PERMANENT_REDIRECT = 308;

    // Client error responses
    public const BAD_REQUEST = 400;
    public const UNAUTHORIZED = 401;
    public const PAYMENT_REQUIRED = 402;
    public const FORBIDDEN = 403;
    public const NOT_FOUND = 404;
    public const METHOD_NOT_ALLOWED = 405;
    public const NOT_ACCEPTABLE = 406;
    public const PROXY_AUTHENTICATION_REQUIRED = 407;
    public const REQUEST_TIMEOUT = 408;
    public const CONFLICT = 409;
    public const GONE = 410;
    public const LENGTH_REQUIRED = 411;
    public const PRECONDITION_FAILED = 412;
    public const CONTENT_TOO_LARGE = 413;//recheck
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