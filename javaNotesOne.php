<?php include_once("head.php");?>
<title>Java Notes</title>
<body>

<?php require_once("nav.php");?>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h1>Java</h1>

  <h3>Method</h3>
  <p>Collection of statement(s) that perform an operation. Java looks for main method when running a program; it’s the entry point of any java code.</p>
  <p>Public static void main(String[] args) {}</p>

  <h3>Parameters</h3>
  <p>Pass information to a method</p>

  <h3>Public</h3>
  <p>Access modifier</p>

  <h3>Static</h3>
  <p>Used to declare a field, method, or inner class as a class field. 
    Classes maintain one copy of class fields regardless of how many instances exist of that class. static also is used to define a method as a class method. 
    Class methods are bound to the class instead of to a specific instance, and can only operate on class fields. (Classes and interfaces declared as static 
    members of another class or interface are actually top-level classes and are not inner classes.)</p>

    <h3>Void</h3>
    <p>Returns nothing</p>

    <h3>Variable</h3>
    <p>information in RAM – random access memory</p>

    <h3>Casting</h3>
    <p>Treat or convert a number from one type to another e.g. (byte) (value/2)</p>

    <h3>Ternary Operator</h3>
    <p>Shortcut to assigning one of twp values to a variable depending on a given condition. Shortcut of if-then-else statement.</p>
    <p> - int age of client = 20;</p>
    <p> - Boolean isEighteenOrOver = ageOfClient == 20 ? true:false;</p>
        
    <h3>Class</h3>
    <p>Blueprint for house. Object – Each house built, instantiated using the new operator is an object, also known as an instance. 
    The physical address of each house is a reference, which can be copied many times, but there is still just one house – copy address 
    not house itself. Can pass references as parameters to constructors and methods.</p>

    <h3>Constructor </h3>
    <p>A constructor in Java is a special method that is used to initialize objects. The constructor is called when an object of a class is created. 
    It can be used to set initial values for object 
    attributes. Note that the constructor name must match the class name, and it cannot have a return type (like void). Also note that the constructor 
    is called when the object is created. All classes have constructors by default: if you do not create a class constructor yourself, Java creates one for you. 
    However, then you are not able to set initial values for object attributes.</p>

    <h4>this() & super()</h4>
    <p>Use to call a constructor from another overloaded constructor in the same class. Can only be used in a constructor and must be the frist statement in a constructor. 
    Used with constructor chaining, when one constrictor calls another, and helps reduce duplicated code. Only way to call parent instructor is by calling super(). 
    Java puts default call to super(), if not added. To call super must be first statement in each constructor. A constructor cant call both super() and this().</p>
    <!-- ADD IMAGE -->
    <img src="img/constructor_chaining.png" alt="constructor chaining"><br><br>

    <h3>Method Overloading</h3>
    <p>Means providing two or more separate methods in a class with the same name but different parameters</p>
    <p>Method may return type or may not be different and that allows us to reuse the same method name</p>
    <p>Reduces duplicated code and don’t have to remember multiple method names</p>
    <p>Compiler decides which method to call dependent on method name, return type and argument list</p>
    <p>Can overload static and instance methods</p>
    <p>Can overload in single class, but method can also be treated as overloaded in the subclass of that class – due to inheritance of the method from the parent class, 
    allows for another overloaded version of the method</p>
    <!-- ADD IMAGE -->
    <img src="img/overloading_rules.png" alt="overloading rules"><br><br>


    <h3>Method Overriding</h3>
    <p>Means defining a method in a child class that already exists in the parent class with the same signature (name & arguments)</p>
    <p>Derived methods are methods defined in parent class and child gets access</p>
    <p>The method that is going to be called is decided at runtime by the JVM – Java Virtual Machine</p>
    <p>@Override used and can’t override static methods, only instance methods</p>
    <!-- ADD IMAGE -->
    <img src="img/overriding_rules.png" alt="overrding rules"><br><br>/
    <!-- ADD IMAGE -->
    <img src="img/method_overriding.png" alt="method overrding"><br><br>


    <h3>Static Methods</h3>
    <p>Declared using a static modifier</p>
    <p>They can’t access instance methods and instance variables directly</p>
    <p>No access to this keyword, if a method doesn’t use instance variables; method should be declared as a static method.</p>

    <h3>Instance Methods</h3>
    <p>Belong to an instance of a class</p>
    <p>To use an instance method we have to instantiate the class first usually by using the new keyword.</p>
    <p>Can access instance methods and variables directly</p>
    <p>Can also access static methods and variables directly</p>
    <!-- ADD IMAGE -->
    <img src="img/static_or_instance.png" alt="static or instance"><br><br>

    <h3>Static Variables</h3>
    <p>Declared using the keyword static - Aka static member variables</p>
    <p>Every instance of that class shares the same static variable. If changes are made to that variable, all other instances will see the effect of the change.
        Not used much but can be useful. For example when reading user input using Scanner we will declare scanner as a static variable. This way static methods 
        can access it directly.</p>
    <!-- ADD IMAGE -->
    <img src="img/static_variables.png" alt="static variables"><br><br>

    <h3>Instance variables</h3>
    <p>Aka fields or member variables</p>
    <p>Belong to an instance of a class</p>
	<p>Every instance has its own copy of an instance variable</p>
	<p>Every instance can have different value (state)</p>
	<p>Instance variables represent the state of an instance</p>
