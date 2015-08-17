SELECT
    Name,
    Continent,
    SurfaceArea 
FROM
    Country 
WHERE 
    (Continent = 'South America' OR  Continent = 'Asia' )
AND
    SurfaceArea < '13000'
