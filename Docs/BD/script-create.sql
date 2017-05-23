CREATE TABLE administrator
(
    idadmin numeric(6) NOT NULL,
    mdp varchar(120),
    CONSTRAINT pk_admin PRIMARY KEY (idadmin)
);

CREATE TABLE game
(
    idgame SERIAL NOT NULL,
    namegame varchar(20) ,
    description varchar(250) ,
    image varchar(250) ,
    CONSTRAINT pk_game PRIMARY KEY (idgame)
);

CREATE TABLE party
(
    idparty SERIAL NOT NULL,
    nameparty varchar(20),
    idgame integer,
    team integer,
    nbplayer integer DEFAULT 1,
    CONSTRAINT pk_party PRIMARY KEY (idparty),
    CONSTRAINT fk_party FOREIGN KEY (idgame)
        REFERENCES game(idgame)
);

CREATE TABLE player
(
    idplayer SERIAL NOT NULL,
    name varchar(20),
    score numeric(6),
    CONSTRAINT pk_player PRIMARY KEY (idplayer)
);

CREATE TABLE team
(
    idteam SERIAL NOT NULL,
    teamname varchar(20) NOT NULL,
    CONSTRAINT pk_team PRIMARY KEY (idteam),
    CONSTRAINT team_teamname_key UNIQUE (teamname)
);


CREATE TABLE participate
(
    idplayer integer NOT NULL,
    idparty integer NOT NULL,
    scoreparty numeric(6),
    CONSTRAINT pk_participate PRIMARY KEY (idplayer, idparty),
    CONSTRAINT fk_participate1 FOREIGN KEY (idplayer)
        REFERENCES player (idplayer),
    CONSTRAINT fk_participate2 FOREIGN KEY (idparty)
        REFERENCES party (idparty)
);

CREATE TABLE participateteam
(
    idplayer integer NOT NULL,
    idparty integer NOT NULL,
    idteam integer,
    scoreparty numeric(6),
    CONSTRAINT pk_participateteam PRIMARY KEY (idplayer, idparty),
    CONSTRAINT fk_participateteam1 FOREIGN KEY (idplayer)
        REFERENCES player (idplayer),
    CONSTRAINT fk_participateteam2 FOREIGN KEY (idparty)
        REFERENCES party (idparty),
    CONSTRAINT fk_participateteam3 FOREIGN KEY (idteam)
        REFERENCES team (idteam)
);
