CREATE TABLE users(
    id int AUTO_INCREMENT,
    nome VARCHAR(50),
    cognome VARCHAR(50),
    username VARCHAR(50) UNIQUE,
    email VARCHAR(50),
    password VARCHAR(255),
    created_at DATETIME,
    updated_at DATETIME,
    PRIMARY KEY(id)
);

CREATE TABLE photos(  
    user_id int,
    photosrc VARCHAR(255),
    name TEXT,
    created_at DATETIME,
    updated_at DATETIME,
    FOREIGN KEY(user_id) REFERENCES users(id),
    UNIQUE(user_id, photosrc)
);