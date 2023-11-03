.PHONY: help db-start migrate npm-install run

help:
  @echo "Available targets:"
	@echo "db-start   : Create all containers and start them"
	@echo "migrate    : Run database migration with seeding"
	@echo "npm-install: Run npm install"
	@echo "run        : Run npm run dev"

db-start:
	./vendor/bin/sail up -d

migrate:
	./vendor/bin/sail php artisan migrate:fresh --seed

npm-install:
	./vendor/bin/sail npm install

run:
	./vendor/bin/sail npm run dev
