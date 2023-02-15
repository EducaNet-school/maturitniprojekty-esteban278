INSERT INTO Kategorie (ID_kategorie, nazev_kategorie) VALUES
  (1, 'Akční'),
  (2, 'Komedie'),
  (3, 'Drama'),
  (4, 'Sci-fi'),
  (5, 'Horor');

INSERT INTO Oceneni (ID_oceneni, nazev_oceneni, popis_oceneni, datum_oceneni, misto_oceneni) VALUES
  (1, 'Oscar', 'Cena za nejlepší film', '2022-02-10', 'Los Angeles, USA'),
  (2, 'Zlatý glóbus', 'Cena za nejlepší herecký výkon', '2022-01-31', 'Beverly Hills, USA'),
  (3, 'BAFTA', 'Cena za nejlepší scénář', '2022-02-13', 'Londýn, Velká Británie'),
  (4, 'Cena filmové kritiky', 'Cena za nejlepší kameru', '2022-03-01', 'New York, USA'),
  (5, 'SAG Award', 'Cena za nejlepší herecký ansámbl', '2022-01-23', 'Los Angeles, USA');

INSERT INTO Filmy (ID_filmu, nazev_filmu, popis_filmu, delka_filmu, datum_vydani, ID_kategorie, ID_oceneni) VALUES
  (1, 'Terminator', 'Robot bojující proti lidem', 107, '1984-10-26', 1, NULL),
  (2, 'Jako kdybychom se znali', 'Komedie o nečekaných setkáních', 95, '2022-02-03', 2, 5),
  (3, 'Forrest Gump', 'Příběh člověka s nízkým IQ', 142, '1994-07-06', 3, 1),
  (4, 'Matrix', 'Boj lidí proti strojům', 136, '1999-03-31', 4, 2),
  (5, 'Saw', 'Seriální vrah se svými oběťmi', 103, '2004-01-19', 5, NULL);

INSERT INTO Herci (ID_herce, jmeno_herce, prijmeni_herce) VALUES
  (1, 'Arnold', 'Schwarzenegger'),
  (2, 'Tom', 'Hanks'),
  (3, 'Keanu', 'Reeves'),
  (4, 'Jigsaw', 'The Puppet'),
  (5, 'Jim', 'Carrey');

INSERT INTO Herci_filmu (ID_herce, ID_filmu) VALUES
  (1, 1),
  (2, 3),
  (3, 4),
  (4, 5),
  (5, 2);
