
/*-----------------------User Input---------------------*/
INSERT INTO `users` (`username`, `password`, `location`, `name`, `gender`, `age`, `contact`) VALUES ('khor', 'khor1234', 'Dhaka', 'Khorshed Alam', 'Male', '23', '01800000001');

INSERT INTO `users` (`username`, `password`, `location`, `name`, `gender`, `age`, `contact`) VALUES ('apu', 'apu1234', 'Narayanganj', 'Apu Bhowmick', 'Male', '25', '01700000001');

INSERT INTO `users` (`username`, `password`, `location`, `name`, `gender`, `age`, `contact`) VALUES ('sabbir', 'sabbir1234', 'Dhaka', 'Sabbir Sarkar', 'Male', '23', '01700000002');

INSERT INTO `users` (`username`, `password`, `location`, `name`, `gender`, `age`, `contact`) VALUES ('rezan', 'rezan1234', 'Dhaka', 'Asif Rezan', 'Male', '23', '01700000003');

INSERT INTO `users` (`username`, `password`, `location`, `name`, `gender`, `age`, `contact`) VALUES ('Asif', 'Asif1234', 'Dhaka', 'Asifujjaman Opi', 'male', '24', '01700000004');
/*-----------------------User Input---------------------*/

/*----------------------Job Seeker----------------------*/
INSERT INTO `jobseeker` (`jobseekerid`, `skillset`, `qualification`, `salaryrange`) VALUES ('apu', 'Java, C++, Python', 'Bachelor in Science', '20000');
INSERT INTO `jobseeker` (`jobseekerid`, `skillset`, `qualification`, `salaryrange`) VALUES ('sabbir', 'Ruby, PHP, SQL', 'Bachelor in Arts', '15000');
INSERT INTO `jobseeker` (`jobseekerid`, `skillset`, `qualification`, `salaryrange`) VALUES ('khor', 'C++, Java, Javascript', 'B.Sc in Commerce', '30000');
/*----------------------Job Seeker----------------------*/

/*----------------------Company----------------------*/
INSERT INTO `company` (`companyname`, `rating`) VALUES ('BRAC IT', '4.7');
INSERT INTO `company` (`companyname`, `rating`) VALUES ('Amber IT', '4');

/*----------------------Company----------------------*/


/*----------------------Recruiter----------------------*/

INSERT INTO `recruiter` (`recruiterid`, `company`, `subscription`) VALUES ('rezan', 'BRAC IT', 'Monthly');

INSERT INTO `recruiter` (`recruiterid`, `company`, `subscription`) VALUES ('Asif', 'Amber IT', 'Yearly');

/*----------------------Recruiter----------------------*/


/*----------------------CV----------------------*/

INSERT INTO `cv` (`resumeid`, `username`, `awards`, `links`, `volunteering`, `interests`, `reference`, `employmenthistory`, `education`, `skills`, `languages`, `certifications`) VALUES (NULL, 'apu', 'Math Olympiad', 'www.google.com', 'None', 'Online Games', 'Md. Abdul Hamid', 'Intern @ NovaSys (2017-2018)', 'B.Sc in CSE, UIU, 2018-2022', 'C++, Java, C#', 'Bengali, English', 'CCNA Network Security');
INSERT INTO `cv` (`resumeid`, `username`, `awards`, `links`, `volunteering`, `interests`, `reference`, `employmenthistory`, `education`, `skills`, `languages`, `certifications`) VALUES (NULL, 'sabbir', 'None', 'www.facebook.com', 'Cloth Donation, 2018 Winter', 'Cycling, Hiking, TV', 'Md. Nurul Haque', 'President, Programming Club (2020)', 'B.Sc in CSE (2018-2022)', 'JavaScript, PHP, SQL', 'Bengali, English, Hindi', 'None');
/*----------------------CV----------------------*/

