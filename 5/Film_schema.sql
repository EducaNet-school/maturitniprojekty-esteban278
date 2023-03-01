CREATE TABLE Kategorie (
  ID_kategorie INT PRIMARY KEY,
  nazev_kategorie VARCHAR(255) NOT NULL
);

CREATE TABLE Oceneni (
  ID_oceneni INT PRIMARY KEY,
  nazev_oceneni VARCHAR(255) NOT NULL,
  popis_oceneni VARCHAR(255) NOT NULL,
  datum_oceneni DATE,
  misto_oceneni VARCHAR(255)
);

CREATE TABLE Filmy (
  ID_filmu INT PRIMARY KEY,
  nazev_filmu VARCHAR(255) NOT NULL,
  popis_filmu VARCHAR(255) NOT NULL,
  delka_filmu INT,
  datum_vydani DATE,
  ID_kategorie INT,
  ID_oceneni INT,
  FOREIGN KEY (ID_kategorie) REFERENCES Kategorie(ID_kategorie),
  FOREIGN KEY (ID_oceneni) REFERENCES Oceneni(ID_oceneni)
);

CREATE TABLE Herci (
  ID_herce INT PRIMARY KEY,
  jmeno_herce VARCHAR(255) NOT NULL,
  prijmeni_herce VARCHAR(255) NOT NULL
);

CREATE TABLE Herci_filmu (
  ID_herce INT,
  ID_filmu INT,
  PRIMARY KEY (ID_herce, ID_filmu),
  FOREIGN KEY (ID_herce) REFERENCES Herci(ID_herce),
  FOREIGN KEY (ID_filmu) REFERENCES Filmy(ID_filmu)
);
-------------------------------------------------------------
CREATE FUNCTION nejdelsi_film_v_kategorii(nazev_kategorie VARCHAR(255))
RETURNS INT
AS $$
DECLARE max_delka INT;
BEGIN
  SELECT MAX(delka_filmu) INTO max_delka
  FROM Filmy
  WHERE ID_kategorie = (SELECT ID_kategorie FROM Kategorie WHERE nazev_kategorie = $1);
  RETURN max_delka;
END;
$$ LANGUAGE plpgsql;
-------------------------------------------------------------

CREATE PROCEDURE smaz_prazdne_kategorie()
LANGUAGE plpgsql
AS $$
BEGIN
  DELETE FROM Kategorie
  WHERE NOT EXISTS (SELECT 1 FROM Filmy WHERE Filmy.ID_kategorie = Kategorie.ID_kategorie);
END;
$$;

--------------------------------------------------------------

CREATE VIEW filmy_s_poctem_hercu AS
SELECT f.ID_filmu, f.nazev_filmu, COUNT(hf.ID_herce) AS pocet_hercu
FROM Filmy f
JOIN Herci_filmu hf ON f.ID_filmu = hf.ID_filmu
GROUP BY f.ID_filmu;
