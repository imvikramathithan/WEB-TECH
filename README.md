
# **WEB-TECH Projects**

This repository contains various web technologies projects demonstrating frontend and backend programming concepts using **HTML**, **CSS**, **JavaScript**, **PHP**, **Node.js**, **jQuery**, and **MySQL**.

---

## **Table of Contents**

- [Project Structure](#project-structure)  
- [Installation and Setup](#installation-and-setup)  
- [How to Run Each Program](#how-to-run-each-program)  
- [Technologies Used](#technologies-used)  
- [Screenshots](#screenshots)  
- [License](#license)  
- [Contact](#contact)

---

## **Project Structure**

```bash
WEB-TECH/
│
├── employee_crud/          # PHP CRUD operations on Employee records
├── EmployeeTable/          # Employee details displayed in an HTML table
├── jQuery/                 # jQuery programs
├── menuWebpage/            # HTML + CSS menu implementation
├── node/                   # Node.js-based website with separate pages
├── personalWebsite/        # HTML personal website with different pages
├── personalWebsiteCss/     # Personal website with CSS styling
│
├── CalculateGrade.html     # Student Grade Calculator (JavaScript)
├── DigitalClock.html       # Live Digital Clock (JavaScript)
├── SlideShow.html          # Picture Slideshow (JavaScript)
```

---

## **Installation and Setup**

### 1. **PHP and MySQL Setup (for Employee CRUD)**

1. Install **XAMPP** or **WAMP** to run the Apache server and MySQL database.
2. Place the `employee_crud` and `EmployeeTable` folders in the `htdocs` folder of your server.
3. Create a MySQL database named `company` and run the following SQL command:
   ```sql
   CREATE TABLE employee (
       emp_no INT PRIMARY KEY,
       emp_name VARCHAR(50),
       date_of_join DATE,
       salary DECIMAL(10, 2),
       designation VARCHAR(50)
   );
   ```
4. Update `db_config.php` in the `employee_crud` folder with your MySQL credentials.

### 2. **Node.js Setup**

1. Navigate to the `node/` folder.
2. Install the HTTP server by running:
   ```bash
   npm install http-server
   ```
3. Start the server:
   ```bash
   npx http-server
   ```
4. Open `http://localhost:8080` in your browser to view the Node-based website.

---

## **How to Run Each Program**

### **1. Employee CRUD Application (PHP + MySQL)**  
- Open the browser and navigate to:
  ```
  http://localhost/employee_crud/index.php
  ```
- Add, update, or delete employee records using the interface.

### **2. Employee Table Display (PHP + HTML)**  
- Navigate to:
  ```
  http://localhost/EmployeeTable/index.php
  ```
- View the list of employees in an HTML table.

### **3. JavaScript Programs**

- **Student Grade Calculator**:  
  Open `CalculateGrade.html` in a browser and enter the marks to see the grade.

- **Digital Clock**:  
  Open `DigitalClock.html` to display a live clock in the browser.

- **Picture Slideshow**:  
  Open `SlideShow.html` to view an interactive slideshow.

### **4. jQuery Programs**

- Implemented jQuery functionalities such as background color toggle and event handling.
- Navigate to the `jQuery/` folder and open each HTML file to test the specific jQuery programs.

### **5. HTML + CSS Menu Webpage**  
- Open the `menuWebpage/index.html` to see a responsive menu implemented using HTML and CSS.

### **6. Personal Website (HTML and CSS)**  
- Open `personalWebsite/index.html` or `personalWebsiteCss/index.html` to view your personal website.

---

## **Technologies Used**

- **Frontend**: HTML, CSS, JavaScript, jQuery  
- **Backend**: PHP, Node.js  
- **Database**: MySQL  
- **Server**: Apache (XAMPP / WAMP)  

---

## **Screenshots**

1. **Employee Management System**  
   ![image](https://github.com/user-attachments/assets/67d18841-4162-458b-8cfb-0fabe2182329)

2. **JavaScript Clock**  
   ![image](https://github.com/user-attachments/assets/26a11773-60ba-43af-893a-3963eb7f212e)

3. **Menu Webpage**  
   ![image](https://github.com/user-attachments/assets/5f0fc775-1019-4c98-add6-8eca90ccab72)
---

## **License**

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## **Contact**

Feel free to reach out if you have any questions or suggestions:  
📧 **imvikramathithan@gmail.com**

---
