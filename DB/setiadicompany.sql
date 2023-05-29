-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 02:40 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `setiadicompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` time NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `kategori_id`, `user_id`, `judul_berita`, `isi`, `tanggal`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Consult pajak terhebat versi majalah bobo', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus laoreet tellus, nec egestas leo pulvinar at. In scelerisque laoreet suscipit. Aliquam erat volutpat. Curabitur eget imperdiet nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis eu nibh erat. Aliquam quis euismod odio. Ut tincidunt placerat dolor, nec egestas neque gravida eget.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Quisque sit amet erat eu quam semper viverra sed a sapien. In ut elit in orci ultricies condimentum. Vestibulum nec sem ut odio facilisis facilisis ut malesuada velit. Pellentesque fermentum et dui ac mattis. Donec massa nunc, ultricies a diam vitae, feugiat molestie dolor. Praesent iaculis vestibulum pulvinar. Nulla sed venenatis purus. Donec quis ex erat. Sed maximus est nec maximus vestibulum. Proin sagittis magna ex, et porttitor orci semper vitae. Fusce congue lorem purus, id dapibus nunc gravida vitae. Phasellus vestibulum turpis vitae metus condimentum suscipit. Suspendisse eget massa at massa efficitur fermentum. Nulla et posuere odio, pretium iaculis enim.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Vestibulum ultricies odio eget facilisis gravida. Sed efficitur, libero a porttitor sodales, dui dolor imperdiet tortor, vel ullamcorper sem ante imperdiet mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin tempus fermentum nunc, ac semper odio finibus scelerisque. Suspendisse a quam sit amet elit posuere egestas in sed mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus quam ipsum, tempus ut justo sed, tempor ultrices tellus. Morbi non turpis ultricies, elementum ipsum vel, posuere ligula. Suspendisse aliquam nunc et odio lacinia cursus rhoncus vitae enim. Etiam ut mi eu velit lobortis tempor. Duis euismod ipsum est, vitae porta sem accumsan at. Morbi at sem id velit viverra rhoncus. Nullam quis fermentum purus, vulputate gravida nunc. Mauris ut blandit eros.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Curabitur suscipit leo non metus interdum, at placerat orci fringilla. Aenean et commodo dolor, vel mattis mi. Suspendisse sit amet mollis diam, a faucibus augue. Aliquam dapibus nibh ut blandit elementum. Aliquam sed aliquet justo, ac pellentesque eros. Aliquam erat volutpat. Donec dapibus, tellus vitae lacinia aliquam, metus quam venenatis tortor, in vulputate dolor sem ac justo. Vivamus dictum nisi ac nisi pellentesque, non egestas dolor accumsan. Quisque convallis ex magna, id varius nisi varius at. Sed nec ligula ut tellus varius semper quis sed massa. Morbi tempus tortor eu interdum feugiat. Sed aliquam condimentum mi a pharetra. Mauris vulputate pretium quam, in scelerisque dui. Nulla in efficitur elit. Ut mi sem, placerat in ipsum nec, iaculis consequat nunc. Nam tempus pharetra aliquet.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Nulla lobortis condimentum neque, a pulvinar mi ullamcorper eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin placerat justo a pharetra aliquam. Mauris ullamcorper nibh et orci elementum tempor. Suspendisse potenti. Aliquam risus nunc, venenatis eu auctor at, tempus at elit. Integer venenatis est sit amet leo cursus, et faucibus leo posuere. Aenean a nulla sed nisi sodales porta at finibus nunc. Vestibulum luctus a elit ac tincidunt. Morbi augue orci, convallis nec eros mollis, iaculis vulputate enim. Nulla fringilla sed turpis ut commodo. Pellentesque sollicitudin massa eget ipsum sollicitudin lobortis. Nullam commodo risus eget tellus imperdiet, sit amet maximus orci maximus.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Maecenas vel odio et tellus volutpat placerat in non quam. Cras tempor vulputate volutpat. Mauris tristique id magna vitae euismod. Sed rhoncus hendrerit euismod. Suspendisse semper fermentum condimentum. Integer non leo urna. In ac porttitor ipsum, non congue lorem. Donec pretium mauris vitae commodo gravida. Proin lectus augue, rhoncus sit amet eros ac, pulvinar tristique nibh. Mauris maximus, nisi vel tristique vehicula, risus quam sodales ligula, sodales malesuada felis odio sed mauris. Integer libero lorem, ullamcorper nec erat vel, tempor finibus risus. Sed eros lorem, vestibulum quis elit a, finibus tincidunt dui. Mauris mattis vel eros a aliquet. Nullam condimentum libero id massa ultrices cursus. Integer feugiat tristique dignissim.</p>', '14:48:00', '1681804080.jpg', '2023-04-18 00:48:00', '2023-04-18 00:48:00'),
(2, 2, 1, 'Cara menghitung pajak penghasilan (PPH)', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus laoreet tellus, nec egestas leo pulvinar at. In scelerisque laoreet suscipit. Aliquam erat volutpat. Curabitur eget imperdiet nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis eu nibh erat. Aliquam quis euismod odio. Ut tincidunt placerat dolor, nec egestas neque gravida eget.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Quisque sit amet erat eu quam semper viverra sed a sapien. In ut elit in orci ultricies condimentum. Vestibulum nec sem ut odio facilisis facilisis ut malesuada velit. Pellentesque fermentum et dui ac mattis. Donec massa nunc, ultricies a diam vitae, feugiat molestie dolor. Praesent iaculis vestibulum pulvinar. Nulla sed venenatis purus. Donec quis ex erat. Sed maximus est nec maximus vestibulum. Proin sagittis magna ex, et porttitor orci semper vitae. Fusce congue lorem purus, id dapibus nunc gravida vitae. Phasellus vestibulum turpis vitae metus condimentum suscipit. Suspendisse eget massa at massa efficitur fermentum. Nulla et posuere odio, pretium iaculis enim.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Vestibulum ultricies odio eget facilisis gravida. Sed efficitur, libero a porttitor sodales, dui dolor imperdiet tortor, vel ullamcorper sem ante imperdiet mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin tempus fermentum nunc, ac semper odio finibus scelerisque. Suspendisse a quam sit amet elit posuere egestas in sed mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus quam ipsum, tempus ut justo sed, tempor ultrices tellus. Morbi non turpis ultricies, elementum ipsum vel, posuere ligula. Suspendisse aliquam nunc et odio lacinia cursus rhoncus vitae enim. Etiam ut mi eu velit lobortis tempor. Duis euismod ipsum est, vitae porta sem accumsan at. Morbi at sem id velit viverra rhoncus. Nullam quis fermentum purus, vulputate gravida nunc. Mauris ut blandit eros.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Curabitur suscipit leo non metus interdum, at placerat orci fringilla. Aenean et commodo dolor, vel mattis mi. Suspendisse sit amet mollis diam, a faucibus augue. Aliquam dapibus nibh ut blandit elementum. Aliquam sed aliquet justo, ac pellentesque eros. Aliquam erat volutpat. Donec dapibus, tellus vitae lacinia aliquam, metus quam venenatis tortor, in vulputate dolor sem ac justo. Vivamus dictum nisi ac nisi pellentesque, non egestas dolor accumsan. Quisque convallis ex magna, id varius nisi varius at. Sed nec ligula ut tellus varius semper quis sed massa. Morbi tempus tortor eu interdum feugiat. Sed aliquam condimentum mi a pharetra. Mauris vulputate pretium quam, in scelerisque dui. Nulla in efficitur elit. Ut mi sem, placerat in ipsum nec, iaculis consequat nunc. Nam tempus pharetra aliquet.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Nulla lobortis condimentum neque, a pulvinar mi ullamcorper eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin placerat justo a pharetra aliquam. Mauris ullamcorper nibh et orci elementum tempor. Suspendisse potenti. Aliquam risus nunc, venenatis eu auctor at, tempus at elit. Integer venenatis est sit amet leo cursus, et faucibus leo posuere. Aenean a nulla sed nisi sodales porta at finibus nunc. Vestibulum luctus a elit ac tincidunt. Morbi augue orci, convallis nec eros mollis, iaculis vulputate enim. Nulla fringilla sed turpis ut commodo. Pellentesque sollicitudin massa eget ipsum sollicitudin lobortis. Nullam commodo risus eget tellus imperdiet, sit amet maximus orci maximus.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Maecenas vel odio et tellus volutpat placerat in non quam. Cras tempor vulputate volutpat. Mauris tristique id magna vitae euismod. Sed rhoncus hendrerit euismod. Suspendisse semper fermentum condimentum. Integer non leo urna. In ac porttitor ipsum, non congue lorem. Donec pretium mauris vitae commodo gravida. Proin lectus augue, rhoncus sit amet eros ac, pulvinar tristique nibh. Mauris maximus, nisi vel tristique vehicula, risus quam sodales ligula, sodales malesuada felis odio sed mauris. Integer libero lorem, ullamcorper nec erat vel, tempor finibus risus. Sed eros lorem, vestibulum quis elit a, finibus tincidunt dui. Mauris mattis vel eros a aliquet. Nullam condimentum libero id massa ultrices cursus. Integer feugiat tristique dignissim.</p>', '14:50:00', '1681804125.jpg', '2023-04-18 00:48:45', '2023-04-18 00:48:45'),
(3, 3, 1, 'Cara menghitung pajak bumi bangunan', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus laoreet tellus, nec egestas leo pulvinar at. In scelerisque laoreet suscipit. Aliquam erat volutpat. Curabitur eget imperdiet nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis eu nibh erat. Aliquam quis euismod odio. Ut tincidunt placerat dolor, nec egestas neque gravida eget.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Quisque sit amet erat eu quam semper viverra sed a sapien. In ut elit in orci ultricies condimentum. Vestibulum nec sem ut odio facilisis facilisis ut malesuada velit. Pellentesque fermentum et dui ac mattis. Donec massa nunc, ultricies a diam vitae, feugiat molestie dolor. Praesent iaculis vestibulum pulvinar. Nulla sed venenatis purus. Donec quis ex erat. Sed maximus est nec maximus vestibulum. Proin sagittis magna ex, et porttitor orci semper vitae. Fusce congue lorem purus, id dapibus nunc gravida vitae. Phasellus vestibulum turpis vitae metus condimentum suscipit. Suspendisse eget massa at massa efficitur fermentum. Nulla et posuere odio, pretium iaculis enim.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Vestibulum ultricies odio eget facilisis gravida. Sed efficitur, libero a porttitor sodales, dui dolor imperdiet tortor, vel ullamcorper sem ante imperdiet mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin tempus fermentum nunc, ac semper odio finibus scelerisque. Suspendisse a quam sit amet elit posuere egestas in sed mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus quam ipsum, tempus ut justo sed, tempor ultrices tellus. Morbi non turpis ultricies, elementum ipsum vel, posuere ligula. Suspendisse aliquam nunc et odio lacinia cursus rhoncus vitae enim. Etiam ut mi eu velit lobortis tempor. Duis euismod ipsum est, vitae porta sem accumsan at. Morbi at sem id velit viverra rhoncus. Nullam quis fermentum purus, vulputate gravida nunc. Mauris ut blandit eros.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Curabitur suscipit leo non metus interdum, at placerat orci fringilla. Aenean et commodo dolor, vel mattis mi. Suspendisse sit amet mollis diam, a faucibus augue. Aliquam dapibus nibh ut blandit elementum. Aliquam sed aliquet justo, ac pellentesque eros. Aliquam erat volutpat. Donec dapibus, tellus vitae lacinia aliquam, metus quam venenatis tortor, in vulputate dolor sem ac justo. Vivamus dictum nisi ac nisi pellentesque, non egestas dolor accumsan. Quisque convallis ex magna, id varius nisi varius at. Sed nec ligula ut tellus varius semper quis sed massa. Morbi tempus tortor eu interdum feugiat. Sed aliquam condimentum mi a pharetra. Mauris vulputate pretium quam, in scelerisque dui. Nulla in efficitur elit. Ut mi sem, placerat in ipsum nec, iaculis consequat nunc. Nam tempus pharetra aliquet.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Nulla lobortis condimentum neque, a pulvinar mi ullamcorper eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin placerat justo a pharetra aliquam. Mauris ullamcorper nibh et orci elementum tempor. Suspendisse potenti. Aliquam risus nunc, venenatis eu auctor at, tempus at elit. Integer venenatis est sit amet leo cursus, et faucibus leo posuere. Aenean a nulla sed nisi sodales porta at finibus nunc. Vestibulum luctus a elit ac tincidunt. Morbi augue orci, convallis nec eros mollis, iaculis vulputate enim. Nulla fringilla sed turpis ut commodo. Pellentesque sollicitudin massa eget ipsum sollicitudin lobortis. Nullam commodo risus eget tellus imperdiet, sit amet maximus orci maximus.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Maecenas vel odio et tellus volutpat placerat in non quam. Cras tempor vulputate volutpat. Mauris tristique id magna vitae euismod. Sed rhoncus hendrerit euismod. Suspendisse semper fermentum condimentum. Integer non leo urna. In ac porttitor ipsum, non congue lorem. Donec pretium mauris vitae commodo gravida. Proin lectus augue, rhoncus sit amet eros ac, pulvinar tristique nibh. Mauris maximus, nisi vel tristique vehicula, risus quam sodales ligula, sodales malesuada felis odio sed mauris. Integer libero lorem, ullamcorper nec erat vel, tempor finibus risus. Sed eros lorem, vestibulum quis elit a, finibus tincidunt dui. Mauris mattis vel eros a aliquet. Nullam condimentum libero id massa ultrices cursus. Integer feugiat tristique dignissim.</p>', '15:50:00', '1681804169.png', '2023-04-18 00:49:29', '2023-04-18 00:49:29'),
(4, 4, 1, 'Bingung dengan permasalahan Pajak Pertambahan Nilai?', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus laoreet tellus, nec egestas leo pulvinar at. In scelerisque laoreet suscipit. Aliquam erat volutpat. Curabitur eget imperdiet nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis eu nibh erat. Aliquam quis euismod odio. Ut tincidunt placerat dolor, nec egestas neque gravida eget.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Quisque sit amet erat eu quam semper viverra sed a sapien. In ut elit in orci ultricies condimentum. Vestibulum nec sem ut odio facilisis facilisis ut malesuada velit. Pellentesque fermentum et dui ac mattis. Donec massa nunc, ultricies a diam vitae, feugiat molestie dolor. Praesent iaculis vestibulum pulvinar. Nulla sed venenatis purus. Donec quis ex erat. Sed maximus est nec maximus vestibulum. Proin sagittis magna ex, et porttitor orci semper vitae. Fusce congue lorem purus, id dapibus nunc gravida vitae. Phasellus vestibulum turpis vitae metus condimentum suscipit. Suspendisse eget massa at massa efficitur fermentum. Nulla et posuere odio, pretium iaculis enim.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Vestibulum ultricies odio eget facilisis gravida. Sed efficitur, libero a porttitor sodales, dui dolor imperdiet tortor, vel ullamcorper sem ante imperdiet mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin tempus fermentum nunc, ac semper odio finibus scelerisque. Suspendisse a quam sit amet elit posuere egestas in sed mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus quam ipsum, tempus ut justo sed, tempor ultrices tellus. Morbi non turpis ultricies, elementum ipsum vel, posuere ligula. Suspendisse aliquam nunc et odio lacinia cursus rhoncus vitae enim. Etiam ut mi eu velit lobortis tempor. Duis euismod ipsum est, vitae porta sem accumsan at. Morbi at sem id velit viverra rhoncus. Nullam quis fermentum purus, vulputate gravida nunc. Mauris ut blandit eros.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Curabitur suscipit leo non metus interdum, at placerat orci fringilla. Aenean et commodo dolor, vel mattis mi. Suspendisse sit amet mollis diam, a faucibus augue. Aliquam dapibus nibh ut blandit elementum. Aliquam sed aliquet justo, ac pellentesque eros. Aliquam erat volutpat. Donec dapibus, tellus vitae lacinia aliquam, metus quam venenatis tortor, in vulputate dolor sem ac justo. Vivamus dictum nisi ac nisi pellentesque, non egestas dolor accumsan. Quisque convallis ex magna, id varius nisi varius at. Sed nec ligula ut tellus varius semper quis sed massa. Morbi tempus tortor eu interdum feugiat. Sed aliquam condimentum mi a pharetra. Mauris vulputate pretium quam, in scelerisque dui. Nulla in efficitur elit. Ut mi sem, placerat in ipsum nec, iaculis consequat nunc. Nam tempus pharetra aliquet.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Nulla lobortis condimentum neque, a pulvinar mi ullamcorper eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin placerat justo a pharetra aliquam. Mauris ullamcorper nibh et orci elementum tempor. Suspendisse potenti. Aliquam risus nunc, venenatis eu auctor at, tempus at elit. Integer venenatis est sit amet leo cursus, et faucibus leo posuere. Aenean a nulla sed nisi sodales porta at finibus nunc. Vestibulum luctus a elit ac tincidunt. Morbi augue orci, convallis nec eros mollis, iaculis vulputate enim. Nulla fringilla sed turpis ut commodo. Pellentesque sollicitudin massa eget ipsum sollicitudin lobortis. Nullam commodo risus eget tellus imperdiet, sit amet maximus orci maximus.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Maecenas vel odio et tellus volutpat placerat in non quam. Cras tempor vulputate volutpat. Mauris tristique id magna vitae euismod. Sed rhoncus hendrerit euismod. Suspendisse semper fermentum condimentum. Integer non leo urna. In ac porttitor ipsum, non congue lorem. Donec pretium mauris vitae commodo gravida. Proin lectus augue, rhoncus sit amet eros ac, pulvinar tristique nibh. Mauris maximus, nisi vel tristique vehicula, risus quam sodales ligula, sodales malesuada felis odio sed mauris. Integer libero lorem, ullamcorper nec erat vel, tempor finibus risus. Sed eros lorem, vestibulum quis elit a, finibus tincidunt dui. Mauris mattis vel eros a aliquet. Nullam condimentum libero id massa ultrices cursus. Integer feugiat tristique dignissim.</p>', '16:50:00', '1681804227.jpg', '2023-04-18 00:50:27', '2023-04-18 00:50:27'),
(5, 5, 1, 'Pajak dan alasan kenapa kita harus bayar pajak setiap bulan', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus laoreet tellus, nec egestas leo pulvinar at. In scelerisque laoreet suscipit. Aliquam erat volutpat. Curabitur eget imperdiet nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis eu nibh erat. Aliquam quis euismod odio. Ut tincidunt placerat dolor, nec egestas neque gravida eget.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Quisque sit amet erat eu quam semper viverra sed a sapien. In ut elit in orci ultricies condimentum. Vestibulum nec sem ut odio facilisis facilisis ut malesuada velit. Pellentesque fermentum et dui ac mattis. Donec massa nunc, ultricies a diam vitae, feugiat molestie dolor. Praesent iaculis vestibulum pulvinar. Nulla sed venenatis purus. Donec quis ex erat. Sed maximus est nec maximus vestibulum. Proin sagittis magna ex, et porttitor orci semper vitae. Fusce congue lorem purus, id dapibus nunc gravida vitae. Phasellus vestibulum turpis vitae metus condimentum suscipit. Suspendisse eget massa at massa efficitur fermentum. Nulla et posuere odio, pretium iaculis enim.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Vestibulum ultricies odio eget facilisis gravida. Sed efficitur, libero a porttitor sodales, dui dolor imperdiet tortor, vel ullamcorper sem ante imperdiet mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin tempus fermentum nunc, ac semper odio finibus scelerisque. Suspendisse a quam sit amet elit posuere egestas in sed mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus quam ipsum, tempus ut justo sed, tempor ultrices tellus. Morbi non turpis ultricies, elementum ipsum vel, posuere ligula. Suspendisse aliquam nunc et odio lacinia cursus rhoncus vitae enim. Etiam ut mi eu velit lobortis tempor. Duis euismod ipsum est, vitae porta sem accumsan at. Morbi at sem id velit viverra rhoncus. Nullam quis fermentum purus, vulputate gravida nunc. Mauris ut blandit eros.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Curabitur suscipit leo non metus interdum, at placerat orci fringilla. Aenean et commodo dolor, vel mattis mi. Suspendisse sit amet mollis diam, a faucibus augue. Aliquam dapibus nibh ut blandit elementum. Aliquam sed aliquet justo, ac pellentesque eros. Aliquam erat volutpat. Donec dapibus, tellus vitae lacinia aliquam, metus quam venenatis tortor, in vulputate dolor sem ac justo. Vivamus dictum nisi ac nisi pellentesque, non egestas dolor accumsan. Quisque convallis ex magna, id varius nisi varius at. Sed nec ligula ut tellus varius semper quis sed massa. Morbi tempus tortor eu interdum feugiat. Sed aliquam condimentum mi a pharetra. Mauris vulputate pretium quam, in scelerisque dui. Nulla in efficitur elit. Ut mi sem, placerat in ipsum nec, iaculis consequat nunc. Nam tempus pharetra aliquet.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Nulla lobortis condimentum neque, a pulvinar mi ullamcorper eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin placerat justo a pharetra aliquam. Mauris ullamcorper nibh et orci elementum tempor. Suspendisse potenti. Aliquam risus nunc, venenatis eu auctor at, tempus at elit. Integer venenatis est sit amet leo cursus, et faucibus leo posuere. Aenean a nulla sed nisi sodales porta at finibus nunc. Vestibulum luctus a elit ac tincidunt. Morbi augue orci, convallis nec eros mollis, iaculis vulputate enim. Nulla fringilla sed turpis ut commodo. Pellentesque sollicitudin massa eget ipsum sollicitudin lobortis. Nullam commodo risus eget tellus imperdiet, sit amet maximus orci maximus.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Maecenas vel odio et tellus volutpat placerat in non quam. Cras tempor vulputate volutpat. Mauris tristique id magna vitae euismod. Sed rhoncus hendrerit euismod. Suspendisse semper fermentum condimentum. Integer non leo urna. In ac porttitor ipsum, non congue lorem. Donec pretium mauris vitae commodo gravida. Proin lectus augue, rhoncus sit amet eros ac, pulvinar tristique nibh. Mauris maximus, nisi vel tristique vehicula, risus quam sodales ligula, sodales malesuada felis odio sed mauris. Integer libero lorem, ullamcorper nec erat vel, tempor finibus risus. Sed eros lorem, vestibulum quis elit a, finibus tincidunt dui. Mauris mattis vel eros a aliquet. Nullam condimentum libero id massa ultrices cursus. Integer feugiat tristique dignissim.</p>', '18:00:00', '1681804292.png', '2023-04-18 00:51:32', '2023-04-18 00:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Setiadi Consulting', '2023-04-18 00:45:58', '2023-04-18 00:45:58'),
(2, 'Pajak Penghasilan (PPH)', '2023-04-18 00:46:06', '2023-04-18 00:46:06'),
(3, 'Pajak Bumi Bangunan (PBB)', '2023-04-18 00:46:14', '2023-04-18 00:46:14'),
(4, 'Pajak Pertambahan Nilai (PPN)', '2023-04-18 00:46:21', '2023-04-18 00:46:21'),
(5, 'Pajak', '2023-04-18 00:46:29', '2023-04-18 00:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontaks`
--

INSERT INTO `kontaks` (`id`, `nama`, `email`, `no_hp`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Danniel', 'liudaniel2201@gmail.com', '+6281384681305', 'Selamat pagi Bapak/Ibu, saya Danniel kebetulan ingin mengajukan sebuah pertanyaan mengenai pajak motor saya yang udah mati kurang lebih selama 3-4 bulan. Nah pas saya ingin membayar ternyata saya kena denda. Apakah denda tersebut wajar atau tidak? Terima kasih', '2023-04-18 00:53:46', '2023-04-18 00:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_15_045932_create_kategoris_table', 1),
(6, '2023_04_15_045946_create_kontaks_table', 1),
(7, '2023_04_15_050003_create_beritas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Setiadiconsulting', 'setadidanrekan@gmail.com', NULL, '$2y$10$NBLE/0NGDKiyjWuKrvyvBuKwIK2A72HhbunvF/RLDhyoZIsq.ujB2', NULL, '2023-04-17 17:57:00', '2023-04-17 17:57:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kontaks_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
