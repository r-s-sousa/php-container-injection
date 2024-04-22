stan:
	vendor/bin/phpstan analyse app public --level=9

csfixerpub:
	vendor/bin/php-cs-fixer fix public

csfixerapp:
	vendor/bin/php-cs-fixer fix app