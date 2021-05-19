<?php
require 'Encryption.php';

$nonceValue = 'nonce_value';// use nonce that generated while using OAuth.

$readableString = "{uuid:'eyJjaXBoZXJ0ZXh0IjoibU5iQjBiTzEwQmdISy9yZmx3RDY5Ni',value:9000000}";
$encryptedString = 'eyJjaXBoZXJ0ZXh0IjoibXlUQ1g5eWxwKzFDZ3BmWllEUGgxXC92RTNyMVk0TDJsaGRQU25kXC9SZEJwQW1ZRTNXNUhWeDRsQ042Q1FrcUx0ZWoxR1NKQzJtRnNuNEg0ODFiM2p6QkFWQzVsc3l4VzY0VmFLMWNzNlBvdz0iLCJpdiI6IjUyOGEzMTU0MGFlZDRlODAzMDMzMTljY2Y5Nzk4YTRmIiwic2FsdCI6IjQ4N2E2MjdmNzM2ZjdkZDgxN2Y1OTIxOWY5NWE5MDg3MzA0NzI3NWQ5ZmFmZjg5MjJhZDBhNmQ3OWM4NDE5NDJmZjliMDIzZGM5NmFmNjkwZTNmN2E5ZTVjNDhjM2NhMmFjOGU3NWU5NDY1YmRmM2JkMDhjMGNkYTI2NzRlNzUwM2NiZDEyYWVmMTlmY2Q2NGEyZDA2ZmQwNzU5NGRiZWRjNzk0N2FhNWEwNjFmOTg1OGE4NzQwNThjMmVkNjI3MjFkMTczOTdlYTA4ZGU4ZmQ2ZDdiZmRkYzhmNjJhZWY4MzdmNDUxYzBmNGM3NTRmMWViOGY2MTBmOTk0ODM2YWI0YmQ1OGFhMjI4NmI5M2E1NWJiNThlMzdkNGVhMDMwMjhlZDgzNmRlMTBlNzNkYzM5MTMyOTliMzgxZTUzYjhlODRlMzA2ZTVmMmE1YmQxMmI4YTgzMWMxYTQzZjU0ZjU2OWFhYmQyM2QzMzEyMTNmY2IxYzQzODhjOWI3NWVhMDYzZDM0NmU1YTI4ZjcyMjE0NGNjZTJhMTRmOGUyMGFkMWE1NTUzM2RjNmM3OWE2NmRkYmUzNzAzYWQxNjU0YjMyNjA1YWQ0NDk0MWZjZDYzMmFiNWQ3YTU4MzM1MzE5ZWQxOGZkYzY4MGFmMDA3M2M0OTZlZDQ2YTVhMWVkYmYzIiwiaXRlcmF0aW9ucyI6OTk5fQ';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        echo 'readable string: ' . $readableString . '<br>';
        $Encryption = new Encryption();
        $encrypted = $Encryption->encrypt($readableString, $nonceValue);
        echo 'encrypted: ' . $encrypted . '<br>';

        echo "\n\n\n";
        echo '<hr>';
        echo "\n\n\n";

        $decrypted = $Encryption->decrypt($encrypted, $nonceValue);
        echo 'decrypted: ' . $decrypted . '<br>';
        $decrypted = $Encryption->decrypt($encryptedString, $nonceValue);
        echo 'decrypted from old encrypted string: <strong>' . $decrypted . '</strong><br>';
        ?>
	</body>
</html>
