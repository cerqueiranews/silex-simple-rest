# Silex Simple REST

Fork of a simple silex skeleton application for writing RESTful API. Developed and maintained by [Alessandro Arnodo](http://alessandro.arnodo.net).

Updated database for mongodb

**This project wants to be a starting point to writing scalable and maintainable REST api with Silex PHP micro-framework**

    php -S 0:9001 -t web/

Your api is now available at http://localhost:9001/api/v1.

####Run tests
Some tests were written, and all CRUD operations are fully tested :)

From the root folder run the following command to run tests.

    vendor/bin/phpunit


####What you will get
The api will respond to

	GET  ->   http://localhost:9001/api/v1/notes
    GET  ->   http://localhost:9001/api/v1/notes/{id}
	POST ->   http://localhost:9001/api/v1/notes
	PUT ->   http://localhost:9001/api/v1/notes/{id}
	DELETE -> http://localhost:9001/api/v1/notes/{id}

Your request should have 'Content-Type: application/json' header.
Your api is CORS compliant out of the box, so it's capable of cross-domain communication.

Try with curl:

	#GET (collection)
	curl http://localhost:9001/api/v1/notes -H 'Content-Type: application/json' -w "\n"

	#GET (single item with id 1)
    curl http://localhost:9001/api/v1/notes/1 -H 'Content-Type: application/json' -w "\n"

	#POST (insert)
	curl -X POST http://localhost:9001/api/v1/notes -d '{"note":"Hello World!"}' -H 'Content-Type: application/json' -w "\n"

	#PUT (update)
	curl -X PUT http://localhost:9001/api/v1/notes/1 -d '{"note":"Uhauuuuuuu!"}' -H 'Content-Type: application/json' -w "\n"

	#DELETE
	curl -X DELETE http://localhost:9001/api/v1/notes/1 -H 'Content-Type: application/json' -w "\n"

####What's under the hood
Take a look at the source code, it's self explanatory :)
More documentation and info about the code will be available soon.

Under the resources folder you can find a .htaccess file to put the api in production.

####Contributing

Fell free to contribute, fork, pull request, hack. Thanks!

## License

see LICENSE file.