<!-- ADD IMAGE -->
<img src="img/instance_variables.png" alt="instance variables"><br><br>

    <h3>The Object Class</h3>
    <p>Image Below</p>
<!-- ADD IMAGE -->
<img src="img/object_class.png" alt="object class"><br><br>

    <h3>Composition</h3>
    <p>Composition is the design technique to implement has-a relationship in classes. We can use java inheritance or Object composition for code reuse. 
    Java composition is achieved 
        by using instance variables that refers to other objects</p>
        <p>It represents part-of relationship</p>
        <p>Composition is a restricted form of Aggregation in which two entities are highly dependent on each other. It represents part-of relationship. In composition, both the entities are dependent on each other. When there is a composition between two entities, the composed object cannot exist without the other entity.</p>
        <img src="img/compose.png" alt="composition"><br><br>
        <p>What you are looking at in the first diagram is how the AWT classes in Java use the Composite Pattern so that they are able to compose together elements in a larger element of the same type. The second diagram shows the generalized form of the Composite Pattern.</p>
        <img src="img/composition_tree.png" alt="composition"><br><br>
       <p>The Composite Pattern</p
    ><p>In order to understand the composite pattern, let's use a more concrete example for a better perspective. 
    First, we have a super class (could also be an interface) Vehicle for things that drive on the road, like cars, trucks, 18-wheelers, etc:
        <figure>
  <figcaption><b> > </b></figcaption>
  <pre>
    <code>
    public abstract class Vehicle
{
     public void drive(int distance) {
        System.out.println("Drove " + distance + ". Vroom vroom!");
     }

     public abstract int getWeight();
     // etc.
}
Now we also have a concrete class for a car:

public class Car extends Vehicle
{
    protected int weight;

    // ...

    @Override
    public int getWeight() {
        return this.weight;
    }
}
We also have a class for a car carrier, which is a vehicle that can contain other vehicles:

public class CarCarrier extends Vehicle
{
    protected int weight;
    protected Vehicle[] cars;

    // ...

    @Override
    public int getWeight() {
        int weight = this.weight;
        for(Vehicle car : cars) {
            weight += car.getWeight();
        }
        return weight;
    }
}
As we can see in the getWeight method of CarCarrier, we have to calculate the weight of the car carrier as its weight plus the weight of the cars it carries. Thus the getWeight method of CarCarrier calls the getWeight method of each of the child Vehicles in the cars array. The Car class corresponds to the leaf, and the CarCarrier class corresponds to the composite.

foreach o in children, o.operation()

The above formula, describing how the composite's operation method should work, basically translates into "for each child, we'll call it 'o', in children, we have to call the operation method on o when the composite's operation method is called." This corresponds to how we called the getWeight method of each of the Vehicles being carried by the CarCarrier to get the total weight of the CarCarrier.</p>
    </code>
  </pre>
