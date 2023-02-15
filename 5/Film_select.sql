SELECT * FROM herci_v_filmech;

CREATE VIEW herci_v_filmech AS
SELECT h.jmeno_herce, h.prijmeni_herce, f.nazev_filmu
FROM Herci h
JOIN Herci_filmu hf ON h.ID_herce = hf.ID_herce
JOIN Filmy f ON hf.ID_filmu = f.ID_filmu;
-------------------------------------------------------
SELECT * FROM filmy_a_pocet_hercu;

CREATE VIEW filmy_a_pocet_hercu AS
SELECT f.nazev_filmu, COUNT(hf.ID_herce) AS pocet_hercu
FROM Filmy f
JOIN Herci_filmu hf ON f.ID_filmu = hf.ID_filmu
GROUP BY f.ID_filmu;
--------------------------------------------------------
SELECT * FROM nejdelsi_film_v_kategorii;

CREATE VIEW nejdelsi_film_v_kategorii AS
SELECT f.nazev_filmu, f.delka, k.nazev_kategorie
FROM Filmy f
JOIN Kategorie k ON f.ID_kategorie = k.ID_kategorie
WHERE f.delka = (
  SELECT MAX(delka)
  FROM Filmy
  WHERE ID_kategorie = f.ID_kategorie
);
---------------------------------------------------------
SELECT * FROM filmy_seznamene_oceneni;

CREATE VIEW filmy_seznamene_oceneni AS
SELECT f.nazev_filmu, COUNT(o.ID_oceneni) AS pocet_oceneni
FROM Filmy f
LEFT JOIN Filmy_oceneni fo ON f.ID_filmu = fo.ID_filmu
LEFT JOIN Oceneni o ON fo.ID_oceneni = o.ID_oceneni
GROUP BY f.ID_filmu
ORDER BY COUNT(o.ID_oceneni) DESC;
----------------------------------------------------------
SELECT * FROM herci_v_komedii;

CREATE VIEW herci_v_komedii AS
SELECT DISTINCT h.jmeno_herce, h.prijmeni_herce
FROM Herci h
JOIN Herci_filmu hf ON h.ID_herce = hf.ID_herce
JOIN Filmy f ON hf.ID_filmu = f.ID_filmu
JOIN Kategorie k ON f.ID_kategorie = k.ID_kategorie
WHERE k.nazev_kategorie = 'komedie';