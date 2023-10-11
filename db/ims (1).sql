SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE ingredients (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  quantity int(11) NOT NULL,
  method text DEFAULT NULL,
  recipe_id int(11) DEFAULT NULL,
  created_at timestamp NOT NULL DEFAULT current_timestamp(),
  updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE products (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  brand varchar(255) NOT NULL,
  quantity int(11) NOT NULL,
  price decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE users (
  id int(11) NOT NULL,
  name varchar(765) DEFAULT NULL,
  email varchar(765) DEFAULT NULL,
  password varchar(765) DEFAULT NULL,
  number varchar(60) DEFAULT NULL,
  role varchar(60) DEFAULT NULL,
  profile varchar(765) DEFAULT NULL,
  createdOn timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  isActive tinyint(1) DEFAULT 1,
  reset_token text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO users (id, name, email, password, number, role, profile, createdOn, isActive, reset_token) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$dcu9gR1DL2XI0lrrLwYSzukjkXca1dsDQm1KaiJ6iWfU5Pb17Gs4W', '9880772287', 'Administrator', 'default.png', '2023-06-26 20:23:19', 1, ''),
(2, 'siva', 'balusiva1299@gmail.com', '$2y$10$pC3p7Jr/QBsU/Zx8EcyX9OVOSmUD5EYYzc25/xc5swuSbQ/GwVbVC', '9845414485', NULL, NULL, '2023-09-18 16:12:52', NULL, NULL),
(3, 'siva', 'balusiva1299@gmail.com', '$2y$10$97GokQgCkaR5b8umUe.Dm.zOW.Ozg.jlFD.G2VMyL.Gfrkn.o0Vl6', '9845414485', NULL, NULL, '2023-09-19 12:00:24', 1, NULL);


ALTER TABLE ingredients
  ADD PRIMARY KEY (id);

ALTER TABLE products
  ADD PRIMARY KEY (id);

ALTER TABLE users
  ADD PRIMARY KEY (id);


ALTER TABLE ingredients
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE products
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
