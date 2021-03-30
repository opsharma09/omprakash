<?php
/** set your paypal credential **/

$config['client_id'] = 'AWzNAS4xlq7aRUK6mo4onXGhCrc6h20StiFD9fZ5jIM0WE1lKGA8K5XZ1giOVJXnGQdVWA69hihcQM-N';
$config['secret'] = 'EGWGyE6tOHKhjMH1tTe-uGjETJoyqQZgXCjeZfIYBAAPSyVLVvk-61c0eqCxtWHx7LAWiFPNVtfodKWm';

/**
 * SDK configuration
 */
/**
 * Available option 'sandbox' or 'live'
 */
$config['settings'] = array(

    'mode' => 'sandbox',
    /**
     * Specify the max request time in seconds
     */
    'http.ConnectionTimeOut' => 1000,
    /**
     * Whether want to log to a file
     */
    'log.LogEnabled' => true,
    /**
     * Specify the file that want to write on
     */
    'log.FileName' => 'application/logs/paypal.log',
    /**
     * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
     *
     * Logging is most verbose in the 'FINE' level and decreases as you
     * proceed towards ERROR
     */
    'log.LogLevel' => 'FINE'
);