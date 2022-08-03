CREATE TABLE usuario
(
   `id`  int(11) NOT NULL AUTO_INCREMENT ,
`nome`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`login`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`password`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`email`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`dtRegistro`  datetime NULL DEFAULT NULL ,
PRIMARY KEY (`id`),
UNIQUE INDEX `unique_email` (`login`) USING BTREE
);