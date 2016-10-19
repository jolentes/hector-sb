/* this SQL script initializes the database for development purposes
   DO NOT USE ON PROD DATABASES 
*/
/* replace all passwords with my own password */
UPDATE fkde_users SET password = '$P$DLAKYIiozaN82NlKJ77G/mbFW3U6Kq/';

/* replace original user email adresses with dummies except for my own */
UPDATE fkde_users SET email = CONCAT(username, '@hka-sbk.de') WHERE username not in ('jolentes');
UPDATE fkde_users set email = TRIM(Replace(Replace(Replace(email,'\t',''),'\n',''),'\r',''));

/* replace all email adresses to not send email notification based on dev activities */
UPDATE fab_teilnehmer set email = 'joern.lentes@web.de';
UPDATE fab_schule set email = 'joern.lentes@web.de';