-- Script SQL para MySQL/MariaDB
-- También se incluye musicos.db (SQLite) lista para usar

CREATE DATABASE IF NOT EXISTS musicos CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE musicos;

CREATE TABLE IF NOT EXISTS artistas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    slug VARCHAR(100) NOT NULL UNIQUE,
    nacimiento VARCHAR(50),
    origen VARCHAR(100),
    genero VARCHAR(100),
    imagen_url TEXT,
    youtube_embed TEXT,
    bio_corta TEXT,
    bio_larga TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO artistas (nombre, slug, nacimiento, origen, genero, imagen_url, youtube_embed, bio_corta, bio_larga) VALUES
(
    'Kurt Cobain', 'kurt-cobain', '20 de febrero de 1967', 'Aberdeen, Washington, EE.UU.',
    'Grunge / Rock alternativo',
    'img/kurt-cobain-in-1991.jpg',
    'https://www.youtube.com/embed/hTWKbfoikeg',
    'Vocalista, guitarrista y compositor de Nirvana. Ícono del grunge y de toda una generación.',
    'Kurt Donald Cobain nació el 20 de febrero de 1967 en Aberdeen, Washington. Desde pequeño mostró una gran sensibilidad artística. Fundó Nirvana en 1987 junto a Krist Novoselic, banda que revolucionaría el rock mundial con el álbum <em>Nevermind</em> (1991) y el hit <strong>Smells Like Teen Spirit</strong>. Cobain se convirtió en la voz de la Generación X, combinando melodías pegadizas con letras crudas y distorsión. Falleció el 5 de abril de 1994 en Seattle. Nirvana fue incluido en el <a href="https://www.rockhall.com" target="_blank">Rock and Roll Hall of Fame</a> en 2014.'
),
(
    'Anthony Kiedis', 'anthony-kiedis', '1 de noviembre de 1962', 'Grand Rapids, Michigan, EE.UU.',
    'Funk rock / Red Hot Chili Peppers',
    'img/anthony-kiedis.jpg',
    'https://www.youtube.com/embed/YlUKcNNmywk',
    'Vocalista y fundador de los Red Hot Chili Peppers, una de las bandas más influyentes del rock moderno.',
    'Anthony Kiedis nació el 1 de noviembre de 1962 en Grand Rapids, Michigan. En 1983 cofundó los <strong>Red Hot Chili Peppers</strong>. La banda mezcló funk, rock y punk de forma única. Álbumes como <em>Blood Sugar Sex Magik</em> (1991) y <em>Californication</em> (1999) los consolidaron mundialmente. Kiedis narró su lucha contra las drogas en la autobiografía <a href="https://en.wikipedia.org/wiki/Scar_Tissue_(book)" target="_blank"><em>Scar Tissue</em></a> (2004). Los RHCP han vendido más de 80 millones de discos.'
),
(
    'Milo J', 'milo-j', '12 de julio de 2005', 'Buenos Aires, Argentina',
    'Trap / RKT / Pop urbano',
    'img/miloj.jpg',
    'https://www.youtube.com/embed/Y5ywZqtHLsI',
    'El fenómeno adolescente argentino que conquistó el trap y el RKT con tan solo 18 años.',
    'Emilio Juárez, conocido como <strong>Milo J</strong>, nació el 12 de julio de 2005 en Buenos Aires. Con 17 años se convirtió en uno de los artistas más escuchados de Latinoamérica gracias a la <em>Bzrp Music Session #57</em>. Su estilo mezcla trap, RKT y pop urbano. En 2023 lanzó su álbum <em>111</em>. Ha colaborado con Duki, Nicki Nicole y Paulo Londra. Más info en su <a href="https://open.spotify.com/artist/2cFrymmkijnjDg9SS92ep" target="_blank">Spotify oficial</a>.'
),
(
    'Alan Walker', 'alan-walker', '24 de agosto de 1997', 'Northampton, RU / Bergen, Noruega',
    'EDM / Electronic / Future bass',
    'img/alan-walker.jpg',
    'https://www.youtube.com/embed/60ItHLz5WEA',
    'DJ y productor noruego conocido mundialmente por su hit Faded, con más de 3.500 millones de reproducciones.',
    'Alan Olav Walker nació el 24 de agosto de 1997 en Northampton y creció en Bergen, Noruega. Aprendió a producir con <em>FL Studio</em> desde los 14 años viendo tutoriales en YouTube. En 2015 publicó <strong>Faded</strong>, con más de 3.500 millones de reproducciones en YouTube. Su imagen —capucha, máscara y guantes— lo hace inconfundible. Ha colaborado con Sia, Ava Max y Miley Cyrus. Visita su web en <a href="https://www.alanwalker.com" target="_blank">alanwalker.com</a>.'
);