<h3 align="center">SOLID Principles in PHP</h3>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

</div>

---


## 📝 Table of Contents

- [Why Use SOLID Principles](#whySOLID)
- [What are the SOLID Principles](#whatSOLID)
- [Single Responsibility principle](#srp)
- [Open-Closed principle](#ocp)
- [Liskov Substitution principle](#lsp)
- [Interface Segregation principle](#isp)
- [Dependency Inversion principle](#dip)
- [Built Using](#built_using)
- [Authors](#authors)


## 🧐 Why Use SOLID Principles <a name = "whySOLID"></a>

To create maintainable systems of Object Oriented Design SOLID principles should be referred. Following these principles will allow systems to be created which are robust, extensible and maintainable.

## 🏁 What are the SOLID Principles <a name = "whatSOLID"></a>

SOLID is the acronym that stands for 
- Single Responsibility principle
- Open-Closed principle
- Liskov Substitution principle
- Interface Segregation principle
- Dependency Inversion principle


## Single Responsibility principle <a name = "srp"></a>

*Every method should do one thing. Every class should represent one thing.</br>
A class should only have one reason to change, which means it should only have one responsibility.*</br>
If you have a method inside an object that does too many things without invoking outside methods that method is doing too much and runs the risk of becoming an anti-pattern known as the *god function* which violates SRP.

## Open-Closed principle <a name="ocp"></a>

*Software entities(ex: Class, functions) should be open for extension but closed for modification.*</br>
Class can extend its behavior without modifying it. 

## Liskov Substitution principle <a name="lsp"></a>

*Any object of a subtype should be suitable and working substitute for its superclass. This relies on inheritance more than anything else. This principle ensures that any class that is the child of a parent class should be usable in place of its parent without any unexpected behavior.* </br>
In 1988, American computer scientist Barbara Liskov delivered a keynote speech at a conference called Data Abstraction and Hierarchy, wherein she introduced this principle.


## Interface Segregation principle <a name="isp"></a>

*No class should be forced to implement an interface that it doesn't use, nor should it depend on a method it doesn't use.*</br>
A client should only know the methods they are going to use and not those that they are not going to use.

## Dependency Inversion principle <a name="dip"></a>

*High level classes should not depend on low level classes and both should depend on abstractions</br>
Abstractions should not depend on implementation details but instead details should depend upon abstractions.*<br>
This principle allows for more flexible and decoupled code, making it easier to change implementations without affecting other parts of the codebase.

## ⛏️ Built Using <a name = "built_using"></a>

- [PHP](https://www.php.net/) - Scripting Language


## ✍️ Authors <a name = "authors"></a>

- [@dipanwita9](https://github.com/dipanwita9) 


