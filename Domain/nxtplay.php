<?php
  $accounts = array(
    "1RK1d95w2W" => "UkA9grRXrr",
    "C0n2vhWeLE" => "5lUMRMdi25",
    "d2oW3yc71d" => "lGI9QDcJ0OVSWdC",
    "JwVEHZ17Cf" => "3ixxrpx82e",
    "PRu3suaizwVy" => "o5Mw4",
    "QsgHGQStxPj7" => "yfkYReHS2utS",
    "rodpRCjW" => "foap71TcVohX",
    "TDM13ydHbb" => "SHiADny31s",
    "uHFm36tWxp" => "pELtOGnvkW",
  );

  $username = array_rand($accounts);
  $password = $accounts[$username];

  header("Location: http://serverswe1.tv:8080/live/$username/$password/" . $_GET["channel"] . ".ts");
//end nxtplay.php