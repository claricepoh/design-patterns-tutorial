# Singleton Pattern
Singleton is a creational design pattern that ensures a class has only one instance, and provides a global point of access to this instance. 

Key Characteristic:
<li> Single Instance: The class controls the instantiation process, ensure only one instance of the class exists.
<li> Global Access: The single instance is globally accessible thoughout the application, via a static method
<li> Lazy Initialization: The instance is usually created only when it is first needed.
  
## When to use
This is useful in scenarios where exactly one object of a class is needed across the application with consideration as below.
<li> Singleton ensures that all parts of the application have consistent access to the same configuration data, session data
<li> Singleton optimises resource efficientcy. Creating multiple unnecessary instances consumes resources (memory, CPU, network) and can lead to performance issues.
<li> Singleton ensures thread safety that instance is not instantiated multiple times in a multi-threaded environment, preventing possible data corruption.

Examples: 
<li> Database connection
<li> Logging service
<li> Session manager likes managing login state, user sessions data often requires a single instance that all components can access.
<li> Configuration settings management likes managing database credentials, API keys, fetaure flags. 
<li> Caching service to store and retrieve frequently accessed data (e.g redis). 

## How to implement
Refer code example 
