SELECT COUNT(*) AS 'nb-susc', FLOOR(AVG(price)) AS 'nb-susc', MOD(SUM(duration_sub), 42) AS 'ft'
FROM subscription;
