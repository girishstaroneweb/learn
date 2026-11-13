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

This is the longest module so far — want me to compile all five (Placement, Recruitment, Registration Desk, Training, Payroll) into a single Word document for internal documentation?