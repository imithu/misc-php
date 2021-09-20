<?php
namespace Misc;


class Network
{


  /**
   * get ip
   * 
   * @return array
   * 
   * @since   🌱 1.2.0
   * @version 🌴 1.2.0
   * @author  ✍ Muhammad Mahmudul Hasan Mithu
   */
  public static function ip(): array
  {
    return
    [
      // shared internet service
      'HTTP_CLIENT_IP'       => isset($_SERVER['HTTP_CLIENT_IP']       ) ? htmlspecialchars($_SERVER['HTTP_CLIENT_IP']       ) : NULL,
      // cloudflare
      'HTTP_CF_CONNECTING_IP'=> isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? htmlspecialchars($_SERVER['HTTP_CF_CONNECTING_IP']) : NULL,
      // proxy
      'HTTP_FORWARDED'       => isset($_SERVER['HTTP_FORWARDED']       ) ? htmlspecialchars($_SERVER['HTTP_FORWARDED']       ) : NULL,
      'HTTP_FORWARDED_FOR'   => isset($_SERVER['HTTP_FORWARDED_FOR']   ) ? htmlspecialchars($_SERVER['HTTP_FORWARDED_FOR']   ) : NULL,
      'HTTP_X_FORWARDED'     => isset($_SERVER['HTTP_X_FORWARDED']     ) ? htmlspecialchars($_SERVER['HTTP_X_FORWARDED']     ) : NULL,
      'HTTP_X_FORWARDED_FOR' => isset($_SERVER['HTTP_X_FORWARDED_FOR'] ) ? htmlspecialchars($_SERVER['HTTP_X_FORWARDED_FOR'] ) : NULL,
      // access
      'REMOTE_ADDR'          => isset($_SERVER['REMOTE_ADDR']          ) ? htmlspecialchars($_SERVER['REMOTE_ADDR']          ) : NULL
    ];
  }


}