/*----------------------jobs----------------------*/
INSERT INTO `jobs` (`jobid`, `jobtitle`, `jobtype`, `jobdescription`, `salary`, `location`, `jobkeywords`, `employer`, `boosted`, `deadline`) VALUES (NULL, 'Financial Control Manager(Lead Manager)', 'Education/Training', 'The financial controller (FC) is a pivotal and senior role within an accounting function. They oversee the accounting function of a company, ensuring that accounting records are kept appropriately and that reported results comply with accounting standards and relevant legislation', '40000', 'Chittagong', 'Accounting', 'rezan', '0', '2021-10-27');
INSERT INTO `jobs` (`jobid`, `jobtitle`, `jobtype`, `jobdescription`, `salary`, `location`, `jobkeywords`, `employer`, `boosted`, `deadline`) VALUES (NULL, 'Java Software Developer', 'IT & Telecommunication', 'Contribute to all aspects of the product development process specification and design, throughout integration, release.\r\nParticipate in the decision making process regarding the software customization and support of the array of software engineering tools the engineering group; i.e. version control, change management, know repository, JAVA, UML modeling, etc.\r\nCreate quality source code, document code and procedures throughout prescribed by the engineering standards.\r\nCross review the quality of co-workers’ design and implementation.\r\nLead, coach software Developer and review the quality of their design implementation.\r\nAssist leader to communicate with customer if any.\r\nReport to leader and line manager ', '60000', 'Dhaka', 'Java', 'rezan', '1', '2021-09-30');
INSERT INTO `jobs` (`jobid`, `jobtitle`, `jobtype`, `jobdescription`, `salary`, `location`, `jobkeywords`, `employer`, `boosted`, `deadline`) VALUES (NULL, 'Software Engineer (ASP.NET)', 'IT & Telecommunication', '• Analyze, Architect, Design and Develop Applications.\r\n• Excellent capability to translate complex client requirement to technical implementation.\r\n• Must have a good working experience with \"Angular JS\"\r\n• Expertise in ASP.Net, C#, Angular JS, SQL Server, JQuery.\r\n• Strong Knowledge of Object Oriented Approach.\r\n• Plan and execute Unit Tests.\r\n• Implementing new technologies and framework.', '40000', 'Dhaka', 'C#', 'rezan', '0', '2021-10-31');
INSERT INTO `jobs` (`jobid`, `jobtitle`, `jobtype`, `jobdescription`, `salary`, `location`, `jobkeywords`, `employer`, `boosted`, `deadline`) VALUES (NULL, 'Technical Content Writer', 'Design/Creative', 'To all the writing enthusiasts out there, are you up for an internship on technical content writing? If yes, then Ajkerdeal.com Ltd. is looking for somebody just like you. This internship won`t just end up being a work experience for you, it`s definitely going to be a cherishable journey with lots of great memories.', '30000', 'Chittagong', 'Graphic Designer', 'rezan', '1', '2021-11-01');
INSERT INTO `jobs` (`jobid`, `jobtitle`, `jobtype`, `jobdescription`, `salary`, `location`, `jobkeywords`, `employer`, `boosted`, `deadline`) VALUES (NULL, 'ACS Textiles (Bangladesh) Ltd.', 'Medical/Pharma', 'To ensure proper treatment of reported illnesses/ailments of factory worker / Staff.\r\nRefer serious and critical patients to the Hospital if required.\r\nRecommend sick leave of the workers and staff according to company\'s rules and regulations.\r\nRecommend maternity leave of pregnant workers and staff as per Labor Law.\r\nMaintain comprehensive and accurate records for all patients seen.\r\nTo attend buyer\'s audit as and when required and reply to their relevant quarries.\r\nManagement of general & critical patient under supervision.\r\nEffective counseling to the patient\'s attendants.\r\nMaintain good communication with supporting staffs, colleagues, seniors and pageant workers.\r\nRecommend sick leave of the workers and staff according to company\'s rules and regulations.', '30000', 'Dhaka', 'Doctor', 'Asif', '0', '2021-10-26');
/*----------------------jobs----------------------*/

/*----------------------Message----------------------*/
INSERT INTO `message` (`messageid`, `messagetext`, `sender`, `receiver`, `senton`) VALUES (NULL, 'Hi, Can you please tell me your company location?', 'apu', 'sabbir', current_timestamp());
INSERT INTO `message` (`messageid`, `messagetext`, `sender`, `receiver`, `senton`) VALUES (NULL, 'Its beside Banani Police Station', 'sabbir', 'apu', current_timestamp());
INSERT INTO `message` (`messageid`, `messagetext`, `sender`, `receiver`, `senton`) VALUES (NULL, 'Good to know.', 'apu', 'sabbir', current_timestamp());
/*----------------------Message----------------------*/

/*----------------------Company & CV-----------------*/
INSERT INTO `company` (`companyname`, `rating`) VALUES ('Orange', '5');

INSERT INTO `users` (`username`, `password`, `location`, `name`, `gender`, `age`, `contact`) VALUES ('Sabbir', 'sabbir1234', 'Dhaka', 'Sabbir', 'Male', '23', '34567');

INSERT INTO `recruiter` (`recruiterid`, `company`, `subscription`) VALUES ('sabbir', 'Orange', 'y');

INSERT INTO `subscription` (`subscriptionid`, `subscriber`, `scheme`, `expire`) VALUES (NULL, 'sabbir', 'monthly', '2021-09-29 08:30:22');

SELECT subscriber, scheme,DATE_ADD(expire,INTERVAL 20 DAY) FROM subscription

INSERT INTO `subscription` (`subscriptionid`, `subscriber`, `scheme`, `expire`) VALUES (NULL, 'sabbir', 'monthly', DATE_ADD(Now(),INTERVAL 30 DAY))
/*----------------------Company & CV-----------------*/