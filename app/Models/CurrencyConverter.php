<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrencyConverter extends Model {
    private $apiUrl = 'https://blockchain.info/tobtc?currency=USD&value=';

    public function convertUSDToBTC($amountInUSD) {
        // Construct the full API URL with the value appended
        $fullUrl = $this->apiUrl . urlencode($amountInUSD);

        // Fetch data from the API
        $btcValue = file_get_contents($fullUrl);

        // Check if API request was successful
        if ($btcValue !== false) {
            // Convert the response to float and return
            return (float)$btcValue;
        } else {
            // Handle API request failure
            return false;
        }
    }
}
