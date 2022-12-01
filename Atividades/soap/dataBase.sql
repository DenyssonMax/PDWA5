//clients of the system: id, name, e-mail, password, role, salary, RG, responsability, start date, date of birth.
CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `e-mail` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `salary` int(10) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `responsabilities` varchar(300) NOT NULL,
  `start_dt` timestamp NOT NULL,
  `birthday` timestamp NULL,
  
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `clients` (`id`, `nome`, `e-mail`, `password`, `role`, `salary`, `cpf`, `rg`, `responsabilities`, `start_dt`, `birthday`) VALUES
(1, 'Denysson Max ', 'd.max@aluno.ifsp.edu.br', '1234598SD', 'aluno', 5000, '402545555', '14582585888', 'aluno', 2022-10-05, 1995-04-10);
(2, 'Henrique Pastor', 'henrique.pastor@ifsp.edu.br', '4885dfr', 'professor', 8000, '058585858', '987685858583', 'professor substituto', 2019-05-08, 1990-07-28);
(3, 'Igor santos', 'igor.santos@ifsp.edu.br', 'x4d5s5d5sd', 'aluno', 2200, '45758554', 'aluno', 2020-06-06, 2000-08-20);