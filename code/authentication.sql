SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ansh17', 'rajansh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'aaaaa', 'aa@gmail.com', '74b87337454200d4d33f80c4663dc5e5'),
(3, 'shweta', 'shweta@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'abcd', 'abcd@gmail.com', '353b15d58e64430f96283d4c95cc5688'),
(7, '_aarav_raj_singh_', 'hk@gmail.com', '0cc175b9c0f1b6a831c399e269772661');
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
