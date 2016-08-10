# Minimal PHP MVC Framework

This project basically targets the programmers who are really new to MVC design pattern used in web developement. This uses very basic programming and database knowledge, So any one who wants to get started with real understaning of How web application are built using different MVC framework (Example: CodeIgniter, Laravel, Ruby on Rails, Django, SailsJS, ASP.NET and many more). 

This MVC framework is a minmal form of any existing web MVC framework. I am building this so that anyone can start building "Small" Web Application using this. It lacks lot of things like "RESTful" routing, Migrations, Security issues and Many more. I will keep building other features for this. 

**Please fork and contribute to this project.**

## How to Set Up and Start Building My first Web Application

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisities

Before getiting deeper. This project is intented to be used by programmers who are new to MVC design technique for web developement. 

```
## What you should know ?
* Basics of PHP
* How to Use PDO in PHP  (If want to modify the this code)
* Little Idea about any Database (MySQL prefebly) 
* You know what happens when you submit any form in any website. 
```

### Installing

If you are new to PHP. Consider using MySQL as database. If you do so you can 
start building application quickly.
## Installing framework

```
#### Step to setup Development Enviourment
* Install and Setup XAMPP (Works in all system. Google it for more info)
* Download this repository and Extract it (Suppose folder name: minimal-php-mvc-framework)
* Copy the extracted folder into 'htdocs' folder inside your xampp folder of your machine.
* Run the 'Apache' and 'MySQL' server from 'xampp' control panel
* Go to the browser and hit url: localhost/minimal-php-mvc-framework/welcomes/index
  or just 'localhost/minimal-php-mvc-framework'
* is it working ? Great Move ahead. Otherwise repeat above steps.
```

## Up and running with framework

```
If all goes well till this step. You are ready start building you own web application. Now you are ready to write your Models, Views and Controllers. Few things must be followed in creating your m,v and c.

* Controller Name must be ends with 's' and must be appened by string "Controlled". 
For example: If you want your should look like : www.mysite.com/users/login  
than you must create a controller name as "UsersController"  in "/app/controllers/" directory.

* Model name must match with Controller name without 's' and Controller.  
For example: For UsersController we will have "User" model in "/app/models".

* Most imp:  A table must exists with the name of model with 's' in end.  
For example: for User model there must be a 'users' table in the Database.

* There must be a folder name with the same name of the controller without 's' 
and 'Controller' in end. For example: for UsersController there must be a folder 
named "users" in the "/app/views/" directory.

```

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

### Available Model Methods 
I have tried to write an in-built ORM (google it) for this tiny framework. Right now
It only suppports following 6 methods. I think at this level these 6 method will be
sufficient for all your database requirements.

To acces them you must make an object of the Model you want to use. For example: for user model which corresponds to users table. Create an object as - 

```
$user = new User;

```

Now you can access the ORM in-build method. Detailed documentation us as follows-

####For Inserting  Data into table.
```
$user->save($data)

where $data is an associative array as -

$data = array(
	'columnName1' => $somevalue1,
	'columnName2' => $somevalue2,
	'columnName3' => $somevalue3,
		......	  =>	.......			
		......			.....
);

Return:  if successfull than id of last inserted record in table
		 else  false
```

#### For Updating data into table
```
$user->update($id,$data)
	
Where -  
$id : The auto incremented key of the table
$data = array(
	'columnName1' => $somevalue1,
	'columnName2' => $somevalue2,
	'columnName3' => $somevalue3,
		......	  =>	.......			
		......			.....
);

Return:  if successfull than true
		  else  false
```


#### For Deleting single row from table
```
$user->destroy($id)

$id : Id of the row which you want to delete from table
returns:  if successfull than true
		  else  false
```

Get all rows of the Model (table)
```
 $user->all()

input: No input
Returns:  An associative array of the results from the table.
```
#### Get results by one column of the table (Model)
```
$user->find_By_Column($columnName,$columnValue)
	
Input: Column name and its value
Return:  An associative array of the results from the table.
```


#### Get results by searching some column but with some substring.
```
$user->partial_String_Search($columnName,$partialString)
	
Input: Column name and substring which the results must contain
Returns:  An associative array of the results from the table.
```

## How to render view from controller with the data.

If you have followed all the above steps. And have created view file corresponding 
to the controller folder and method name. You can render the html/view file by calling 

```
$this->_template->render($data);

Where $data is an array() type. Can contains any information which you want to show into your view. This is an optional paramtere


``` 

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* **More to Come** - *Initial work* - [me](https://github.com/ssgaur)

