-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 6 月 07 日 06:23
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_l05_07`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `chat_table`
--

CREATE TABLE `chat_table` (
  `id` int(12) NOT NULL,
  `u_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_message` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `chat_table`
--

INSERT INTO `chat_table` (`id`, `u_name`, `u_message`, `created_at`) VALUES
(4, '比嘉', 'こんばんは', '2021-06-03 00:25:16'),
(5, '比嘉', 'こんばんは', '2021-06-03 00:26:49'),
(6, '田岸', 'バリカン持ってます', '2021-06-03 00:28:02'),
(7, '比嘉', 'もう髪切った', '2021-06-03 00:30:45'),
(8, '安倍', 'おはよー', '2021-06-03 11:03:40'),
(9, '森重', 'おはようございます', '2021-06-03 11:41:56'),
(10, '堀', '靴欲しい', '2021-06-03 11:46:43'),
(11, '比嘉', 'できたぜ', '2021-06-03 12:07:45'),
(12, '田岸', '何が？', '2021-06-03 12:09:14'),
(13, '比嘉', '課題が', '2021-06-03 12:14:38'),
(14, '堀', 'ふーん、すごいね', '2021-06-03 12:15:52'),
(15, '比嘉', '棒読みw', '2021-06-03 12:37:17'),
(16, '安倍', 'まじっすか', '2021-06-03 13:44:54'),
(17, '比嘉', 'マジっす！', '2021-06-03 13:45:04'),
(18, '比嘉', 'こんにちは', '2021-06-03 15:24:24'),
(19, '比嘉', '同時に更新されてくれー', '2021-06-03 16:21:59'),
(20, '安倍', 'フヒヒw\r\n別のページを開いて同時に更新させるのムズイですよ。Firebaseならいけるみたいです！', '2021-06-03 17:47:33'),
(21, '比嘉', 'はっしー、100本ノック何問までいってるの？', '2021-06-04 13:38:30'),
(22, '橋口', '63問っす！', '2021-06-04 13:38:59'),
(23, '比嘉', '橋口半端ないって！', '2021-06-04 13:40:04'),
(24, '橋口', 'タロ先生があと920問くらい作ってくれることを想定して、GItHubに上げているリポジトリ名を「js_thousand-knocks」にしてます！', '2021-06-04 13:44:13'),
(25, '比嘉', '1000本ノックwww', '2021-06-04 13:45:08'),
(26, '比嘉', '同時に更新されない', '2021-06-04 14:21:44');

-- --------------------------------------------------------

--
-- テーブルの構造 `event_table`
--

CREATE TABLE `event_table` (
  `id` int(12) NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `event_table`
--

INSERT INTO `event_table` (`id`, `name`, `event`, `writer`, `email`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '田岸さん', 'PC基礎の講義で、ノートPCのキーボードを壊した。', '若松　桃子', 'wakamatsu@example.com', 0, '2021-06-06 18:00:37', '2021-06-06 18:00:37'),
(2, '松永さん', 'DEV8との共同slackでドテチンgolferを名乗るも、すぐに改名。', '角田　光', 'kadota@example.com', 0, '2021-06-06 18:22:05', '2021-06-06 18:22:05'),
(3, '津曲さん', 'じゃんけん王決定戦で優勝してTシャツを獲得！でも、まだ１回も着てきていない。', '堀　真樹', 'hori@example.com', 0, '2021-06-06 18:23:32', '2021-06-06 18:23:32'),
(4, '松尾さん', '第３回Power Pitchで、LAB５から誰も参加者がいないという危機的状況の中、１人立ち上がり、男の中の男に！！！', '藤川　敬太', 'fujikawa@example.com', 0, '2021-06-06 18:25:33', '2021-06-06 18:25:33'),
(5, '橋口さん', '福岡遠征中に、髪切ってアッシュに染めて、更にGEEK感UP', '森重　健', 'morishige@example.com', 0, '2021-06-06 18:26:29', '2021-06-06 18:26:29'),
(6, '宮川さん', 'JS選手権のプロダクトで、ゲーム画面のマップのコードが歴史に残るものと認定された！', '安倍　将史', 'abe@example.com', 0, '2021-06-06 18:27:41', '2021-06-06 18:27:41'),
(7, '森重さん', 'JS選手権でのプレゼンが素晴らしく大好評！', '石橋　貴文', 'ishibashi@example.com', 0, '2021-06-06 18:28:52', '2021-06-06 18:28:52'),
(8, '若松さん', 'JS100本ノックで57問までクリアし、JSの女王に君臨！！！', '橋口　稔真', 'hashiguchi@example.com', 0, '2021-06-06 18:29:36', '2021-06-06 18:29:36'),
(9, '安倍さん', '酔ったままのVR初体験で大興奮！笑', '宮川 卓也', 'miyakawa@example.com', 0, '2021-06-06 18:30:38', '2021-06-06 18:30:38'),
(10, '藤川さん', 'GitHubにPC の中身を全プッシュしてしまうが、ごってぃさんのおかげで事なきを得る。', '津曲　妃佳利', 'tsumagari@example.com', 0, '2021-06-06 18:31:21', '2021-06-06 18:31:21'),
(11, '堀さん', 'じゃんけん王決定戦の後の懇親会で、本場大阪仕込みのたこ焼きを振る舞う。これがほんまもんのたこ焼きやで〜！', '田岸　将勝', 'tagishi@example.com', 0, '2021-06-06 18:33:18', '2021-06-06 18:33:18'),
(12, '上薗さん', '松尾さんがPower Pitchで初めてG\'sに来るってんで、すっぴんでタクシーに飛び乗り駆け付ける。ランチでは、松尾さんの分を奢るなど流石の姉御っぷり！！！', '松永　貢征', 'matsunaga@example.com', 0, '2021-06-06 18:34:35', '2021-06-06 18:34:35'),
(13, '角田さん', 'やっとお引っ越し完了♪業者に頼まなかったため、３日間ぐらいほとんど寝ずに作業することに。', '松尾　邦子', 'matsuo@example.com', 0, '2021-06-06 18:35:47', '2021-06-06 18:35:47'),
(14, '石橋さん', 'あだ名が「ワトソン」ってバレた。', '上薗　沙也香', 'kamizono@example.com', 0, '2021-06-06 18:36:26', '2021-06-07 13:15:36'),
(16, '上薗さん', '第４回Power Pitchで１位となり、さらに、全体でも１位に！プレゼン女王の称号を得る！！！', '森重　健', 'morishige@example.com', 0, '2021-06-07 08:26:09', '2021-06-07 08:26:09');

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_table`
--

