## Strategy Pattern
Strategy pattern is a behavioral design pattern that allows defining a variant set of behaviors, 
encapsulate each behavior as a separate class, and make them interchangeable within a given context object. 

## When to use
<li> When the application/program has common code with some variants for executing a task in different ways; 
only the differing parts will be extracted and encapsulated into separate classes. 
In future, new variants can be added without modifying existing code.
  
<li> Use the strategy pattern to isolate implementation details and dependencies of various strategies classes from client codes; 
client only exposes to a simple interface to execute the specific strategies codes.

<li> Avoid using too many conditionals (e.g. if or switch statements) for selecting different behaviors in codebase.

## How to implement
Refer code snippet. Key components:
<li> Strategy Interface: Defines the contract for the family of classes. 
<li> Concrete Strategies: Implement different versions of the behavior that the strategy interface defines.
<li> Context: Hold a reference to the strategy object and uses it to execute the specific behavior without 
knowing the detail implementation of that behavior
