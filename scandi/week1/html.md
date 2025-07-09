# HTML - HyperText Markup Language

## Basics
```html
<html>
<head>
  <title>My Page:n1GeRia </title>
</head>
<body>
  <h1>Welcome to my dysfunctional family of tags </h1>
</body>
</html>
```

### Core Elements (The "Avengers" of HTML)
| Tag           | Purpose           |
| ------------- | ----------------- |
| `<div>`       | Generic container |
| `<p>`         | Paragraph text    |
| `<a href>`    | Hyperlink         |
| `<img>`       | Embed image       |
| `<ul>`/`<li>` | Unordered list    |

---
## Common Pitfalls
### 1. The "Div-itis" Epidemic
```html
<div id="wrapper">
  <div class="container">
    <div> <!-- Help, I’m lost in the div-erse! -->
```

**Cure:** Use semantic tags like `<header>`, `<article>`, `<nav>`.

### 2. Broken Images
```html
<img src="my_cat.jpg" alt="A void where my cat should be">
```
**Alt Text Reality:** "Error 404: Cat not found."

### 3. The Table Tag’s Midlife Crisis
```html
<table> <!-- "I used to rule the web... now I’m just for emails." -->
  <tr>
    <td>Sad</td>
    <td>But</td>
    <td>True</td>
  </tr>
</table>
```

---

## HTML vs. Real Life
| HTML Concept       | Real-Life Equivalent                  |
| ------------------ | ------------------------------------- |
| `<meta>` tags      | Your LinkedIn bio (ignored by humans) |
| `<br>`             | Awkward line break in texts           |
| `<!-- comment -->` | Whispering behind someone’s back      |
| `404 error`        | Forgetting why you opened the fridge  |
## Pro Tips
1. **Semantic HTML**:  
   `<footer>` is like a podcast outro—don’t skip it!
2. **Accessibility**:  
   `alt="text"` is the HTML version of **describing memes to your grandma**.
3. **Validation**:
   Use [W3C Validator](https://validator.w3.org/) to avoid `<head>`aches.

---

- Link to [[CSS]] for styling your HTML trauma.
- Use `#webdev` or `#html` tags to track progress.
- Template for quick HTML snippets:
  ```html
  <!DOCTYPE html>
  <html>
    <head><title>{{Title}}</title></head>
    <body>{{Content}}</body>
  </html>
  ```

> [!joke] Final Wisdom
> "Writing HTML without CSS is like wearing socks with sandals—**functional**, but deeply unsettling."