CREATE TABLE `todo_table` (
  `id` int(12) NOT NULL,
  `todo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `todo_table`
--

INSERT INTO `todo_table` (`id`, `todo`, `deadline`, `created_at`, `updated_at`) VALUES
(1, 'PHP課題', '2021-06-01', '2021-06-01 12:06:44', '2021-06-01 12:06:44'),
(3, 'コード書く', '2021-06-03', '2021-06-01 12:09:13', '2021-06-01 12:09:13'),
(4, 'ゴミ捨て', '2021-06-02', '2021-06-01 12:09:57', '2021-06-01 12:09:57'),
(5, '課題提出', '2021-06-08', '2021-06-01 12:10:32', '2021-06-04 12:17:01'),
(6, 'ゴミ出し', '2021-06-06', '2021-06-01 12:11:42', '2021-06-01 12:11:42'),
(7, 'UX講座', '2021-06-02', '2021-06-01 12:12:22', '2021-06-01 12:12:22'),
(9, '腕立て伏せ', '2021-07-30', '2021-06-01 12:14:01', '2021-06-01 12:14:01'),
(10, 'ランニング', '2022-01-10', '2021-06-01 12:14:38', '2021-06-01 12:14:38'),
(11, '波動拳', '2021-06-15', '2021-06-01 16:26:59', '2021-06-01 16:26:59'),
(12, '昇竜拳', '2021-06-02', '2021-06-01 16:27:42', '2021-06-01 16:27:42'),
(13, '竜巻旋風脚', '2021-06-30', '2021-06-01 16:46:58', '2021-06-01 16:46:58'),
(14, 'update', '2021-06-04', '2021-06-04 11:02:39', '2021-06-04 11:02:39');

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `id` int(12) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `password`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(7, '安倍　将史', '123456', 0, 0, '2021-06-05 00:16:52', '2021-06-05 17:38:27'),
(8, '上薗　沙也香', '123456789', 0, 0, '2021-06-05 00:17:07', '2021-06-05 17:38:37'),
(9, '田岸　将勝', 'picture1', 0, 0, '2021-06-05 00:18:06', '2021-06-05 17:38:46'),
(10, '津曲　妃佳利', 'password', 0, 0, '2021-06-05 00:18:46', '2021-06-05 17:38:58'),
(11, '橋口　稔真', '12345678', 0, 0, '2021-06-05 00:19:21', '2021-06-05 17:39:09'),
(12, '比嘉　洋一', 'lkjiOIuigFTUCTytguBIYBIhghoiIJEhbjb35ct7JJ+NnoTDRbvoGAOuyvhbiEuguyRSfytdtrsuytfipuhoibnjkvvtd54w34w47t830y9-^08¥@opnoYCTewoijfJJ', 0, 0, '2021-06-05 00:20:13', '2021-06-05 00:20:13'),
(13, '藤川　敬太', '111111', 0, 0, '2021-06-05 00:20:58', '2021-06-05 17:39:21'),
(14, '堀　真樹', '123123', 0, 0, '2021-06-05 00:21:27', '2021-06-05 17:39:33'),
(15, '松尾　邦子', '12345', 0, 0, '2021-06-05 00:21:57', '2021-06-05 17:39:42'),
(16, '松永　貢征', '1234567890', 0, 0, '2021-06-05 00:22:28', '2021-06-05 17:39:52'),
(17, '宮川　卓也', 'senha', 0, 0, '2021-06-05 00:22:58', '2021-06-05 17:40:09'),
(18, '若松　桃子', '1234567', 0, 0, '2021-06-05 00:23:23', '2021-06-05 17:40:22'),
(19, '森重　健', 'qwerty', 0, 0, '2021-06-05 00:23:44', '2021-06-05 17:40:37'),
(20, '石橋 　貴文', 'watson', 0, 0, '2021-06-05 00:24:48', '2021-06-05 00:24:48'),
(21, '角田　光', 'abc123', 0, 0, '2021-06-05 00:25:21', '2021-06-05 17:40:51');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `chat_table`
--
ALTER TABLE `chat_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `event_table`
--
ALTER TABLE `event_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `todo_table`
--
ALTER TABLE `todo_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `chat_table`
--
ALTER TABLE `chat_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- テーブルの AUTO_INCREMENT `event_table`
--
ALTER TABLE `event_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- テーブルの AUTO_INCREMENT `todo_table`
--
ALTER TABLE `todo_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- テーブルの AUTO_INCREMENT `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
