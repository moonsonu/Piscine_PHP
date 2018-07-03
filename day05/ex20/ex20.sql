SELECT 
	film.id_genre AS 'id_genre',
	genre.name AS 'name_genre',
	film.id_distrib,
	distrib.name AS 'name_distrib',
	title AS 'title_film'
FROM film
LEFT JOIN distrib ON film.id_distrib = distrib.id_distrib
LEFT JOIN genre ON film.id_genre = genre.id_genre
WHERE
film.id_genre >= 4
AND
film.id_genre <= 8;
