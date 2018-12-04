FROM phpunit/phpunit:5.7.12

COPY . /white_rabbit

ENTRYPOINT phpunit /white_rabbit/test