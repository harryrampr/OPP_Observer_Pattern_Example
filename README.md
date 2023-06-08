## Observer Pattern (OOP) Example

We are sharing some simple PHP code, showing the use of
the [Observer Pattern](https://en.wikipedia.org/wiki/Observer_pattern). You will see how modern versions of PHP,
supporting Classes and Abstract Classes, make it easy to implement the Observer Pattern using this language.

You can find the PHP 8.1 code
at [/app/src](https://github.com/harryrampr/OPP_Observer_Pattern_Example/tree/master/app/src), there is testing
at [/tests](https://github.com/harryrampr/OPP_Observer_Pattern_Example/tree/master/app/tests) directory. HTML output
with Tailwind CSS can be found
at [/app/public](https://github.com/harryrampr/OPP_Observer_Pattern_Example/tree/master/app/public) directory.

### About the Pattern

The Observer Pattern is a behavioral design pattern
in [object-oriented programming](https://en.wikipedia.org/wiki/Object-oriented_programming) (OOP) that establishes a
one-to-many
dependency between objects. It defines a relationship where multiple observers (also known as subscribers or listeners)
are notified automatically when the subject (also known as the publisher or observable) undergoes a change in its state.

The Observer Pattern is a powerful tool for establishing communication and coordination between objects in a decoupled
manner. It promotes separation of concerns, reusability, and flexibility by allowing objects to react to changes without
tightly coupling them to the subject.

### History

The Observer Pattern, also known as
the [Publish-Subscribe Pattern](https://en.wikipedia.org/wiki/Publish%E2%80%93subscribe_pattern), was first introduced
by the software engineer and
computer scientist [Christopher Alexander](https://en.wikipedia.org/wiki/Christopher_Alexander) in his
book ["A Pattern Language: Towns, Buildings, Construction"](https://en.wikipedia.org/wiki/A_Pattern_Language). The book,
published in 1977, explored patterns in architecture and urban design. Although Alexander's work primarily focused on
physical architecture, his concept of patterns influenced the field of software engineering.

The concept of the Observer Pattern draws inspiration from the principles
of [event-driven programming](https://en.wikipedia.org/wiki/Event-driven_programming), which has a
long history in computing. Event-driven programming is based on the idea of handling events or signals asynchronously,
where objects can register themselves to receive notifications when specific events occur.

### Intent

The Observer Pattern is used when there is a need for a loosely coupled communication between objects. It allows
multiple observers to monitor and react to changes in the state of a subject without tightly coupling the subject
and the observers.

### Structure

The main components of the Observer Pattern are the subject, observer, and optionally a concrete subject. The subject
is the object being observed, while the observer is the object that wants to be notified of the subject's changes.
The concrete subject is an implementation of the subject interface or class that holds the state and notifies the
observers about state changes.

### How it Works

How it works: The observer objects register themselves with the subject to receive notifications. When the subject's
state changes, it notifies all registered observers, and they can react accordingly. The subject does not have explicit
knowledge of the observers; it only knows that it needs to notify them when a change occurs.

### Benefits

- Supports loose coupling between the subject and observers, allowing for flexibility and extensibility.
- Enables a one-to-many relationship between the subject and multiple observers.
- Provides a way to notify objects without the need for direct dependencies or tight coupling.
- Allows for dynamic addition and removal of observers at runtime.

### Applications

- **Event Handling and Event-driven Systems:** The Observer Pattern is widely used in event-driven systems, such as
  graphical user interfaces (GUIs) and web applications. It allows multiple observers to subscribe to events and be
  notified when those events occur. The pattern enables decoupled communication between event emitters and event
  handlers, facilitating modular and flexible architectures.
- **Publish-Subscribe Systems:** The Observer Pattern is fundamental to publish-subscribe systems, where publishers
  produce messages or events, and subscribers consume or react to those messages. The pattern enables publishers to
  broadcast messages to multiple subscribers without the need for direct coupling or awareness of the subscribers. This
  is commonly seen in messaging systems, real-time data streams, and distributed architectures.
- **Model-View-Controller (MVC) Architecture:** The Observer Pattern is central to
  the [MVC architectural pattern](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller). In MVC, the
  model represents the data and business logic, the view represents the user interface, and the controller acts as an
  intermediary between the model and view. Observers (views) register themselves with the model to receive updates when
  the model changes. This enables automatic synchronization of the views with the model's state.
- **User Interface Components:** User interface libraries often utilize the Observer Pattern to handle events and user
  interactions. Each UI component can act as a subject that notifies registered observers (such as event handlers) when
  user actions or events occur. This allows for modular and reusable UI components that can be easily extended and
  customized.
- **Logging and Monitoring Systems:** Observer Pattern can be employed in logging and monitoring systems, where
  observers subscribe to log entries or system events. Observers can perform various actions such as writing logs to
  files, sending notifications, aggregating statistics, or triggering alarms based on the received notifications.
- **Databases and Data Binding:** Observer Pattern is utilized in data binding frameworks and database systems.
  Observers can register themselves with data sources or database entities to receive updates when the underlying data
  changes. This allows for automatic synchronization between data models and views, ensuring consistency and real-time
  updates.
- **Stock Market Ticker Systems:** Observer Pattern can be applied in stock market ticker systems, where multiple
  clients or subscribers are interested in receiving real-time stock updates. Observers can subscribe to specific stocks
  and be notified when their prices or other related data change, enabling real-time market data dissemination.

### Other Examples

A common example of the Observer Pattern is a weather station that broadcasts weather updates to multiple displays.
Each display is an observer that automatically receives and shows the latest weather conditions without needing direct
communication with the weather station. It allows new displays to be easily added and existing ones to be removed,
providing a flexible and decoupled system for keeping multiple displays synchronized with the weather data.