# cscart_kavenegar_sms
send sms via Kavenegar

## How to use
download zip file and extract in root folder of user CS-Cart website

```php
<?php

$phone_numbers = 'some_phone_number';
$message = 'test message';

fn_am_kavenegar_sms_send($phone_numbers, $message);
```
