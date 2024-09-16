## Factory Pattern
Factory pattern is a creational design pattern that defines an interface for creating objects without specifying the exact class of the object
to be instantiated, but delegates the responsibility of object creation to its subclasses via a factory method.

## When to use
<li> When there is a framework or system where the type of objects being created changes frequently or needs to be decided dynamically. 
<li> When object creation needs to be encapsulated by a central factory class, where the type of objects to be created may change or increase
     over time. This pattern allows new object types to be added without changing the existing code in the rest of application.  
<li> When the creation of objects involves logic that may vary across subclasses; factory pattern abstracts the instantiation process and 
     let the subclasses decide which class to instantiate. 
 
## How to implement
Key components:
<li> Creator (Factory): An abstract class or interface that defines a factory method for instantiating different types of objects.
<li> Concrete Creator: Implements the factory method to instantiate specific object instances.
<li> Product: An abstract class or interface that defines common behavior of the objects created by factory method.
<li> Concrete Product: Actual implementation of the product interface that is returned by the factory method

