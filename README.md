### website used as rest api for mappers application

**TO CLONE AND RUN YOU MUST FULFILL THOSE REQUIREMENTS FIRST**  
1. php must be included in the environment path  
2. git must be installed and reachable from cmd  
3. make sure that mode_rewrite enabled in your apache config  
4. open txt file and past this code  

```
git clone https://github.com/arafeh94/template_yii_rest
cd template_yii_rest
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
php composer.phar install
```


>this code will create folder called template_yii_rest and download all the needed dependencies

check if the project is working by going to this [link](http://localhost/template_yii_rest/web/api)

