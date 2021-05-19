<?php
$nonceValue = 'nonce_value_nonce_value_nonce_value';// use nonce that generated while using OAuth.

$readableString = 'use nonce that generated while using OAuth. use nonce that generated while using OAuth. use nonce that generated while using OAuth. use nonce that generated while using OAuth. use nonce that generated while using OAuth. use nonce that generated while using OAuth. use nonce that generated while using OAuth. use nonce that generated while using OAuth. use nonce that generated while using OAuth. use nonce that generated while using OAuth. use nonce that generated while using OAuth. use nonce that generated while using OAuth. use nonce that generated while using OAuth. use nonce that generated while using OAuth. use nonce that generated while using OAuth. ';
$encryptedString = 'eyJjaXBoZXJ0ZXh0IjoibU5iQjBiTzEwQmdISy9yZmx3RDY5Ni9SVm1Gd1FaQU5CRWlQZ1Erd1RPc3pUV3lVT3VEZWk2TjZHekxQd0NLcy85L0RBQmx6bGZ3RU1oREY2UzR4QnNvNTQvYkJJa0k3Q09aSFZnRXlwZDBCVXZYYkFOS09ONndqNkdKb3FqUUtxeTBheVh5aTFIK3ZIL2hmemJ1S1pKRE9NenlPQkdIUkIyNWlsczVIMndkYlpoSUJ6UHR3emNVRHg1MTlERXJZIiwiaXYiOiJhZmY4MmQ5YzFiZGY4ZmU3OWM4Njg0YzAzODFjYmFiMiIsInNhbHQiOiIzYmUzNWY5NWVlZDdkYTk2ODJiYjEzODI1NjZmZjY1MGQxZGRkNzUyMTIyNDIyYjM0ZDY0ZDc4N2FmYmU2NzkzMTQ5Yjk0MWNjNmM2OGRiZDMzOGJhNjhiY2JjMmVlNDVjYjFjYzRjOTk3MDA3YTMzOGU1NTUxZGQ1NTNhYjBiNGRlNGZjYTI2ZTgwYzg2NmI0YTE0MGRlZWViZDA1YTRlMGI3OWE3OGY0YmI5NDVjNmUwYzI4YzgwY2U3MjI0ZTJhMmYxMGNkYTkzNjc1NjMwZTNhMzA0Y2Q3Yjc0Y2Y2YTA1NjQ3Y2MwZWJhZTc4MmU0OGQ0NDUwNjE0ZGJlZjk1MTNhZWM3NTVjOTlmY2JlNTA0NzRlMDVmYjZmYzE3MGIwNTBhOWRiZjExM2NiYzlmMjFlYjM2MGIzMDY3YjM5ODU4NDdjMzUzZDEwYTc5NjUzYTQ5NzQ2NjZhNzI1MDU2MzM5ZmY3YjdkODQ3ZjU0MTRiNzA1MWYxYmExNTRiMTY1Y2E0NGYwZmRiMGJjOGYwMDAyMjFmMzg3YTVjMmIyMjNhODVmN2IzY2E0Yjk3ZTEyMzgxMTcyZThiMmUwM2IxZDhhMWZiYzc4MmRjNjQ4MDIwODQ1NjNiNGE0YWMwZTc4YmIzOTI0OGM1NDY3ZDU3YTEwYjYzODA0NzAzODhkYiIsIml0ZXJhdGlvbnMiOjk5OX0=';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    	<div class="resultPlaceholder"></div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script><!-- https://github.com/brix/crypto-js/releases crypto-js.js can be download from here -->
        <script src="Encryption.js"></script>
        <script>
            var readableString = '<?php echo $readableString; ?>';
            var nonceValue = '<?php echo $nonceValue; ?>';
            var encryptedString = '<?php echo $encryptedString; ?>';

            // on page loaded.
            jQuery(document).ready(function($) {
                let encryption = new Encryption();
                var encrypted = encryption.encrypt(readableString, nonceValue);
                console.log(encrypted);

                var decrypted = encryption.decrypt(encrypted, nonceValue);
                console.log(decrypted);

                var decryptedOldString = encryption.decrypt(encryptedString, nonceValue);
                console.log(decryptedOldString);


                $('.resultPlaceholder').html('readable string: '+readableString+'<br>');
                $('.resultPlaceholder').append('encrypted: '+encrypted+'<br>');
                $('.resultPlaceholder').append('decrypted: '+decrypted+'<br>');
                $('.resultPlaceholder').append('decrypted from old encrypted string: <strong>'+decryptedOldString+'</strong><br>');
            });
        </script>
    </body>
</html>
