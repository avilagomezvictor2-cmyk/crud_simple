SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `edad` int(20) NOT NULL,
  `grado` varchar(100)NOT NULL,
  `asistencia` int(20) NOT NULL,
  `matricula` int(20)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuarios` (`id`, `nombre` , `email` , `edad` , `grado` , `asistencia` ,  `matricula`) VALUES
(1, 'admin', 'admin@gmail.com', '22', '5B', '10', '12322'),
(2, 'juan perez', 'juan@gmail.com', '34', '5B', '12', '12343');

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
