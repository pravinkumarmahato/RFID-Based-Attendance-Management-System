# RFID Based Attendance Management System  

## 📌 Overview  
The **RFID Based Attendance Management System** is an automated solution for recording and managing student attendance using **Radio Frequency Identification (RFID)** technology.  
Each student is provided with an RFID card that serves as a unique identification key. When the card is placed near an RFID reader, the system validates the card and marks attendance automatically in the database.  

This eliminates the drawbacks of manual attendance systems such as time consumption, errors, and risk of lost attendance records.  

---

## 🎯 Problem Statement  
Traditional attendance systems are prone to:  
- Manual entry errors and time wastage.  
- Lost or misplaced attendance sheets.  
- Difficulty in generating statistical reports.  

Our system resolves these issues by providing a secure, fast, and automated attendance tracking mechanism.  

---

## ⚙️ Working Principle  
1. Student swipes their **RFID card** near the **RFID reader**.  
2. The **NodeMCU microcontroller** receives the card’s unique ID.  
3. The microcontroller checks the ID against the **database**.  
4. If valid:  
   - Attendance is recorded in the database.  
   - LCD displays: *“Your attendance is marked.”*  
5. If invalid:  
   - LCD displays: *“You are not registered, please contact admin.”*  
6. Attendance records can be accessed by **Admin, Faculty, and Students** via the **web portal**.  

---

## 🖥️ System Components  
- **Hardware:**  
  - NodeMCU (ESP8266)  
  - RFID Reader  
  - RFID Tags / Cards  
  - LCD Display  
  - Router (for internet connectivity)  

- **Software:**  
  - Embedded C (for NodeMCU programming)  
  - HTML, CSS, Bootstrap (for frontend website)  
  - PHP, MySQL (for backend and database management)  

---

## 🚀 Technology Stack  
- **Frontend:** HTML, CSS, Bootstrap  
- **Backend:** PHP  
- **Database:** MySQL  
- **Embedded Programming:** Embedded C (NodeMCU)  

---

## 🌐 Features  
- Automated attendance marking via RFID.  
- Secure login for Admin, Faculty, and Students.  
- Real-time attendance records.  
- LCD feedback for successful/unsuccessful scans.  
- Database-driven system for easy report generation.  

---

## 📷 System Architecture  

**Hardware + Software Flow:**  
![RFID BASED ATTENDENCE MANAGEMENT SYSTEM](https://github.com/user-attachments/assets/2e33ad69-3c02-44a4-9fbd-1f1d1807ee31)

---

## 📊 Future Enhancements  
- Integration with mobile app for real-time attendance tracking.  
- Advanced analytics for student performance monitoring.  
- Cloud-based storage for large-scale institutions.  

