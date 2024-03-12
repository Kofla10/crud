CREATE TABLE person(
    id SERIAL NOT NULL,
    name CHARACTER varying(100) NOT NULL,
    email CHARACTER varying(150) NOT NULL,
    age INTEGER NOT NULL,
    PRIMARY KEY (id)
)