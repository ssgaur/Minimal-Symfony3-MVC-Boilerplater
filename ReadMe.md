# Project Title

This projec basically targets the programmers who are really new to MVC design pattern used in web developement. Also this uses very basic programming and database knowledge, So any one who wants to get started for real understaning of How web application are built using different MVC framework (Example: CodeIgniter, Laravel, Ruby on Rails, Django, SailsJS, ASP.NET and many more). 

This MVC framework is a minmal form of any existing web MVC framework. I am building this so that anyone can start building "Small" Web Application using this. It lacks lot of things like "RESTful" routing, Migrations, Security issues and Many more. I will keep building other features for this. Please fork and contribute to this project.

## How to Set Up and Start Building My first Web Application

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisities

Before getiting deeper. This project is intented to used by programmers who are new to MVC design technique for web developement. 

```
## What you should know ?
* Basic of PHP
* How to Use PDO in PHP
* Little Idea about any Database (MySQL prefebly) 
* You know what happens when you submit any form in any website. 
```

### Installing

If you are new to PHP. Consider using MySQL as database. SO you will not have to edit
any existing code.

## Installing framework

```
* Install and Setup XAMPP (Works in all system)
* Download this repository and Extract it (Suppose folder name - minimal-php-mvc-framework)
* Copy extracted folder into 'htdocs' folder inside your xampp folder of your machine.
* Run the 'Apache' and 'MySQL' server from 'xampp' control panel
* Go to the browser and hit url: localhost/minimal-php-mvc-framework/items/view
* Its working !!!!!
```

## Up and running with framework

```
If all goes well till this time. You are ready to go ahead. Now you are ready to write your Models, Views and Controllers. Few things must be followed in creating your m,v and c.
* Controller Name must be ends with 's' and must be appened by string "Controlled". For example: If you want your should look like : www.mysite.com/users/login  than you must create a controller name as "UsersController"  in "/app/controllers/" directory.
* Model name must match with Controller name without 's' and Controller.  For example: For UsersController we will have "User" model in "/app/models".
* Most imp:  A table must exists with the name of model with 's' in end.  For example: for User model there must be a 'users' table in the Database.
* There must be a folder name with the same name of the controller without 's' and 'Controller' in end. For example: for UsersController there must be a folder named "users" in the "/app/views/" directory.
*
```


##  with url 'www.mysite.com/users/register' or 'localhost/mysite/users/register'


### Creating first running webpage
Suppose you want a website with only one page where user can register himself with few information. And you want to show a pretty url like - 
* www.mysite.com/users/register (If you are live) or 
* localhost/mysite/users/register (if in local develoment - xampp)

Step to be followed - 

```
* Create a file named "UsersController.php" in "/app/controllers/" directory. 
* Create a class named 'UsersController' in above 'UsersController.php'.
* Write a funciton named 'register' in above class which has 'Controller' as base class.
* Create a file named "User.php" in "/app/models/"
* Create a class named 'User' in above 'User.php' which has 'Model' as baseclass
* Create a folder named 'users' in "/app/views/".
* Create three files header.php, footer.php and register.php. 

```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* Dropwizard - Bla bla bla
* Maven - Maybe
* Atom - ergaerga

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone who's code was used
* Inspiration
* etc
