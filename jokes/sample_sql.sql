CREATE TABLE joke (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    joketext TEXT,
  jokedate DATE NOT NULL
  ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

INSERT INTO joke SET
joketext = 'Why did the chicken cross the road? To get to the other side!',
jokedate = '2009-04-01';

INSERT INTO joke
(joketext, jokedate) VALUES (
'Knock-knock! Who\'s there? Boo! "Boo" who? Don\'t cry; it\'s only a joke!',
"2009-04-01"
);”
