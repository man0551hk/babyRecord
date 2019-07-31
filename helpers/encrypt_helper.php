<?php
class Encrypt {
  // $encrypted = encryptIt( $input );
  // $decrypted = decryptIt( $encrypted );

  // echo $encrypted . '<br />' . $decrypted;

  public static function encryptIt( $q ) {
      $cryptKey  = 'Carnival2@19';
      $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
      return( $qEncoded );
  }

  public static function decryptIt( $q ) {
    $cryptKey  = 'Carnival2@19';
      $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
      return( $qDecoded );
  }
}
?>