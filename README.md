# web-apps
Materia Diseño de Aplicaciones Web

# Topic 1 – Development Environment and Version Control

> **Note:** Since we are working individually, both Student A and Student B topics were completed by the same student.

---

## 1. Difference between Local Environment and Production Environment

A **local development environment** is the environment that runs on a developer's own computer and is used to create, test, and modify a website or web application. In some cases, it can work without an Internet connection, depending on the application.

A local development environment normally includes:

- A web server such as **Apache** or **Nginx**.
- A database manager such as **MySQL, MariaDB, SQLite, PostgreSQL, MongoDB, or Redis**.
- A service capable of interpreting the source code of a programming language, such as **Python, Java, Perl, Ruby, or PHP**.
- An **IDE or code editor**.
- Libraries, frameworks, package management systems, and other development utilities.

A **production environment** is the final destination of an application or website. It is the environment where the application is stored and made available to its target users. It can consist of one or several servers and can be accessible through the Internet or an Intranet.

### Main Difference

| Local Development Environment | Production Environment |
|---|---|
| Used to develop and test applications. | Used to run the finished application. |
| Usually runs on the developer's computer. | Runs on one or more servers. |
| Mainly used by developers. | Mainly used by final users. |
| Changes frequently during development. | Should remain stable and reliable. |
| May work without an Internet connection. | Usually accessible through the Internet or an Intranet. |

Examples of local development stacks include:

- **WAMP** – Windows, Apache, MySQL, and PHP.
- **XAMPP** – Cross-platform package including Apache, MariaDB, PHP, and optionally Perl.
- **MAMP** – Mac, Apache, MySQL, and PHP.
- **LAMP** – Linux, Apache, MySQL, and PHP.

For this course, **XAMPP** is used as the development environment for PHP. It includes Apache, MariaDB, PHP, and phpMyAdmin.

---

## 2. Definition of a Web Server and Examples

A **Web Server** is a software service that receives requests from clients, such as web browsers, and provides the requested web resources or application responses.

A web server is one of the components required in a local development environment for web applications.

Examples of web servers mentioned in the course material include:

- **Apache**
- **Nginx**

---

## 3. Definition of a Database Management System (DBMS) and Examples

A **Database Management System (DBMS)** is software used to manage and organize data stored in databases.

A DBMS allows applications and users to store, retrieve, modify, and manage information.

Examples mentioned in the course material include:

- **MySQL**
- **MariaDB**
- **SQLite**
- **PostgreSQL**
- **MongoDB**
- **Redis**
- **Cassandra**

In the XAMPP environment used in this course, **MariaDB** is included as the database manager. The material also mentions **phpMyAdmin**, which provides a graphical interface for managing SQL databases through a web browser.

---

## 4. Definition of a Runtime Environment or Interpreter and Examples

A **Runtime Environment** is the environment that provides the necessary components for a program to execute.

An **interpreter** is a service capable of interpreting the source code of a programming language so that the application can execute.

The course material mentions the following examples:

- **Python**
- **Java**
- **Perl**
- **Ruby**
- **PHP**

The course also uses **Node.js** as the runtime environment for JavaScript. The material explains that npm is the dependency manager for Node.js.

---

## 5. Definition of an IDE (Integrated Development Environment) and Examples

An **IDE (Integrated Development Environment)** is a software application designed to facilitate software development. It provides tools that help programmers write, manage, and work with source code.

The course material explains that an IDE, or alternatively a rich text editor, is one of the indispensable tools for a programmer.

For this course, **Visual Studio Code** is used as the text editor because of its extensions, speed, and other features that facilitate software development.

Other examples mentioned in the material include:

- **Visual Studio Code**
- **Atom**
- **Brackets**
- **Sublime Text**

---

## 6. Definition of a Framework and Examples

A **Framework** is a work scheme used by programmers to perform software development tasks. It provides tools and modules that can be reused across different projects.

Frameworks help streamline development because they reduce the need to repeatedly write the same code. They also help programmers follow good practices and maintain consistency in their code.

Examples mentioned in the course material include:

- **.NET**
- **Django**
- **Ruby on Rails**
- **Angular**
- **Laravel**
- **CodeIgniter**
- **Symfony**
- **Zend**
- **CakePHP**

It is important not to confuse a framework with a programming language. For example, **.NET is a framework**, while **C# is a programming language** commonly used with it.

For this course, **Laravel** is the selected PHP framework because of its community, documentation, ecosystem, updates, and support.

---

## 7. Definition of a Library and Examples

A **Library** is a collection of reusable code that can be used by programmers to perform specific tasks or add functionality to an application.

Libraries help developers avoid creating every functionality from scratch and can make the development process faster and more efficient.

The course material mentions libraries as part of the different tools and utilities that can be used depending on the requirements of a project.

Examples of libraries include:

- **jQuery**
- **Lodash**
- **NumPy**
- **Pandas**

---

## 8. Definition of a Package Management System and Examples

A **Package Management System** is a tool used to manage the packages and dependencies required by a software project.

A package manager can be used to install and manage external packages and libraries needed by an application.

The course material provides the following examples:

### Composer

**Composer** is a dependency manager for **PHP**. It is used to install Laravel and other packages developed in PHP.

### npm

**npm** is a dependency manager for **Node.js**. Node.js is used as the runtime environment for JavaScript.

Therefore:

- **Composer → PHP**
- **npm → Node.js / JavaScript**

---

## 9. What Git Is and Its Most Important Commands

**Git** is a free and open-source **version control system** created by Linus Torvalds in 2005.

A version control system monitors and manages changes to files and provides tools for sharing and integrating those changes with other developers.

Some of the main advantages of Git and version control are:

1. Maintaining a complete history of changes.
2. Creating branches.
3. Merging changes.
4. Tracking changes made to the software.
5. Working collaboratively with other developers.

### Important Git Commands

| Command | Description |
|---|---|
| `git init` | Creates a new Git repository. |
| `git clone` | Creates a copy of an existing repository. |
| `git status` | Displays the current status of the repository. |
| `git add` | Adds changes to the staging area. |
| `git commit` | Saves staged changes to the repository history. |
| `git push` | Sends local commits to a remote repository. |
| `git pull` | Retrieves and integrates changes from a remote repository. |
| `git fetch` | Retrieves changes from a remote repository without integrating them. |
| `git branch` | Creates or manages branches. |
| `git checkout` | Switches between branches. |
| `git merge` | Combines changes from different branches. |
| `git log` | Displays the commit history. |

Git can also be configured using:

```bash
git config --global user.name "Your Name"
git config --global user.email "example@email.com"