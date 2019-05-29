SELECT UPPER(user_card.last_name) 
AS 'NAME', user_card.first_name, subscription.price 
FROM member JOIN user_card, subscription 
WHERE user_card.id_user = member.id_user_card AND member.id_sub = subscription.id_sub AND subscription.price > 42 
ORDER BY user_card.last_name, user_card.first_name;
