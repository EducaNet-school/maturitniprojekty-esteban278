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