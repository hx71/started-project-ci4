r:
	echo "Update Migration"
	php spark migrate:rollback
	php spark migrate
	php spark db:seed UserSeeder

run:
	echo "Update Swagger Docs"

swag:
	echo "Create Swagger files"