# **Markdown Syntax Guide**

Markdown is a lightweight markup language that you can use to format text. It is widely used in documentation, README files, and static site generators. Below is a comprehensive guide from basic to advanced Markdown syntax.

## **1. Basic Syntax**

### **1.1 Headings**
Use `#` for headings, where `#` represents the highest level (H1), and `######` represents the lowest level (H6).
```markdown
# Heading 1
## Heading 2
### Heading 3
#### Heading 4
##### Heading 5
###### Heading 6
```
Headings help structure content and are commonly used in documentation and articles.

<span style="color:DodgerBlue; font-weight: 600;"> Output:: </span>

![Heading](/docs/images/markdown/md_heading.png)

---

### **1.2 Bold, Italic, and Strikethrough**
You can emphasize text using bold, italic, or strikethrough formatting.
```markdown
**Bold** or __Bold__  # Used for strong emphasis
*Italic* or _Italic_  # Used for slight emphasis
~~Strikethrough~~  # Used for indicating removed content
```
This helps highlight important text or corrections.

<span style="color:DodgerBlue; font-weight: 600;"> Output:: </span>

![Fonts](/docs/images/markdown/md_font.png)

----
### **1.3 Lists**
Lists are useful for organizing content.
#### **Unordered List**
```markdown
- Item 1
- Item 2
  - Subitem 2.1
  - Subitem 2.2
* Item 3
```
This creates a bullet-point list.

<span style="color:DodgerBlue; font-weight: 600;"> Output:: </span>

![Fonts](/docs/images/markdown/md_unorder.png)

---

#### **Ordered List**
```markdown
1. First item
2. Second item
   1. Subitem 2.1
   2. Subitem 2.2
3. Third item
```
This creates a numbered list, often used for steps or ranking items.

Output::
![Order](/docs/images/markdown/md_order.png)

### **1.4 Links and Images**
#### **Links**
```markdown
[Link text](https://example.com)
```
Displays as: [Visit Example](https://example.com)

#### **Images**
```markdown
![Alt text](https://example.com/image.jpg)
```
This embeds an image in Markdown.

---
<larecipe-progress type="success" :value="100"></larecipe-progress>

## **2. Intermediate Syntax**

### **2.1 Blockquotes**
Blockquotes are used to highlight quoted text.
```markdown
> This is a blockquote.
>> Nested blockquote.
```
<span style="color:DodgerBlue; font-weight: 600;"> Output:: </span>

![Fonts](/docs/images/markdown/md_blockquote.png)

### **2.2 Code Blocks**
#### **Inline Code**
Use backticks to highlight inline code within text.
```markdown
Use `code` within a sentence.
```
Example: Use `code` within a sentence.

### **Block Code Explanation**

Block code is used to display **multiline code snippets** in a readable format.

For multiline code snippets, use triple backticks. (```)

---
#### Example 1:

![Python](/docs/images/markdown/md_python.png)

<span style="color:DodgerBlue; font-weight: 600;"> Output:: </span>

```python
print("Hello, World!")
```
---
#### Example 2:

![html](/docs/images/markdown/md_html.png)

<span style="color:DodgerBlue; font-weight: 600;"> Output:: </span>


```html
<p> Aaran Learning Management System </p>
```

Block code is useful for displaying programming examples. You can use whatever language you want.

---

### **2.3 Horizontal Line (Divider)**
Dividers help separate sections.
```markdown
---
***
___
```

<span style="color:DodgerBlue; font-weight: 600;"> Output:: </span>

---
***
___

### **2.4 Tables**
Tables organize structured data in Markdown.
```markdown
| Column 1 | Column 2 | Column 3 |
|----------|----------|----------|
| Row 1    | Data     | Value    |
| Row 2    | Data     | Value    |
```
<span style="color:DodgerBlue; font-weight: 600;"> Output:: </span>


| Column 1 | Column 2 | Column 3 |
|----------|----------|----------|
| Row 1    | Data     | Value    |
| Row 2    | Data     | Value    |
This formats tabular data neatly.

---
<larecipe-progress type="success" :value="100"></larecipe-progress>


## **3. Advanced Syntax**

### **3.1 Task Lists**
Useful for tracking tasks in Markdown.
```markdown
- [x] Task 1 (Completed)
- [ ] Task 2 (Pending)
- [ ] Task 3 (Pending)
```
<span style="color:DodgerBlue; font-weight: 600;"> Output:: </span>

![Task](/docs/images/markdown/md_task.png)

---

### **3.2 Footnotes**
Add footnotes for additional references.
```markdown
Here is a sentence with a footnote.[^1]

[^1]: This is the footnote content.
```
<span style="color:DodgerBlue; font-weight: 600;"> Output:: </span>

![Foot](/docs/images/markdown/md_foot.png)

---

### **3.3 Definition Lists**
Markdown can also format definitions.
```markdown
Term 1
: Definition 1

Term 2
: Definition 2
```

**Term 1**  
Definition 1

**Term 2**  
Definition 2

---

### **3.4 Emoji**
Add emojis using their shortcodes.
```markdown
🚀 :rocket:
🎉 :tada:
```
🚀 :rocket:  
🎉 :tada:

We can add whatever Emojis we want.

---

### **3.5 Highlighting Text**
Some Markdown parsers support text highlighting.
```markdown
==Highlighted text==
```
<span style="color:DodgerBlue; font-weight: 600;"> Output:: </span>

![structure](/docs/images/project/structure.png)

### **3.6 Escaping Characters**
Use `\` to prevent Markdown from interpreting special characters.
```markdown
\*Not Italic\*
\# Not a heading
```
\*Not Italic\*  
\# Not a heading

---

