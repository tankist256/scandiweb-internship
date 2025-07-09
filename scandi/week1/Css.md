# CSS
___
# What is CSS? 

CSS (Cascading Style Sheets) is the language that controls the visual presentation of your HTML documents. For your diploma work, you'll need CSS to:

1. Make your project visually appealing
2. Ensure proper readability and structure
3. Create responsive designs that work on different devices
4. Implement consistent styling across all pages
___
##  CSS Syntax

CSS consists of **rules** that define how [[html]] elements should be displayed. Each rule has the following structure:

```css
selector {
  property: value;
  /* more property-value pairs */
}
```

### Example:
```css
h1 {
  color: navy;
  font-size: 24px;
  margin-bottom: 20px;
}
```

___
## CSS Components

### 1. Selector
Identifies which HTML element(s) to style. There are several types:

**Basic Selectors:**
```css
/* Element selector */
p { /* styles */ }

/* Class selector */
.intro { /* styles */ }

/* ID selector */
#header { /* styles */ }

/* Universal selector */
* { /* styles */ }
```

**Combinators:**
```css
/* Descendant (space) */
div p { /* styles */ }

/* Child selector (>) */
div > p { /* styles */ }

/* Adjacent sibling (+) */
h1 + p { /* styles */ }

/* General sibling (~) */
h1 ~ p { /* styles */ }
```

### 2. Declaration Block
Enclosed in curly braces `{}`, contains one or more declarations.

### 3. Declarations
Each declaration consists of:
- A **property** (what to style)
- A **value** (how to style it)
- Separated by a colon `:`
- Ending with a semicolon `;`

```css
property: value;
```

### Example for multiple declarations:
```css
.box {
  width: 300px;
  height: 200px;
  background-color: #f0f0f0;
  border: 1px solid #ccc;
}
```

___
## CSS Variations

### 1. Multiple Selectors
```css
h1, h2, h3 {
  font-family: 'Arial', sans-serif;
  color: #333;
}
```

### 2. Nested Rules (in preprocessors like SASS)
```scss
.nav {
  ul {
    margin: 0;
    padding: 0;
  }
  li { display: inline-block; }
}
```

### 3. CSS Variables (Custom Properties)
```css
:root {
  --main-color: #3498db;
  --secondary-color: #2980b9;
}

.element {
  color: var(--main-color);
  background-color: var(--secondary-color);
}
```

### 4. Media Queries
```css
@media screen and (max-width: 600px) {
  .container {
    flex-direction: column;
  }
}
```

## Important CSS Rules

1. **Case Sensitivity**: CSS is generally case-insensitive except for:
   - Attribute values in selectors
   - Custom property names
   - Font names

2. **Whitespace**: Insignificant except that it separates values

3. **Comments**:
```css
/* This is a single-line comment */

/*
  This is a
  multi-line comment
*/
```

4. **Shorthand Properties**:
```css
/* Instead of: */
.box {
  margin-top: 10px;
  margin-right: 20px;
  margin-bottom: 10px;
  margin-left: 20px;
}

/* Use shorthand: */
.box {
  margin: 10px 20px;
}
```

___

## Common CSS Property Categories

1. **Layout Properties**:
```css
display, position, float, clear, 
flex-direction, grid-template-columns
```

2. **Box Model Properties**:
```css
width, height, margin, padding, 
border, box-sizing
```

3. **Typography Properties**:
```css
font-family, font-size, font-weight, 
line-height, text-align, color
```

4. **Visual Properties**:
```css
background, box-shadow, opacity, 
visibility, transform
```

___
## CSS Concepts Need To Know

### 1. Document Structure
```css
/* Reset default browser styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Base font settings */
body {
  font-family: 'Arial', sans-serif;
  line-height: 1.6;
  color: #333;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}
```

### 2. Typography (Crucial for Academic Work)
```css
h1, h2, h3 {
  font-weight: 600;
  margin-bottom: 1rem;
  color: #2c3e50;
}

h1 { font-size: 2.2rem; }
h2 { font-size: 1.8rem; }
h3 { font-size: 1.4rem; }

p {
  margin-bottom: 1.2rem;
  text-align: justify;
}

/* Academic blockquotes */
blockquote {
  border-left: 4px solid #3498db;
  padding-left: 15px;
  margin: 20px 0;
  font-style: italic;
  color: #555;
}
```

### 3. Tables (For Research Data)
```css
table {
  width: 100%;
  border-collapse: collapse;
  margin: 25px 0;
}

th, td {
  padding: 12px 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f8f9fa;
  font-weight: bold;
}

tr:hover {
  background-color: #f5f5f5;
}
```

### 4. Figures and Images
```css
.figure {
  margin: 30px auto;
  text-align: center;
}

.figure img {
  max-width: 100%;
  height: auto;
  border: 1px solid #eee;
}

.caption {
  font-size: 0.9rem;
  color: #666;
  margin-top: 10px;
}
```

### 5. Citations and References
```css
.references {
  margin-top: 50px;
}

.reference-item {
  margin-bottom: 15px;
  padding-left: 30px;
  text-indent: -30px;
}

.citation {
  font-style: italic;
  color: #7f8c8d;
}
```

### 6. Responsive Design (Essential!)
```css
@media screen and (max-width: 768px) {
  body {
    padding: 15px;
  }
  
  h1 { font-size: 1.8rem; }
  h2 { font-size: 1.5rem; }
  
  table {
    display: block;
    overflow-x: auto;
  }
}
```

### 7. Print Styles (For Physical Submission)
```css
@media print {
  body {
    font-size: 12pt;
    line-height: 1.3;
    color: #000;
  }
  
  a::after {
    content: " (" attr(href) ")";
    font-size: 0.8em;
    font-weight: normal;
  }
  
  .no-print {
    display: none;
  }
}
```

___
