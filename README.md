# Project-cake

start your my slq.

  create database projeto;

  use projeto;
  </br>
  create table cake(
  </br>
  id int primary key auto_increment,
  </br>
  nome varchar(40),
  </br>
  validade varchar(5),
  </br>
  cvv int(3),
  </br>
  numero_card int(16)
  </br>
)
<br>
<br>
<br>
 create table login(
  </br>
  codigo int primary key auto_increment,
  </br>
  nome varchar(40),
  </br>
  email varchar(40),
  </br>
  senha varchar(40),
  </br>
)

This is a project I'm finishing, it's a bake sale, where the customer will be able to choose which cake to buy, enter their card information to make the payment (of course it's not the best way to do it, but how am I starting with PHP is already a big evolution).
