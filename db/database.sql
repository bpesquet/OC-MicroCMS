create database if not exists microcms character set utf8 collate utf8_unicode_ci;
use microcms;

grant all privileges on microcms.* to 'microcms_user'@'localhost' identified by 'secret';
