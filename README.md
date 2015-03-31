# HOODFramework
The HOOD Framework base project

HOOD is a PHP framework based on real Object Oriented Design using the DCI (Data, Context, Interaction) architectural pattern. Easy to use, easy to understand. built for developers who need a simple and elegant toolkit to create full-featured web applications.

HOOD Framework stands for Hypertext Object Oriented Design Framework and in Hypertext we mean PHP But not necesarly. Understanding that HOOD is more of a concept rather than a regular Framework. Yet it is (in this website) tends to PHP and includes special libraries for PHP.

You may still how ever use the HOOD concept for other Script languages, such as Ruby, Python, Javascript and of course C++. Matter of fact C++ is the natural language for OOD and the concept of HOOD is based on it. We are using an arichtectural design pattern called DCI. 

## DCI - Data, Context and Interaction

 Data, context and interaction (DCI) is a paradigm used in computer software to program systems of communicating objects. Its goals are:

 - To improve the readability of object-oriented code by giving system behavior first-class status;
 - To cleanly separate code for rapidly changing system behavior (what the system does) from code for slowly changing domain knowledge (what the system is), instead of combining both in one class interface;
 - To help software developers reason about system-level state and behavior instead of only object state and behavior;
 - To support an object style of thinking that is close to peoples' mental models, rather than the class style of thinking that overshadowed object thinking early in the history of object-oriented programming languages.

The paradigm separates the domain model (data) from use cases (context) and Roles that objects play (interaction). DCI is complementary to model–view–controller (MVC). MVC as a pattern language is still used to separate the data and its processing from presentation. 

## The concept (codecept)

In different to MVC (Model-View-Controller) the Object Oriented Design is modeling the real world into software coded objects and classes. Hence if you are managing employees you will have an employee class. If you want to assign an employee to a certain job, you will have a method in the employee class called assign that get a job as a parameter.

Until now it's straight forward OOP.

But MVC tries to force you on having a View and a Model, while people (programmers) tends to confuse and create a few Views mixing a view for a job and employee in the View class. In DCI concept and so on in HOOD the view and the model that relevant for the real life object co-exist in the relevant class. This way we will have on the employee class the function viewRecentJobs() or viewShortBio(). Yet we will still maintain seperation. Hence this class will also have the getRecentJobs() function. Most likely the viewRecentJobs() will call the getRecentJobs() method. This is the main idea standing behind the DCI paradigm.

By including the real life functions and method in one class and yet seperating data and view creates a much more easy to understand flow of actions generating a simple clean code that needs no comments. You're basically think how things works in real life sample and that's the way they are coded. 

## Controller

The controller responsabilities is to handle the requests. Talking about PHP and Web Development, the controller handles the HTTP request, or more likely called the page or RPC/JSON in RESTfull. It parse check and validate the GET or POST params, creates the objects in memory and calls the relevant functions.

## The Support Library

HOOD Frameworks comes with a support library that holds common functionality needed for almosy any PHP Projects. Handling parameters, handling URLs, handling dates and more. For using the HOOD Framework you may use the Support Library but you are not obligated to do so. 

