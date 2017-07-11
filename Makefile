install:
	composer install
	
update:
	composer update

lint:
	composer run-script phpcs -- --standard=PSR2 src bin