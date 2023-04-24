Laravel is a popular PHP framework known for its robustness, scalability, and security. It provides a wide range of features and tools for developing web applications and APIs quickly and efficiently. When it comes to building RESTful APIs, Laravel offers a variety of out-of-the-box features, including routing, middleware, and controllers, that make it an ideal choice. These features allow developers to define endpoints, handle HTTP requests and responses, and implement authentication and authorization easily. Additionally, Laravel's Eloquent ORM makes it easy to interact with databases and manage data models, further simplifying the development process. Therefore, if you are looking to build a RESTful API, Laravel is an excellent choice that provides you with all the necessary tools and features to create a robust and scalable API quickly and efficiently.

# API I created

The rest of how to use a function can be obtained by importing RedComm.postman_collection.json file 

## Create

used to adds new data. it received data by HTTP POST to (website)/API/notes. The body should contain "title" and "desc".

## Read

used to read data. it received data by HTTP GET to (website)/API/notes

it can pull 1 data through (website/API/notes/1), the data pulled are based on its ID.

if there's no parameter, then it will pull all data.

## Update

used to update data. it received data by HTTP PUT to (website)/API/notes. The body should contain "title" and "desc".

## Delete

used to delete data. it received data by HTTP DEL to (website)/API/notes/id. 
