## Adaptor Pattern
Adapter pattern is a structural design pattern that allows objects with incompatible interfaces to work together.

## When to use
<li> When integrating legacy code with current code without changing the original code.
<li> When integrating third party libraries into an existing system.
<li> When reusing existing classes that do not have compatible interfaces.

<br>The adapter pattern allows creating a wrapper class (adapter), to “adapt” the interface of current code to be compatible 
with legacy codes or third-party libraries without modifying the existing codebase 

## How to implement
Refer code snippet. Key components:
<li> Target: An interface that describes a protocol that other classes must follow to be able to collaborate with the client code.
<li> Adaptee: The class with the incompatible interface that needs to be adapted before the client code can use it.
<li> Adapter: A class that implements the target interface, while wrapping the adaptee object. The adaptor receive calls from the client code
  via the Target interface and translates them into calls to the wrapped Adaptee object in a format it can understand.
