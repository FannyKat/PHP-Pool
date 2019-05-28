SELECT CONCAT_WS(' ', last_name, first_name, DATE_FORMAT(birthdate, "%Y-%m-%d")) AS "birthdate" FROM user_card WHERE birthdate BETWEEN '1950-01-01' AND '1999-12-31' ORDER BY last_name;
