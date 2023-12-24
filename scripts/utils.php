<?php
function generateRandomString($length = 32) {
  // Use random_bytes if available, otherwise fallback to openssl_random_pseudo_bytes
  if (function_exists('random_bytes')) {
      return bin2hex(random_bytes($length));
  } else if (function_exists('openssl_random_pseudo_bytes')) {
      return bin2hex(openssl_random_pseudo_bytes($length));
  } else {
      // Fallback to a less secure method if neither function is available
      return substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', $length)), 0, $length);
  }
}

?>