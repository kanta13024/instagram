-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2021 年 5 月 02 日 00:57
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `table1`
--

CREATE TABLE `table1` (
  `ban` int(11) NOT NULL,
  `nam` varchar(128) NOT NULL,
  `mes` varchar(256) NOT NULL,
  `ope` int(11) NOT NULL,
  `gaz` varchar(64) NOT NULL,
  `dat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `table1`
--

INSERT INTO `table1` (`ban`, `nam`, `mes`, `ope`, `gaz`, `dat`) VALUES
(1, 'user1', '目セージ', 1, '20210430123054img2.jpg', '2021-04-30 12:30:54'),
(2, 'テストユーザー', 'テストてすとてすと', 1, '20210430144226lake.jpg', '2021-04-30 14:42:26'),
(3, 'テスト太郎', 'メッセージを描きます。\r\n\r\n描きます', 1, '20210501020258building.jpg', '2021-05-01 02:02:58'),
(4, 'user1', 'テストテストテスト', 1, '20210502001612sky.jpg', '2021-05-02 00:16:12');

-- --------------------------------------------------------

--
-- テーブルの構造 `table2`
--

CREATE TABLE `table2` (
  `id` varchar(64) NOT NULL,
  `pas` varchar(64) NOT NULL,
  `nam` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `table2`
--

INSERT INTO `table2` (`id`, `pas`, `nam`) VALUES
('admin', '603eee47c07afe150b9525e8367d9734', 'nisizawa'),
('user1', '75433edc079eef80fda1ff3f0a757241', 'dog'),
('user2', 'f63c4e07fd155a57882620a21b47934a', 'cat'),
('user3', 'd6f5a03b61b716ee50ac929152952842', 'raddit');

-- --------------------------------------------------------

--
-- テーブルの構造 `table3`
--

CREATE TABLE `table3` (
  `ban` int(11) NOT NULL,
  `com` varchar(256) NOT NULL,
  `nam` varchar(128) NOT NULL,
  `dat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `table3`
--

INSERT INTO `table3` (`ban`, `com`, `nam`, `dat`) VALUES
(1, 'こめんとしちゃった', 'user1', '2021-04-30 13:28:30'),
(2, 'いいっすね！！', 'user1', '2021-04-30 14:42:45');

-- --------------------------------------------------------

--
-- テーブルの構造 `table4`
--

CREATE TABLE `table4` (
  `ban` int(11) NOT NULL,
  `nam` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `table4`
--

INSERT INTO `table4` (`ban`, `nam`) VALUES
(2, 'user1'),
(2, 'いいね太郎'),
(2, '神原小太郎'),
(2, '高田小太郎'),
(3, '神原');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`ban`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `table1`
--
ALTER TABLE `table1`
  MODIFY `ban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