</figure>




<h3>Encapsulation</h3>
    <p>Encapsulation is:</p>
	<p>Binding the data with the code that manipulates it.</p>
	<p>It keeps the data and the code safe from external interference</p>
	<p>Black Box</p>
    <p>Looking at the example of a power steering mechanism of a car. Power steering of a car is a complex system, which internally have lots of components 
        tightly coupled together, 
        they work synchronously to turn the car in the desired direction. It even controls the power delivered by the engine to the steering wheel. But to the 
        external world there is only one interface is available and rest of the complexity is hidden. Moreover, the steering unit in itself is complete and independent. 
        It does not affect the functioning of any other mechanism.
        Similarly, same concept of encapsulation can be applied to code. Encapsulated code should have following characteristics:</p>
	<p>Everyone knows how to access it.</p>
	<p>Can be easily used regardless of implementation details.</p>
	<p>There shouldn’t any side effects of the code, to the rest of the application.</p>
    <p>The idea of encapsulation is to keep classes separated and prevent them from having tightly coupled with each other.
        A example of encapsulation is the class of java.util.Hashtable. User only knows that he can store data in the form of key/value pair in a Hashtable and that he can retrieve 
        that data in the various ways. But the actual implementation like, how and where this data is actually stored, is hidden from the user. User can simply use Hashtable 
        wherever he wants to store Key/Value pairs without bothering about its implementation.</p>


    <h3>Polymorphism</h3>
    <p>This post provides the theoretical explanation of polymorphism with real-life examples. For detailed explanation on this topic with java programs refer polymorphism 
        in java and runtime & compile time polymorphism.</p>
    <p>Polymorphism means to process objects differently based on their data type.
        In other words it means, one method with multiple implementation, for a certain class of action. And which implementation to be used is decided at runtime depending 
        upon the situation (i.e., data type of the object)
        This can be implemented by designing a generic interface, which provides generic methods for a certain class of action and there can be multiple classes, which 
        provides the implementation of these generic methods.</p>
    <p>Lets us look at same example of a car. A car have a gear transmission system. It has four front gears and one backward gear. When the engine is accelerated then 
        depending upon which gear is engaged different amount power and movement is delivered to the car. The action is same applying gear but based on the type of gear the action 
        behaves differently or you can say that it shows many forms (polymorphism means many forms)
        Polymorphism could be static and dynamic both. Method Overloading is static polymorphism while, Method overriding is dynamic polymorphism.
    </p>
    <p>Overloading in simple words means more than one method having the same method name that behaves differently based on the arguments passed while calling the method. 
        This called static because, which method to be invoked is decided at the time of compilation</p>
    <p>Overriding means a derived class is implementing a method of its super class. The call to overriden method is resolved at runtime, thus called runtime polymorphism</p>    
    
    
    
    <h3>Inheritance</h3>
    <p>This post provides the theoretical explanation of inheritance with real-life examples. For detailed explanation on this topic with java programs refer inheritance 
        with examples and types of inheritance in java.</p>
    <p>Inheritance is the mechanism by which an object acquires the some/all properties of another object.</p>
    <p>It supports the concept of hierarchical classification.</p>
    <p>For example: Car is a four wheeler vehicle so assume that we have a class FourWheeler and a sub class of it named Car. Here Car acquires the properties of a class 
        FourWheeler. Other classifications could be a jeep, tempo, van etc. FourWheeler defines a class of vehicles that have four wheels, and specific range of engine power, 
        load carrying capacity etc. Car (termed as a sub-class) acquires these properties from FourWheeler, and has some specific properties, which are different from other 
        classifications of FourWheeler, such as luxury, comfort, shape, size, usage etc.</p>
    <p>A car can have further classification such as an open car, small car, big car etc, which will acquire the properties from both Four Wheeler and Car, but will still 
        have some specific properties. This way the level of hierarchy can be extended to any level.</p>   
</div>




<?php include_once("foot.php")?>