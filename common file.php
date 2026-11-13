       NINAMAGIRISH
       
       
       🧨🧨🧨🧨🧨🎆🎆🎆🎆✅✅
       
       # Control Room System – Workflow Summary

## 1. Dashboard




        $userAssigendUnits = $this->db->query("
              SELECT table1.cs_id, tbl_customer_deputation.dp_id , tbl_customer_deputation.dp_unit_name , tbl_customer.cs_invoice_name
                FROM (
                            SELECT a.cs_id ,  REPLACE(GROUP_CONCAT(dp_id), '|', ',')  assigend_unit 
                            FROM `tbl_customer_dpoassign` a 
                            WHERE `u_id` = $uid 
                            GROUP BY `cs_id`
                     ) table1
                     
                     change in query
                        JOIN tbl_customer_deputation ON FIND_IN_SET(tbl_customer_deputation.dp_id, table1.assigend_unit)
                        LEFT JOIN tbl_customer on tbl_customer.cs_id = table1.cs_id 
                        LEFT join branch_unit_detail on branch_unit_detail.dp_id =tbl_customer_deputation.dp_id 
                        WHERE branch_unit_detail.unit_end_date IS NULL
                        GROUP BY table1.cs_id , tbl_customer_deputation.dp_id
                        ORDER BY tbl_customer.cs_invoice_name ASC")->result_array();


1234

After successful login, users will be redirected to the dashboard, which will display the following information:

- **Today's Attendance and Working Hours:** View daily attendance status and working hours.
- **Client Feedback Call Reminders:** View reminders for scheduled customer feedback calls.
- **Customer Call List:** Access the list of customer calls scheduled for the day.
- **Newly Registered Complaints:** View recently registered complaints.
- **Complaints Resolved:** View complaints resolved by the logged-in user.
- **Assigned Customers and Units:** View the list of customers and units assigned to the user.

## 2. Customer Management – Assigned Customers

Users can view and manage customers assigned to them, subject to their access permissions.

### 2.1 Customer Information
- View customer details and DPO (Designated Point of Contact) information.
- Assign or reassign customers to authorized users.
- View customer-related information and assignment details.

### 2.2 Designation-Wise Execution Details
- View designation-wise workforce requirements and execution details.
- Monitor headcount, required skills, age criteria, duty hours, and working hours.

### 2.3 Customer Unit and Sub-Unit Management
- View unit and sub-unit names, addresses, and headcount details.
- Add new units under existing customers.
- Manage unit-related information and assignments.

### 2.4 Document Management
Upload, view, and manage the following customer-related documents:

- GST Certificate
- PAN Card
- Work Order
- Approved Quotation
- Form V
- Agreement

## 3. Unassigned Customer Management

This module enables authorized users to manage customer units that have not yet been assigned to any user.

- View unassigned customer units.
- Access unit details, locations, and headcount information.
- Assign unallocated units to eligible users.
- Manage assignments according to predefined authorization rules.
- Provide access to administrators and Level 1 users based on their assigned permissions.

## 4. Complaint Management

This module facilitates the registration, assignment, monitoring, and resolution of customer-related and employee-related complaints.

### 4.1 Complaint Registration
- Register customer-related and employee-related complaints.
- Upload supporting documents and attachments.
- Record complaint details and relevant information.

### 4.2 Complaint Assignment
- Assign complaints to responsible users.
- Assign authorized monitoring personnel for supervision and follow-up.

### 4.3 Complaint Tracking and Resolution
- View complaints created by or assigned to the logged-in user.
- Track complaint status, priority, remarks, and resolution progress.
- View resolved complaints and maintain resolution history.
- Monitor pending complaints and follow-up activities.

## 5. Monthly Client Call / Feedback Management

This module enables users to conduct periodic client feedback calls and maintain customer interaction records.

- View assigned customers scheduled for periodic feedback calls.
- Record call status, customer feedback, service quality, and remarks.
- Document customer concerns and required follow-up actions.
- Schedule the next call date.
- Receive reminders for upcoming and pending calls.
- Maintain a complete history of customer interactions and feedback.

## 6. PF / ESIC Management

This module facilitates the registration, assignment, tracking, and resolution of Provident Fund (PF) and Employees' State Insurance Corporation (ESIC) cases.

### 6.1 Employee Search
Authorized users can search for employees using the following details, subject to applicable access permissions:

- Employee Registration Number
- Employee Code
- Mobile Number
- Aadhaar Number

### 6.2 Case Registration
- Register new PF / ESIC cases.
- Record the case registration date, case type, description, and remarks.
- Upload relevant supporting documents.

### 6.3 Case Tracking and Resolution
- Track case status and progress.
- Assign cases to responsible users.
- Monitor pending actions and follow-up activities.
- Record resolution details and maintain case history.

## 7. Common System Features

The following features will be available across the relevant modules:

- **Role-Based Access Control:** Restrict system access and operations according to user roles and permissions.
- **Search and Filters:** Search records and filter information based on relevant criteria.
- **Status Tracking:** Monitor the current status and progress of activities.
- **Notifications and Reminders:** Notify users about pending tasks, upcoming calls, and required follow-up actions.
- **Reports



COSMOS - Marketing
--------------------
1. Dashboard
- statistical data for in process leads, closed lost leads, tenders, in process prospects, prospects won,hold & lost and closed units.
- shows today's calls for prospect and leads with call status
- list of prospect and leads which are not follow-up in last 7 days along with assigned person for prospect or leads and last follow-up details.
- convert to customer listing
- weekly planned meeting list
- list of placement DPO
- list of agreement renewal list
- labour licnence and agreement list
- completed DPO list
- list of all DPO
- list of pending details for DPO
- graphical bar chart which shows generated leads,pending calls,Prospect
Generated,Meetings Arranged, Signed contracts, Calls done by default for current date and the date range can be changed to see all these details for specfic time period.

2. Marketing
	2.1 Tender
		- list of tenders details with advance data filter functionality
		- add tender,edit tender, delete tender
	
	2.2 Search Busineess
		- provides data filter functionality to get list of businesses.
		
	2.3 Leads
		- list of leads details including meetings and call details with advance data filter functionality
		- add lead,edit lead, delete lead
		- Bulk assign - it helps to assign multiple leads to a person
		
	2.4 Quotation
		- 2.4.1 Lumpsum
			- list of all lumpsum quotations for different companies with advance filter. Each company can have single/multiple quotations.By viewing quotations for any company, it shows list of all quotations for that company and all the Quotations provides view quotation, send mail, edit quotation, add pre quotation info, convert to DPO, delete quotation and lost verticle.
			- Along with list of lumpsum quotations, customer quotations, Lost prospect quotation, deleted quotations all these different quotation listings are also available.
		
		- 2.4.2 Gardening
			- list of Gardening quotation with search filter
			- By viewing the quotation, it shows the list of gardening quotation for a company which allows to view quotation PDF, send the quotation, edit quotation and convert to DPO.
			
		- 2.4.3 Custom 
			- list all custom quotations for different companies with advance filter. Each company can have single/multiple quotations.By viewing quotations for any company, it shows list of all quotations for that company and all the Quotations provides view quotation, send mail, edit quotation, add pre quotation info, convert to DPO, delete quotation and lost verticle and take home functionality.
			- Along with list of lumpsum quotations, customer quotations, Lost prospect quotation, deleted quotations all these different quotation listings are also available.
			- Along with list of custom quotations, customer quotations, Lost prospect quotation, deleted quotations all these different quotation listings are also available.
			
		- 2.4.4 Placement
			- list of all placement quotations for different companies with advance filter. Each company can have single/multiple quotations.By viewing quotations for any company, it shows list of all quotations for that company and all the Quotations provides view quotation, send mail, edit quotation, convert to DPO, delete quotation, lost verticle and reject quotation. The list defines with different colors to indicate MRF Form Filled nd Send Quotation.
			- Along with list of placement quotations, customer quotations, Lost prospect quotation, deleted quotations all these different quotation listings are also available.
			
		- 2.4.5 Payroll
			- list of all payroll quotations for different companies with advance filter. Each company can have single/multiple quotations.By viewing quotations for any company, it shows list of all quotations for that company and all the Quotations provides view quotation and edit quotation.
			- Along with list of payroll quotations, customer quotations and deleted quotations all these different quotation listings are also available.
			
		- 2.4.6 Manpower Payroll
			- list of all manpower payroll quotations for different companies with advance filter.
			- Along with list of manpower payroll quotations, customer quotations, Lost prospect quotation and deleted quotations all these different quotation listings are also available.
		
	2.5 Meeting 
		- list of meetings details with advance data filter functionality
		- it provides functionality to add meetings, edit & view meetings, delete meetings and add security reports.

	2.6 Prospect
		- list of prospect details including meetings and call details with advance data filter functionality
		- edit & view prospect
		- Bulk assign - it helps to assign multiple prospects to a person 

3. New Business Development & Competitor Information / New Bus. & Com Info.
- list of New Business Development & Competitor Information details with view the details and assign a person to it and also with advance data filter functionality.
- Here it allows to add development and competitor details.

4. Customer
- list of the customer details with advance data filter functionality. It allows to upload GST/PAN documents and also to view quotations and fill cusomter visit report.

5. New Position Receive from operation
- list of job positions 

6. Export Leads
- allows to export all leads data

7. Export Prospect
- allows to export all prospect data

8. Export Customer
- allows to export all cusomter data

9. Export Close Customer
- allows to export all close cusomter data

10. Export Placement Customer
- allows to export all placement cusomter data

11. Close Customer
- list of all cusomters with advance data filter functionality.

12. Marketing User
- It displays details for marketing users like lead details, prospect details, cusomter details, quotation details, meeting details, tender details and customer visit details.

	- lead details - shows statistical data for in process,lost and lead calls.
	- prospect details - shows statistical data for in process,lost,hold,medium,high,low and prospect calls.
	- customer details - shows statistical data for customer, pending DPO, Reject DPO, Customer calls, Pending documents, completed documents.
	- quotation details - shows statistical data for lost and in process quotations.
	- meeting details - shows statistical data for planned,attended,pending and no.of site survey done.
	- tender details - shows statistical data for won,lost and in process tenders.
	- cusomter visit - shows statistical data for customer visits.
	
13. Company List
- It displays the list of company wise job required no of person,joined person and it also shows the list of selected persons.

14. Reports	
	- 14.1 Meeting
		- Allows to generate meetings report using different filters for meetings.
	- 14.2 Quotation
		- Allows to generate meetings report using different filters for quotations.

15. Pending Salary
- It generated the data for pending salary,hold salary and unregistered salary using different filter optiona and it also allows to export those data in excel format.

16. Designation
- It displays the list of designation with search functionality.
- add,edit,delete designation
			




======================================================================================================
# COSMOS – Operations Module Overview

## 1. Dashboard

Provides a consolidated overview of customer and unit statistics, DPOs, manpower, employee joining and exits, contract renewals, daily attendance, client feedback, complaints, assigned customers, expenses, and pending candidate documents.

## 2. Customer Management

Manage customer records, upload GST/PAN documents, view quotations, and maintain customer visit reports.

## 3. Unassigned Customer Management

View unassigned customers and their DPO details, update assignments, and edit customer information.

## 4. Closed Customer Management

View and filter closed customer records.

## 5. Candidate Management

Search candidates, send bulk messages, manage provisional and registered candidates, convert candidates to the next stage, and export registration reports.

## 6. Payroll Management

Generate and export wage registers, bank upload reports, wage slips, and pending, held, or unregistered salary reports in supported formats.

## 7. Compliance Reports

Generate filtered PT reports, annual salary reports, and Form 2 reports in supported formats.

## 8. PF Reports

Generate PF statements, challans, and summaries with filtering and export options.

## 9. ESIC Reports

Generate ESIC statements, challans, and summaries with filtering and export options.

## 10. Statutory Registration

Generate statutory registers and forms, including wage, employment, overtime, bonus, advance, fine, muster roll, and other prescribed reports, with relevant filtering and PDF/Excel export options.

## 11. PT Reports

Generate professional tax reports using multiple filters.

## 12. Operations Management

View and filter DPO details and selected candidate records.

## 13. Complaint Management

Track assigned and resolved complaints with filtering options.

## 14. Interview Management

View customer job requirements and the candidates who have applied for each position.

## 15. Employee List

View and filter employee records.

## 16. Candidate Employee

View and filter candidate-employee records.

## 17. Daily Activity

Track and filter daily visit activities across different business verticals.

## 18. New Business Development & Competitor Information

Manage business development and competitor records, including adding, viewing, assigning, and filtering details.

## 19. ISO Feedback

Add, view, and filter feedback records related to ISO.

## 20. Approve Requirement

View and filter approved job position requirements.

## 21. Operations User Performance

Provides user-wise statistics for daily visits, complaints, expenses, candidate registrations, pending documents, customer records, units, and outstanding amounts.

## 22. Company List

Displays company-wise manpower requirements, joined employees, and selected candidates.

## 23. Reports

Provides filtered reports for:

- Expenses and Visits: Expense, day visit, and night visit reports.
- Customer and Contract Management: Customer reports and contract renewals.
- Complaints: Complaint reports by user, customer, vertical, type, and date.
- Unit Management: New, old, closed, total, vacant, and double-duty unit reports.
- Attendance: Unit-wise and date-wise absence reports.
- Candidate Management: Candidate details and customer-wise pending document reports.
- Sleeping Actions: Records of actions related to sleeping customers.

## 24. PF & ESIC Management

Manage and generate PF and ESIC data using available filters, including adding relevant records.	

		


# Payroll Module — User Workflow

## Dashboard Overview

On login, the user sees a consolidated dashboard with month-wise filtering, covering:

- Attendance, invoice, payroll, and salary-processed reports — filterable by selected month
- **PF/ESIC**: pending PF and ESIC details on click-through
- **Pending salary report**: cases blocked by missing bank account numbers or pending account verification
- **UAN pending list**: employees without a UAN number recorded
- Summary counts: total working employees and total customers (units)

## Customer Management

- View customer list with advanced filtering
- Upload GST/PAN documents
- View quotations and fill customer visit reports

## Unassigned Customer Management

- View customer units not yet assigned to any user
- Access unit details, locations, and headcount information
- Assign unallocated units to eligible users

## Master File

| # | Master | Function |
|---|---|---|
| 1 | **Company Master** | View/edit company configuration: Employee PF %, Employee ESIC %, Service Tax %, Bonus %, PF Limit, ESIC Limit, Company PF %, Company ESIC %, GST No., PAN No., Registration No., Branch Location. Includes a document section for uploading and viewing company documents, and ESI Code details mapped to branch locations |
| 2 | **Department Master** | Add and manage the payroll department list |
| 3 | **Tax (PT) Master** | Configure professional tax by state and salary range |
| 4 | **PT Location Master** | Add and manage tax locations |
| 5 | **Loan Master** | Add employee loan entries — type, amount, installment count, start date; suspend EMI for a specific month |
| 6 | **Designation Master** | Add and manage designations |
| 7 | **Bank Master** | Manage the bank list |
| 8 | **Insurance Company Master** | Add and edit insurance companies |
| 9 | **Policy Type Master** | Add and edit policy types |
| 10 | **LWF Deduction Master** | Configure employee/employer LWF deductions, state-wise, for a selected month |
| 11 | **Vendor Management** | Add, edit, and manage vendor records |

## Convert Employee

- Convert a registered candidate into an employee using their registration number, by selecting customer, unit, designation, and joining date

## Employee Management

1. **Employee Master** — Search employees by registration number, employee code, mobile number, customer, or unit; export filtered results
2. **Employee Basic Details Management** — Search and export employee data by customer/unit, bulk-update via re-uploaded Excel sheet
3. **Employee Transfer Module** — Transfer an employee from one customer unit to another, subject to defined conditions
4. **Employee Request List** — Resolve employee-raised requests submitted via the employee portal

## Attendance Management

1. **Single Attendance** — Fill monthly attendance employee-wise for a selected customer/unit, with applicable additions and deductions
2. **Attendance Excel Management** — Bulk attendance upload via Excel for currently joined employees, including deductions and incentives
3. **Attendance List Module** — Update or modify previously uploaded/added attendance by month and customer/unit

## Payroll Management

1. **Salary Process** — Process salary by month, working days, customer, and unit; system flags already-processed salaries or negative salary cases
2. **Wage Register** — Download processed salary in PDF/Excel, by month, customer, and unit
3. **Branch Update** — Update unit-level configuration: salary date, incharge, salary schedule and cycle, Service Tax %, Leave on Basic %, compliance applicability, Bonus on Basic %, Bonus Limit, Gratuity %, unit start/end date, ESI code mapping, unit contact information, and compliance checklist
4. **Branch Bill Module** — Validate or adjust processed salary; lock/unlock salary; generate branch bill in PDF
5. **Employee Basic Change** — Update or modify employee master data
6. **Fill Rate Multiple** — Update employee earning master data
7. **Advance Deduction** — Add deductions for an employee across different deduction parameters
8. **Loan Master** — Add employee loan entries and manage EMI suspension (shared with Master File)
9. **Wage Slip Report** — Generate salary wage slips by employee code and salary month
10. **Bank Format Upload** — Generate bank salary upload file in PDF/Excel
11. **Remove Salary** — Delete processed salary records, provided they are not locked
12. **Vendor Management & Advance Module** — Update or modify attendance data previously uploaded, by month and customer/unit

## Compliance Management

Generate and download payroll compliance reports.

**Statutory Register Reports**
ABCD Form · Form 11 (PF Declaration) · Form 13 (Workmen Registration) · Form 14 (Employee Card) · Form 15 (Adult Worker) · Form 17 (Wage Register) · Form 18 · Form 19 (Pay Slip) · Form 20 (Damages Register) · Form 21 (Register of Fine) · Form 22 (Advance Register) · Form 23 (Overtime Register) · Form 24 (Annual Return) · Form 28 (Muster Roll) · Form 36 (Identity Register) · Form C (Bonus Register) · Form D · Form F (Gratuity)

**Reports**
PT · Branch Bill · Loan Deduction · LWF · Annual Salary · Employee · ER-1 · New Join / Leave

**Upload Center**
Upload PF, ESIC, PT, LWF, and Bank-related documents, branch and customer-wise, on a monthly basis

**Letters**
Generate Offer Letter, Appointment Letter, and Transfer Letter by employee code and unit selection

**PF/ESIC Audit**
Upload and download PF ECR and ESIC ECR documents

## Important Links

- Direct access to relevant government portals from within the system

## Insurance Management

- Add policy entries and maintain the policy register
- Identify expiring policies and process renewals
- Automated reminder sent 7 days prior to policy expiration

## Complaint Management

| Stage | Function |
|---|---|
| **Registration** | Log complaint details, attach supporting documents |
| **Assignment** | Assign to a responsible user and an authorized reviewer for supervision |
| **Tracking & Resolution** | View complaints created by/assigned to the user; track status, priority, and remarks; maintain resolution history; monitor pending follow-ups |

## Export Registration Data

- Export registration data in Excel format, filterable by registration date, branch, position, and qualification

## Compliance Submission

1. **Compliance** — Validate compliance report for a selected month; validation fails if requirements aren't met; on success, fetch customer units with processed salary and email the compliance document (ZIP) to each unit's registered email address
2. **Compliance History** — View historical record of sent compliance emails by date; export history as a data sheet
3. **Compliance Dashboard** — Consolidated view of compliance data with date, branch, and customer unit filters, showing sent/pending status; exportable to Excel

## Bank Verification

1. **Pending List** — Validate candidate bank details via the ICICI Bank Name Validation Composite API; matches retrieved account name against system records — matches are marked Approved, mismatches move to the Rejected list
2. **Rejected List** — Candidates who failed name validation; records can be resent to the Pending list for re-verification
3. **Approved List** — Candidates whose bank details matched successfully

All three lists support filtering by registration number and date, with Excel export.

## Designation Master

- Manage all designation master data

## WhatsApp Payslip — Wage Slip Message

- Send payslips to selected or all employees with processed salary for a given month, via WhatsApp, in two predefined PDF formats

## PF / ESIC Case Management

**Employee Search** — by registration number, employee code, mobile number, or Aadhaar number (access-controlled)

**Case Registration** — log case type, date, description, remarks, and supporting documents

**Case Tracking & Resolution** — assign cases, monitor pending actions, record resolution, and maintain case history

## Agency Inquiry Management

- Record new agency inquiries: Date of Approach, Agency Name, Authorized MOU Person Name, Mobile Number, Contact Person Name, Email, and Full Address
- View all recorded inquiries in a consolidated list
- Convert an inquiry into a registered agency, carrying forward inquiry-stage details

## Agency Master

- Upload signed MOU (with and without stamp) and one additional supporting document
- Edit and maintain agency details

## Master (Signatory)

- Upload signatures and signatory details, used dynamically for MOU document generation

---

# Placement Module — User Roles & Workflow

## Placement Head — Dashboard Overview

On login, the Placement Head sees a consolidated dashboard covering:

- **Registration status**: Provisional registrations (not yet converted), fully registered candidates, and verified candidates
- **Customer workload**: Assigned customers, customers in process, unassigned customers
- **Position tracking**: Total positions/headcount, in-process, on hold, and closed
- **Interview metrics**: Planned, attended, not attended, and on-hold interviews
- **Candidate outcomes**: Rejected and joined counts
- **Calling activity**: Total call count and customer call list
- **Reminders**: Candidate, customer, and supplier call reminders
- **Visual reporting**: Charts showing interview scheduled vs. attended vs. not attended vs. on hold

## Customer / Assigned Customer Management

- View the full placement customer list, including quotation details and DPO (Demand/Purchase Order) status
- Assign customers to Placement Executives for execution
- Close DPOs once fulfilled
- Search any DPO by order number
- View the Unassigned Customer list — customers not yet allocated to any executive

## Candidate Management

- Search candidates by registration number, name, created-by, gender, mobile number, status, or email
- View Provisional Registration list (basic details captured)
- View Fully Registered list (complete profile data)
- Bulk-upload provisional candidate data via a pre-structured Excel template

## Interview Management (Placement Executive)

- Schedule candidate interviews against a selected customer, date, and position
- Track and update interview status: Planned, Attended, Not Attended, Rejected, Shortlisted

## Shortlist

- View candidates shortlisted by the customer

## Placement Work Report (Head)

- View user-wise scheduled interviews and selections
- Export data to Excel

---

## Complaint Management

Handles end-to-end lifecycle of customer- and employee-related complaints.

| Stage | Function |
|---|---|
| **Registration** | Log complaint details, attach supporting documents |
| **Assignment** | Assign to a responsible user and an authorized reviewer for supervision |
| **Tracking & Resolution** | View complaints created by/assigned to the user; track status, priority, and remarks; maintain resolution history; monitor pending follow-ups |

---

## PF / ESIC Case Management

**Employee Search** — by registration number, employee code, mobile number, or Aadhaar number (access-controlled).

**Case Registration** — log case type, date, description, remarks, and supporting documents.

**Case Tracking & Resolution** — assign cases, monitor pending actions, record resolution, and maintain case history.

---




# Recruitment Module — User Roles & Workflow

## Recruitment Head — Dashboard Overview

On login, the Recruitment Head sees a consolidated dashboard covering:

- **Registration status**: Provisional, registered, and verified candidates
- **Customer workload**: Total customers, in-process customers, and closed units
- **Interview metrics**: Planned, attended, not attended, and on-hold interviews, along with selected, rejected, and joined counts
- **Calling activity**: Total call count and customer call list
- **Reminders**: Candidate, customer, and supplier call reminders

## Customer Management — Assigned Customers

Users can view and manage customers assigned to them, subject to access permissions.

**Customer Information**
- View customer details and DPO (Designated Point of Contact) information
- Assign or reassign customers to authorized users

**Designation-Wise Execution Details**
- View designation-wise workforce requirements and execution details
- Monitor headcount, required skills, age criteria, and duty/working hours

**Customer Unit & Sub-Unit Management**
- View unit and sub-unit names, addresses, and headcount
- Add new units under existing customers and manage unit-related information

## Unassigned Customer Management

- View customer units not yet assigned to any user
- Access unit details, locations, and headcount information
- Assign unallocated units to eligible users per predefined authorization rules
- Accessible to administrators and Level 1 users based on assigned permissions

## Candidate Management

- Search candidates by registration number, name, created-by, gender, mobile number, status, or email
- View Provisional Registration list (basic details captured)
- View Fully Registered list (complete profile data)
- Bulk-upload provisional candidate data via a pre-structured Excel template

## Interview Management (Recruitment Executive)

- Schedule candidate interviews against a selected customer, date, and position
- Track and update interview status: Planned, Attended, Not Attended, Rejected, Shortlisted

## Shortlist

- View candidates shortlisted by the customer

## Employee List

- View candidates currently working with a customer

## Recruitment Supplier Management

- View and manage the list of candidate suppliers added to the system

## Candidate Management — XLS Upload (Provisional)

- Bulk-upload candidate data via a pre-structured Excel template, added in provisional status

---


## Pending Document List

- View candidates with incomplete submissions — resume or other supporting documents not yet uploaded


## Complaint Management

Handles end-to-end lifecycle of customer- and employee-related complaints.

| Stage | Function |
|---|---|
| **Registration** | Log complaint details, attach supporting documents |
| **Assignment** | Assign to a responsible user and an authorized reviewer for supervision |
| **Tracking & Resolution** | View complaints created by/assigned to the user; track status, priority, and remarks; maintain resolution history; monitor pending follow-ups |

---

## PF / ESIC Case Management

**Employee Search** — by registration number, employee code, mobile number, or Aadhaar number (access-controlled).

**Case Registration** — log case type, date, description, remarks, and supporting documents.

**Case Tracking & Resolution** — assign cases, monitor pending actions, record resolution, and maintain case history.



# Registration Desk Module — User Workflow

## Registration Head — Dashboard Overview

On login, the Registration Head sees a consolidated dashboard covering:

- **Registration status**: Provisional, registered, and verified candidates
- **Interview metrics**: Planned, attended, not attended, and on-hold interviews, along with selected, rejected, and joined counts
- **Vertical-wise DPO summary**: DPOs created, headcount, and total joined, segmented by vertical

## Customer Management — Assigned Customers

Users can view and manage customers assigned to them, subject to access permissions.

**Customer Information**
- View customer details and DPO (Designated Point of Contact) information
- Assign or reassign customers to authorized users

**Designation-Wise Execution Details**
- View designation-wise workforce requirements and execution details
- Monitor headcount, required skills, age criteria, and duty/working hours

**Customer Unit & Sub-Unit Management**
- View unit and sub-unit names, addresses, and headcount
- Add new units under existing customers and manage unit-related information

## Unassigned Customer Management

- View customer units not yet assigned to any user
- Access unit details, locations, and headcount information
- Assign unallocated units to eligible users per predefined authorization rules
- Accessible to administrators and Level 1 users based on assigned permissions

## Candidate Management

- Search candidates by registration number, name, created-by, gender, mobile number, status, or email
- View Provisional Registration list (basic details captured)
- View Fully Registered list (complete profile data)
- Bulk-upload provisional candidate data via a pre-structured Excel template

## Candidate Management — XLS Upload (Provisional)

- Bulk-upload candidate data via a pre-structured Excel template, added in provisional status

## Interview Management

- Schedule candidate interviews against a selected customer, date, and position
- Track and update interview status: Planned, Attended, Not Attended, Rejected, Shortlisted

## Employee List

- View candidates currently working with a customer

## Pending Document List

- View candidates with incomplete submissions — resume or other supporting documents not yet uploaded

## Export Candidate

- Export the list of registered candidates by specifying a registration date range

---

## Complaint Management

Handles end-to-end lifecycle of customer- and employee-related complaints.

| Stage | Function |
|---|---|
| **Registration** | Log complaint details, attach supporting documents |
| **Assignment** | Assign to a responsible user and an authorized reviewer for supervision |
| **Tracking & Resolution** | View complaints created by/assigned to the user; track status, priority, and remarks; maintain resolution history; monitor pending follow-ups |



# Training Module — User Workflow

## Agency Inquiry Management

- Record new agency inquiries with details including Date of Approach, Agency Name, Authorized MOU Person Name, Mobile Number, Contact Person Name, Email, and Full Address
- View all recorded inquiries in a consolidated list
- Convert an inquiry into a registered agency, carrying forward the details captured at the inquiry stage

## Agency Master

- Upload the signed MOU (with and without stamp)
- Upload one additional supporting document per agency
- Edit and maintain agency details

## Master

- Upload signatures and signatory details, used dynamically for MOU document generation

---