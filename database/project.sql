create database if not exists shadheen;

use shadheen;

create table jobs (
    jobid int not null unique auto_increment,
    jobtitle varchar(256) not null,
    jobtype varchar(32) not null,
    jobdescription text not null,
    salary int not null,
    location varchar(256) not null,
    jobkeywords varchar(256) not null,
    employer varchar(32) not null,
    boosted boolean not null default false,
    deadline date not null,
    primary key(jobid)
);

create table users (
    username varchar(32) not null unique,
    password varchar(256) not null,
    location varchar(256) not null,
    name varchar(32) not null,
    gender varchar(32) not null,
    age int not null,
    contact int not null,
    primary key (username)
);

create table jobseeker (
    jobseekerid varchar(32) not null unique,
    skillset text not null,
    qualification text not null,
    salaryrange varchar(32) not null,
    primary key (jobseekerid),
    foreign key (jobseekerid) references users (username)
);

create table company (
    companyname varchar(256) not null unique,
    rating int not null,
    primary key(companyname)
);

create table recruiter (
    recruiterid varchar(32) not null unique,
    company varchar(256) not null unique,
    subscription varchar(32) not null,
    primary key (recruiterid),
    foreign key (recruiterid) references users (username),
    foreign key (company) references company (companyname)
);

create table admin (
    adminid varchar(32) not null unique,
    designation varchar(32) not null,
    primary key(adminid),
    foreign key (adminid) references users (username)
);

create table message (
    messageid int not null unique auto_increment,
    messagetext text not null,
    sender varchar(32) not null,
    receiver varchar(32) not null,
    senton datetime default current_timestamp,
    primary key(messageid),
    foreign key (sender) references users (username),
    foreign key (receiver) references users (username)
);

create table notification (
    notificationid int not null unique auto_increment,
    unread boolean not null default false,
    receiver  varchar(32) not null,
    primary key(notificationid),
    foreign key(receiver) references users(username)
);

create table subscription (
    subscriptionid int not null unique auto_increment,
    subscriber varchar(32) not null,
    scheme varchar(32) not null,
    expire datetime not null,
    primary key (subscriptionid),
    foreign key (subscriber) references recruiter (recruiterid)
);

create table payment (
    paymentid int not null unique auto_increment,
    payerid varchar(32) not null,
    paymentmethod varchar(32) not null,
    amount int not null,
    paytime datetime default current_timestamp,
    primary key(paymentid),
    foreign key (payerid) references recruiter (recruiterid)
);

create table cv (
    resumeid int not null unique auto_increment,
    username varchar(32) not null unique,
    awards text not null,
    links text not null,
    volunteering text not null,
    interests text not null,
    reference text not null,
    employmenthistory text not null,
    education text not null,
    skills text not null,
    languages text not null,
    certifications text not null,

    primary key(resumeid),
    foreign key (username) references jobseeker (jobseekerid)
);


CREATE TABLE appointment (
  id int not null unique auto_increment,
  applicant varchar(32) not null,
  acceptor varchar(32) not null,
  jobid int not null,
  closed boolean default false,
  CONSTRAINT uniquee UNIQUE(applicant, jobid),
 	PRIMARY KEY(id),
    FOREIGN KEY(applicant) REFERENCES jobseeker(jobseekerid),
    FOREIGN KEY(acceptor) references recruiter(recruiterid),
    FOREIGN KEY(jobid) REFERENCES jobs(jobid)
);

ALTER TABLE notification
ADD details text not null;

ALTER TABLE `notification` CHANGE `unread` `unread` TINYINT(1) NOT NULL DEFAULT '1';

/*last updated: 28 sep 03:18am*/