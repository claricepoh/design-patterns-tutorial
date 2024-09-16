## Decorator Pattern
Decorator pattern is a structural design pattern that allows extending the behavior of individual objects without modifying their code or
using complex inheritance hierarchies (as some languages only support single inheritance).

## When to use
<li> When adding functionalities to individual objects without affecting behavior of other objects 
<li> When there is a need of flexibility that can dynamically add/remove functionalities to an object 
<li> When subclasses can have just single parent class. In most languages, inheritance doesn’t let a class inherit behaviors of 
multiple classes at the same time 
<li> When extending functionality by subclassing is not feasible due to combinatorial explosion of subclasses  

## How to implement
Refer code snippet. Key components:
<li> Component: An interface or abstract class that defines the basic behavior of the objects.
<li> Concrete Component: Implement basic behavior of the objects 
<li> Decorator: A class that implements the same interface as the component and wraps the component object
<li> Concrete Decorators: Subclasses of the Decorator that add specific (or additional) functionalities to the component object
