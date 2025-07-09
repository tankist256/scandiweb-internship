# JavaScript Basics: Syntax Fundamentals

JavaScript is a **versatile programming language** used for ***web*** development.
___

## 1. Variables and Constants

```javascript
// Variable declaration (older, function-scoped)
var name = "John";
// Block-scoped variable (modern)
let age = 30;
// Constant (cannot be reassigned)
const PI = 3.14159;
```
***
## 2. Data Types

### Primitive Types:
```javascript
// String
let message = "Hello World";

// Number
let price = 9.99;

// Boolean
let isActive = true;

// Null (intentional empty value)
let empty = null;

// Undefined (uninitialized variable)
let notDefined;

// Symbol (ES6, unique identifier)
const id = Symbol("id");
```

### Non-Primitive Types:
```javascript
// Object
let person = {
  name: "Alice",
  age: 25
};

// Array
let colors = ["red", "green", "blue"];

// Function
function greet() {
  console.log("Hello!");
}
```
___
## 3. Operators

```javascript
// Arithmetic
let sum = 5 + 3;  // 8
let product = 2 * 4;  // 8

// Comparison
10 > 5;  // true
"5" == 5;  // true (loose equality)
"5" === 5; // false (strict equality)

// Logical
true && false;  // false (AND)
true || false;  // true (OR)
!true;  // false (NOT)

// Ternary
let status = (age >= 18) ? "Adult" : "Minor";
```
___

## 4. Control Structures

### Conditional Statements:
```javascript
// If-else
if (score >= 90) {
  grade = "A";
} else if (score >= 80) {
  grade = "B";
} else {
  grade = "C";
}

// Switch
switch (day) {
  case 1:
    console.log("Monday");
    break;
  case 2:
    console.log("Tuesday");
    break;
  default:
    console.log("Weekend");
}
```

### Loops:
```javascript
// For loop
for (let i = 0; i < 5; i++) {
  console.log(i);
}

// While loop
let count = 0;
while (count < 5) {
  console.log(count);
  count++;
}

// Do-while
let x = 0;
do {
  console.log(x);
  x++;
} while (x < 5);

// For-of (arrays)
for (let color of colors) {
  console.log(color);
}

// For-in (object properties)
for (let key in person) {
  console.log(key, person[key]);
}
```
***

## 5. Functions

```javascript
// Function declaration
function add(a, b) {
  return a + b;
}

// Function expression
const multiply = function(a, b) {
  return a * b;
};

// Arrow function (ES6)
const divide = (a, b) => a / b;

// Default parameters
function greet(name = "Guest") {
  console.log(`Hello, ${name}!`);
}

// Rest parameters
function sum(...numbers) {
  return numbers.reduce((total, num) => total + num, 0);
}
```
___

## 6. Objects and Arrays

### Objects:
```javascript
// Object literal
let book = {
  title: "JavaScript Guide",
  author: "John Doe",
  year: 2023,
  isAvailable: true,
  checkAvailability: function() {
    return this.isAvailable;
  }
};

// Accessing properties
book.title;  // dot notation
book["author"];  // bracket notation

// Adding properties
book.pages = 300;

// Object destructuring
const { title, author } = book;
```
### Arrays:
```javascript
// Array methods
let fruits = ["apple", "banana"];

fruits.push("orange");  // add to end
fruits.pop();  // remove from end
fruits.unshift("kiwi");  // add to beginning
fruits.shift();  // remove from beginning

// Array destructuring
const [first, second] = fruits;

// Common array operations
fruits.map(fruit => fruit.toUpperCase());
fruits.filter(fruit => fruit.length > 5);
fruits.reduce((total, fruit) => total + fruit.length, 0);
```


## 7. Classes (ES6)

```javascript
class Person {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }

  greet() {
    console.log(`Hello, my name is ${this.name}`);
  }

  static compareAges(person1, person2) {
    return person1.age - person2.age;
  }
}

// Inheritance
class Student extends Person {
  constructor(name, age, grade) {
    super(name, age);
    this.grade = grade;
  }

  study() {
    console.log(`${this.name} is studying`);
  }
}
```


## 8. Error Handling

```javascript
try {
  // Code that might throw an error
  let result = riskyOperation();
} catch (error) {
  // Handle the error
  console.error("An error occurred:", error.message);
} finally {
  // Code that runs regardless of error
  console.log("Operation attempted");
}

// Throwing custom errors
throw new Error("Something went wrong");
```

## 9. Modules (ES6)

```javascript
// math.js (exporting)
export const PI = 3.14159;
export function square(x) { return x * x; }
export default function add(a, b) { return a + b; }

// app.js (importing)
import add, { PI, square } from './math.js';
```
___
## 10. Asynchronous JavaScript

### Callbacks:
```javascript
function fetchData(callback) {
  setTimeout(() => {
    callback("Data received");
  }, 1000);
}

fetchData(data => console.log(data));
```

### Promises:
```javascript
function fetchData() {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve("Data received");
      // or reject("Error occurred");
    }, 1000);
  });
}

fetchData()
  .then(data => console.log(data))
  .catch(error => console.error(error));
```

### Async/Await:
```javascript
async function getData() {
  try {
    const data = await fetchData();
    console.log(data);
  } catch (error) {
    console.error(error);
  }
}

getData();
```