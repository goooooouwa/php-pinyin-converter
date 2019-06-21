## Install

### Install php on [Mac](https://medium.com/@romaninsh/install-php-7-2-xdebug-on-macos-high-sierra-with-homebrew-july-2018-d7968fe7e8b8)
`brew install php`

### Install Composer
Run the following commands to install [Composer](https://getcomposer.org/download/):

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

## Usage

`php convert.php 译文-为什么区分客户旅程和用户旅程很重要`

Output:
`yi-wen-wei-shen-me-qu-fen-ke-hu-lyu-cheng-he-yong-hu-lyu-cheng-hen-zhong-yao`

## Credits

Based on [overtrue/pinyin](https://github.com/overtrue/pinyin)
