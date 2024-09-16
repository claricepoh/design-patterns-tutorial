# Command Pattern
The command pattern is a behavioral design pattern that encapsulates all information needed to perform an action 
or trigger an event. 

## When to use
<li> When there is a need to decouple the invoker (the object that triggers an operation) from the receiver (the object that knows how to perform the operation.
<li> Use for queueing or scheduling jobs. 
  
## How to implement
Refer code snippet. Key components:
<li> Command Interface: Defines the common method for all commands.
<li> Concrete Command: Implements the command interface and defines the binding between the command and the receiver.
<li> Receiver: The object that performs actual operation when the command is executed.
<li> Invoker: The object that knows how to execute the command but doesn't know the detail implementation of the command or the receiver. 
