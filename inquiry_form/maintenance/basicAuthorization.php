<?php
//パスワードを記録したファイルの場所
echo __FILE__;
// C:\xampp\htdocs\inquiry_form\maintenance\basicAuthorization.php

// パスワード（暗号化）
echo '<br>';
echo (password_hash('password123', PASSWORD_BCRYPT));
