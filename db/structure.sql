drop table if exists product;
drop table if exists product_type;

create table product_type (
  prdcttype_id INTEGER NOT NULL primary key auto_increment,
  prdcttype_libelle varchar(100) NOT NULL
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table product (
  prdct_id INTEGER NOT NULL primary key auto_increment,
  prdct_type_id INTEGER NOT NULL,
  prdct_nom varchar(100) NOT NULL,
  prdct_description varchar(200) NOT NULL,
  prdct_prix_min INTEGER NOT NULL,
  prdct_prix_max INTEGER NOT NULL,
  constraint fk_prdct_prdcttype foreign key(prdct_type_id) references product_type(prdcttype_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;
