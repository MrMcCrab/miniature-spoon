
create table messages (
  message_id int(8) not null primary key auto_increment,
  message_content varchar(512) not null,
  user_name varchar(32) not null,
  thread_id int(8) not null
);

create table threads(
  thread_id int(8) not null auto_increment primary key,
  thread_title varchar(512) not null,
  thread_starter varchar(512) not null,
  thread_content varchar(512)
);

create table users(
  user_id int(5) not null auto_increment primary key,
  user_name varchar(32) not null,
  user_pass varchar(255) not null,
  user_email varchar(128)
);
