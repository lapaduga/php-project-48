install:
	composer install

dump:
	composer dump-autoload

validate:
	composer validate

lint:
	composer exec --verbose phpcbf -- --standard=PSR12 src bin

gendiff:
	./bin/gendiff