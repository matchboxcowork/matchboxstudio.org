CREATE TABLE news (
    id          INTEGER        PRIMARY KEY AUTO_INCREMENT,
    arrange     VARCHAR (1000),
    title       VARCHAR (255),
    href        VARCHAR (500),
    description TEXT (1000),
    active      BOOLEAN,
    deleted     BOOLEAN
);
