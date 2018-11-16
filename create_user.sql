drop database if exists user;
create database user;
grant all on myapp.* to myapp_user@localhost identified by '';
