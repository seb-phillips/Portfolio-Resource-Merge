<?php include_once("head.php");?>
<title>Javascript Notes</title>
<body>

<?php require_once("nav.php");?>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h1>Javascript</h1><br>
  <h3>Syntax Brief View</h3>
  <p><i>Var</i> is global usage so use <i>let</i> instead. <i>Const</i> is constant and therefore not able to be manipulated or changed.</p><br>
  <p><b>Data Types</b><br>String, Number, Boolean, Null, Undefined, Symbol. Type Of can be used to get type ie console.log(typeof name)</p><br>
  <p><b>Concatination Methods</b><br>console.log('My name is ' + name);<br>
  <i>Can use Template String</i><br>
  console.log(`My name is ${name}`)</p><br>
  <p><b>String Properties & Methods</b>String s = 'text';<br>Can use: s.length, s.toUpperCase(), s.substring(startindex: 0, endindex: 2).<br>
  Can split string into array: s.split(''), = ["T", "E", "X", "T"]. Includes spaces, as array element.</p><br>
  <p><b>Arrays</b><br>
  Constructor: const numbers = new Array(1,2,3,4,5); <br>OR<br>const fruits = ['apples', 'oranges'];<br>
  Can have <i>multiple data types</i> within an array.<br>Append: fruits[2] = 'grapes'; If unknown length, can push: fruits.push('grapes');<br>
  To add to start: fruits.unshift('grapes');<br>
  To remove last element: fruits.pop();<br>
  To test if something is an array -> console.log(Array.isArray(fruits);<br>
  To get specific element/index for item: fruits.indexOf('apples')</p>
  <p><b>Object Literals -</b><i> a literal is a notation for representing a fixed value in source code</i><br>
  <img src="img/jsol.png" alt="Object Literals JS Example"></p><br>
  <p><b>JSON -</b><i>Sending Data to Server</i><br>
  May want to take Object Literal and send to server in JSON format.<br>
  const personJSON = JSON.stringify(person);<br>
  console.log(personJSON);</p><br>
  <p><b>For Loop</b><br>
  for(let i = 0; i < 10; i++) {<br>  console.log(i);<br>}</p><br>
  <p><b>While Loop</b><br>
  let i = 0;<br>while(i < 10) {<br> console.log(`While Loop Number: ${i}`);<br> i++<br>}</p><br>
  <p><b>Loop Through Arrays</b><br>Can use i < objectLateral.lenght to loop through and output objectLateral[i];<br>
  Can also do:<br>
  for(let todo of todos) {<br>console.log(todo.text);<br>}</p><br>
  <p><b>High Order Array Functions - </b><i>A function that accepts and/or returns another function is called a higher-order function.</i><br>
  <i>forEach</i> (just loops through), <i>map</i> (allows us to create a new array from an existing array), <i>filter</i> (allow us to build new array based on condition)
  <img src="img/forEachJS.png" alt="For Each Array Example JS"><br><img src="img/mapJS.png" alt="Map Array JS"><br><img src="img/filterJS.png" alt="Filter Array JS"></p><br>
  <p><b>Conditionals</b><br>
  = Assigns, == Checks if Value matches, === Checks if Value & Data Type matches. If statement...<br>
  <i>Ternary Operator:</i><br>
  <img src="img/ternOp.png" alt="Ternary Operator in JS"></p><br>
  <p><b>Switch Statement</b><br><img src="img/switchJS.png" alt="Switch Statement in JS"></p><br>
  <p><b>Functions</b><br><img src="img/funcJS1.png" alt="Basic JS Function & Call"><br>
  <i>Arrow Function</i><br><img src="img/funcArr1.png" alt="Arrow Function in JS"></p><br>
  <p><b>Object Orientated JS</b><br><i>Constructor Function, Instantiate Object & Adding Methods to Constructor</i><br>
  <img src="img/oojs.png" alt="Object Orientated JS"><br>Might not always need the methods, so can add to the objects prototype:<br>
  <img src="img/protoJS.png" alt="Prototypes JS"><br>We can also create a <b>class</b>with <b>methods</b>, but this is just Syntax Sugar...<br>
  <img src="img/classMethodsJS.png" alt="Class Method in JS"></p>
  <h3>DOM</h3>
  <p><b>Selectors</b><br>
  Window Object is the parent object of the browser<br><br>
  <i>Single Element Selectors:</i><br>
  Example: document.getELementById('my-form');<br>
  Example: document.querySelector('h1'); //Will only select 1st h1 tag as single selector<br>
  <br><i>Multiple Element Selectors:</i><br>
  document.querySelectorAll('.item');<br>
  Older but works: document.getElementsByClassName('item');<br><br>
  Example:<br><img src="img/domSelectors.png" alt="DOM Selectors for Dynamic Webpages"><br>
  Events Example:<br><img src="img/eventsJS.png" alt="Events Listener JS"></p><br>
  <h3>Form JS Example</h3>
  <figure>
    <pre><code>
// Put DOM elements into variables
const myForm = document.querySelector('#my-form');
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email');
const msg = document.querySelector('.msg');
const userList = document.querySelector('#users');

// Listen for form submit
myForm.addEventListener('submit', onSubmit);

function onSubmit(e) {
  e.preventDefault();
  
  if(nameInput.value === '' || emailInput.value === '') {
    // alert('Please enter all fields');
    msg.classList.add('error');
    msg.innerHTML = 'Please enter all fields';

    // Remove error after 3 seconds
    setTimeout(() => msg.remove(), 3000);
  } else {
    // Create new list item with user
    const li = document.createElement('li');

    // Add text node with input values
    li.appendChild(document.createTextNode(`${nameInput.value}: ${emailInput.value}`));

    // Add HTML
    // li.innerHTML = `<strong>${nameInput.value}</strong>e: ${emailInput.value}`;

    // Append to ul
    userList.appendChild(li);

    // Clear fields
    nameInput.value = '';
    emailInput.value = '';
  }
}</code></pre>
  </figure>
  <a href="https://embed.plnkr.co/plunk/8ujYdL1BxZftGoS4Cf14">Link</a>
</div>
<?php include_once("foot.php")?>