<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AWwOvn-WY7jk4d01VBg74XaB2vX-sln495fDJPN3dshS5XP_swnFIs_XPNhDRYaIpLfV5ELWbi-4t8PA',     // ClientID
            'EGoyhPyuarJe1L44z9TWFC1nin5WeI4ZjiKHE8YHL2LuTzltubXufeEkh685XGJ65-i4TZemUnBc-gsW'      // ClientSecret
        )
);
?>