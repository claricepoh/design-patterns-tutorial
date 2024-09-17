## Dependency Injection
Dependency Injection (DI) is a design pattern used to achieve Inversion of Control (Ioc) between classes and their dependencies. 
It allows a class to receive its dependencies from outside the class, rather than instantiating dependencies inside the class.

### Key Features and Benefits
##### Decoupling
DI reduces tight coupling between a class and its dependencies; by removing the responsibility of creating dependencies from the dependant class itself. Dependencies are injected into the class from the outside. 

##### Interchangeable Dependencies
Dependencies can be easily swapped with different implementation without changing the dependent class.

##### Mocking Dependencies for Improved Testability
Since dependencies are injected rather than created inside the class, DI makes it easier to write unit tests by allowing dependencies to be mocked or stubbed. This allows for isolated unit tests where the behavior of dependencies can be controlled.  

##### Adherence to SOLID Principles
<li> Single Responsibility Principle (SRP): By injecting dependencies, classes can focus on their primary responsibilities rather than managing their dependencies. This leads to cleaner, nore focused classes.
<li> Open/Closed Principle (OCP): DI allows extending functionality by injecting new dependencies without modification of existing code.

##### Promote Inversion of Control (IoC)
DI adheres to the IoC principle, where the control of dependency creation is moved from the dependent class to an external entity (such as DI container).This decouples code and helps with abstraction and flexibility, making the codebase more understandable and easier to refactor. 

##### Centralized Dependency Creation and Management
Configuration of Dependencies: DI containers or frameworks provide centralized control over dependency creation and lifecycle management, such as configuration of which dependencies should be injected and manage them from a single location. 

##### Reduces Code Duplication
By injecting dependencies rather than creating them in different classes, DI avoids duplication of code responsibile for managing and configuring dependencies. This adhere to a DRY (Don't Repeat Yourself) approach.

### How to implement
Refer code snippet.

##### Type of Dependency Injection
<li> Constructor Injection
<li> Setter Injection
<li> Interface Injection
