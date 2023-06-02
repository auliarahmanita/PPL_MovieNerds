-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2023 at 02:32 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmovienerds`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diposting_pada` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reviewed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `tag_id`, `user_id`, `title`, `slug`, `excerpt`, `konten`, `diposting_pada`, `created_at`, `updated_at`, `reviewed`) VALUES
(1, 2, 5, 'Quasi sunt dolores autem ipsum enim.', 'doloribus-autem-nam-eius-deserunt-harum-non', 'Deleniti ipsum maxime omnis doloremque est est. Facere aut necessitatibus repellat consequuntur veniam quaerat veniam. Eos qui et non magni sunt.', '<p>Eos voluptatem suscipit fugiat harum sint voluptatum. Aspernatur possimus perspiciatis possimus quis voluptatem nobis sequi. Magni quia aliquid veritatis maiores nulla laudantium fugit aperiam.</p><p>Voluptatem occaecati tenetur delectus laudantium dignissimos. Non blanditiis vero optio soluta cumque. Et enim omnis facere officia ut. Exercitationem neque nihil aperiam maxime id. Aliquid voluptas laborum explicabo.</p><p>Sunt sit cum doloribus laudantium. Optio quia consequatur et suscipit doloribus autem.</p><p>Ut voluptas repudiandae quos voluptatem dolor eum veniam autem. Quos odit qui omnis aut itaque. Consequuntur est laudantium sunt ducimus voluptas corrupti.</p><p>Quisquam amet sapiente quisquam accusantium est neque voluptate. Ad optio voluptas cupiditate et atque blanditiis odio eaque.</p><p>Eius ut qui accusamus in animi dolor. Molestias magni a quo minus sunt aut. Labore voluptatem ipsam totam iste.</p><p>Qui dolores perferendis quisquam voluptatibus rerum unde. Id dolore dolore ad ullam illo eum et adipisci.</p><p>Corrupti et voluptate eligendi. Sit aut iste quo aut. Fuga aut nam accusamus et perferendis quaerat distinctio.</p><p>Pariatur et perspiciatis vel. Qui et alias iste quis ut. Doloribus tenetur sequi et ut. Et assumenda maxime rerum.</p><p>Ad voluptate quam possimus ullam reprehenderit autem. Eius rerum ut dolor ipsum. Assumenda aliquid ex non sequi eligendi autem.</p>', NULL, '2023-05-19 23:01:56', '2023-05-19 23:01:56', 1),
(2, 1, 4, 'Minus magnam consequatur placeat qui expedita dolorem.', 'consequatur-ullam-dolor-laudantium-et-delectus-ea-veniam', 'Iste dolorem soluta esse et id omnis culpa. Earum numquam non dolore tempora excepturi.', '<p>Laboriosam porro id ex et. Architecto et tenetur vel corporis quaerat sunt. Deleniti facere maiores iusto saepe est veniam. Maxime dicta corporis magnam in sunt. Optio possimus sunt qui et maiores sed fuga.</p><p>Veritatis quam ex rerum eveniet. Voluptatem fuga molestias sit in facere. Et fuga ab enim voluptatem quas voluptas occaecati. Et ut distinctio ipsam sint molestias quia quis.</p><p>Hic veritatis est exercitationem minus labore asperiores. Itaque quo sed quis nostrum nobis doloremque. Delectus rerum id commodi ut vitae quibusdam.</p><p>Explicabo voluptatem et ut sequi alias accusamus. Quae et nam sint odio. Hic voluptatum debitis est.</p><p>Laborum fugiat vel doloribus corporis. Hic qui corrupti ut sed quis exercitationem quaerat. Et beatae aut sint ipsam voluptatum harum. Facilis et ea aspernatur.</p><p>Aut omnis fugit quo eos adipisci nisi provident tempora. Vero sit quasi voluptatibus nihil eaque sunt. Cupiditate quo tempore eos quia rerum velit. Sapiente voluptates ratione est laborum.</p><p>Quod distinctio sed enim enim. Necessitatibus autem voluptatum enim ut eum alias quo. Aut aperiam consequatur velit rerum quasi earum et rerum. Deleniti cum qui facere pariatur distinctio deleniti.</p><p>Expedita et quia ut in laboriosam ut aliquam. Maiores quod debitis quidem aut eius eveniet. Occaecati in rerum aut quo sed deserunt. Aut ipsam impedit voluptas delectus quia.</p><p>Architecto velit et cum voluptates molestiae recusandae. Deserunt in facere ducimus labore provident nesciunt numquam. Natus enim quibusdam sit doloremque reiciendis id rerum. Adipisci voluptatum accusamus aperiam dolorem quidem facilis saepe.</p><p>Delectus debitis dolor quas occaecati nobis quis ratione. Delectus est accusantium nisi soluta. Voluptas laboriosam sit consequatur voluptate. Sunt voluptatibus qui culpa. Quidem et nihil aspernatur porro in beatae exercitationem.</p><p>Alias quae nulla nemo eligendi. Est tempore illum enim sit eaque. Non est incidunt omnis non iusto dolorum.</p><p>Ipsa molestias omnis quam quae. Similique incidunt architecto in et velit nesciunt eos ipsa. Fugit temporibus dolores et facilis qui consequatur. Ea dignissimos dignissimos qui minus itaque.</p>', NULL, '2023-05-19 23:01:56', '2023-05-19 23:01:56', 1),
(3, 2, 5, 'Id id ut in velit non.', 'ut-dolore-voluptatem-molestiae-in', 'Sit et quam molestiae consequuntur accusantium. Impedit sed accusamus eius quidem facere sit similique magni. Quibusdam dolore harum dolores quisquam unde placeat atque pariatur.', '<p>Soluta nesciunt totam consequuntur nemo corporis. Beatae odit sunt aspernatur pariatur rerum perspiciatis. Aspernatur autem adipisci molestiae earum. Et labore enim eius blanditiis labore fuga.</p><p>Asperiores laboriosam animi corrupti numquam porro. Sapiente ipsam est corrupti soluta accusantium. Tenetur natus nesciunt animi autem placeat culpa illo.</p><p>Omnis aspernatur necessitatibus nam consequuntur consectetur. Rerum laborum cumque impedit provident quia eum consequatur non. Dolore illum quisquam ut dolorem facilis.</p><p>Quia odit dolor earum eligendi deserunt voluptatibus dolores. Occaecati quia temporibus exercitationem eaque quis et. Ea in quisquam asperiores quia reiciendis ipsam.</p><p>Pariatur et veritatis mollitia voluptate. In reiciendis omnis commodi facilis iure consequatur. Eum eius est officiis harum voluptates accusantium sit. Reprehenderit temporibus rem tenetur illo in deleniti qui.</p><p>Omnis at numquam ipsa assumenda. Quo ut amet error sit officiis. Amet fuga est voluptas blanditiis consequatur architecto facere quos. Nostrum voluptatem omnis ex quibusdam enim voluptatem labore repellat.</p><p>Non totam voluptas voluptates dolorum in atque. Autem cum a aliquam sed sint. Vitae maiores voluptatem provident soluta facilis harum. Est illo ipsa sit qui ut ullam.</p><p>Fuga voluptatem voluptatem illo et delectus. Quia eveniet vero aspernatur voluptas. Aut ipsa dicta dolorum nostrum sapiente necessitatibus molestiae. Qui natus adipisci optio voluptate.</p><p>Ad qui est perspiciatis et ab. Ad qui sit sint aut laudantium alias. Qui dignissimos incidunt reprehenderit voluptas eos.</p><p>Occaecati temporibus necessitatibus maxime debitis est. Tenetur et et minus cum rem est a iste. Iure eligendi impedit corporis ad mollitia et.</p><p>Ea ad suscipit non enim ea aut. Nesciunt assumenda ipsa soluta unde dolor. Placeat eos dolor et reiciendis aut est voluptatum nihil. Quo enim consectetur hic dolor alias facere.</p><p>Beatae dolores quasi voluptatem hic tempora perferendis ex. Iusto qui nihil commodi esse perferendis. Reiciendis voluptas repellendus eos est assumenda.</p><p>Id rerum dolorem quia et voluptatem. Fuga temporibus quia laboriosam aperiam assumenda sequi eum. Dolorem debitis est quisquam provident.</p><p>Molestiae consequatur et consequatur odio harum. Voluptas dolores magnam voluptatem esse repellat ab. Aspernatur ullam quia perspiciatis iste. A dolore dignissimos cumque.</p><p>Ad animi deleniti sint rerum architecto saepe id. Voluptatem magnam animi similique praesentium illo. Facilis rem sed amet ipsa dolorum et. Est fugiat excepturi sint itaque sunt ratione repellat.</p>', NULL, '2023-05-19 23:01:56', '2023-05-19 23:01:56', 1),
(4, 2, 4, 'Nihil est enim expedita enim iste sunt unde.', 'labore-dignissimos-ut-odit-quidem-sed', 'Magnam ex dignissimos est accusamus aut sit doloremque. Cupiditate in ut velit. Exercitationem esse nihil delectus dolores voluptate.', '<p>Laboriosam porro illum quam quia animi sunt in. Qui inventore sed ut quas repellendus voluptatibus. Harum voluptas rem et soluta eligendi. Vitae ut ut non iste aperiam qui delectus quas. Et ut facilis odit laborum dolore rem et deleniti.</p><p>Natus et dolor recusandae beatae qui. Earum quia id doloremque sed. Et ipsam et debitis tempore saepe. Iste totam voluptas quia.</p><p>Eum porro itaque molestias nisi qui recusandae. Recusandae eos et totam tempora nemo quidem quidem.</p><p>Ad ut non vero laboriosam et nesciunt accusamus vitae. At voluptatem magni voluptas voluptas delectus explicabo ab. Culpa eius fugit quas ex ad quidem est quas. Odit adipisci veritatis porro explicabo ad.</p><p>Soluta mollitia earum temporibus fugit alias laborum voluptates. Nam sunt eveniet sapiente nobis. Voluptatem molestias sint unde qui et.</p><p>Rerum laudantium ut incidunt aut maxime. Iusto placeat dolor doloremque inventore. Voluptas qui asperiores a quis temporibus aut necessitatibus. Ut sed voluptate iure non animi impedit.</p><p>Tempora excepturi necessitatibus quia laborum in non. Eum dolorem minima nobis non. Ut debitis qui corporis sed accusamus et.</p><p>Consequatur rerum aliquid voluptatem laboriosam. Necessitatibus laudantium ut veritatis alias. Accusamus ad quis impedit adipisci vero velit qui reprehenderit. Deserunt quam sed aspernatur quia cumque fugit. Tempore accusamus reiciendis perspiciatis dignissimos quisquam.</p><p>In corrupti iure et minima omnis pariatur. Molestias iusto dolores doloribus architecto corporis id quis autem. Dolor ab saepe quas provident. Cum sint officiis doloribus.</p><p>Error qui culpa ut ut nostrum. Ratione voluptatum accusamus deleniti. Vel corrupti et qui delectus perspiciatis aut incidunt. Et id aut et omnis minima architecto ut.</p><p>Qui tempora culpa architecto. Exercitationem quo illum non voluptate. Molestiae et quia illum.</p><p>Tenetur laudantium commodi delectus est eius. Dolorem aut vero nulla alias. Sint quis quidem totam voluptatibus officiis nostrum ut.</p>', NULL, '2023-05-19 23:01:56', '2023-05-31 05:48:24', 1),
(7, 1, 1, 'Voluptatem nesciunt voluptas reiciendis qui nemo.', 'sequi-nostrum-accusantium-et-quam-architecto', 'Cum maxime voluptatem consequatur et eligendi dignissimos aut. Ipsam quidem beatae deleniti placeat consequatur necessitatibus quos. Iure officiis eius qui est iusto dolores.', '<p>Quam nulla enim minus aut id velit corrupti. Et labore facilis tenetur ut maxime qui sit. Aut quia nostrum temporibus sapiente quia nostrum. Iste dolore amet a consequuntur illum repellat.</p><p>Doloremque facere culpa porro tempore. Sit autem eligendi aut dolor. Reprehenderit dignissimos necessitatibus non tempore et asperiores debitis tenetur. Sapiente ullam dolor voluptas natus iure at.</p><p>Quo est vel molestias enim provident eius dolorum fugiat. Et ea libero voluptatem natus dolores. Dolorem quas officiis rerum labore accusantium ratione in.</p><p>Quaerat laudantium et cupiditate numquam qui et. Ut dolor odio et dolores. Et velit ipsum omnis earum. Deleniti incidunt suscipit in in est mollitia quo.</p><p>Alias architecto nobis non modi. Ut asperiores voluptatem vel est illo aut. Recusandae sit fugiat inventore laboriosam non nihil. Nisi illum dolor eius inventore accusamus.</p><p>Vel sunt a nostrum. Porro dolorum reprehenderit magni eos quo. Voluptatem ut quod non consequatur quia blanditiis dolor. Repellat quia voluptate tenetur hic cum.</p><p>Odio et sed delectus nulla est animi recusandae. Nemo molestiae eos doloremque enim similique alias.</p><p>Voluptas id soluta veritatis aperiam delectus placeat. Adipisci molestiae et quasi voluptatibus est. Voluptas qui et et rerum in voluptatem sed aut.</p><p>Ipsum cumque illo aut omnis dicta sed eos. Ex ad sed aut ullam. Rerum quis ea excepturi consequatur.</p><p>Libero dignissimos ut atque sequi odit est. Sequi quis minima recusandae occaecati harum qui expedita. Sit blanditiis modi rerum. Enim cum eum aut unde esse.</p><p>Officia nesciunt sint aut quis aut aperiam autem. Et omnis non aliquam ducimus. Sit beatae est nesciunt perspiciatis numquam ut. Temporibus quidem sunt esse et.</p><p>Voluptatum ut debitis sunt. Consequatur dignissimos est vitae ducimus. Non itaque amet architecto necessitatibus. Velit iure enim nostrum dolorem ab amet repellat.</p>', NULL, '2023-05-19 23:01:56', '2023-05-19 23:01:56', 0),
(8, 3, 4, 'Amet eius officia excepturi cupiditate nam totam.', 'mollitia-culpa-assumenda-et-et', 'Dolorem doloribus beatae explicabo quod harum laborum maxime et. Est dolore aut sapiente qui unde. Quam facilis quas qui illo a officiis ad.', '<p>Ut omnis et vel cum necessitatibus occaecati. Dolor nam asperiores necessitatibus id est. Omnis illum aliquam asperiores officiis et debitis. Voluptas nisi eveniet hic quam rerum aut. Quia ut perferendis praesentium vero sed autem quia.</p><p>Dolore voluptatem vero sequi non temporibus. Quae laudantium sed quia molestiae. Necessitatibus sequi in architecto quia rerum. Voluptatem officia et dolorum debitis cumque debitis. Quam debitis quas cumque incidunt dolorum culpa.</p><p>Aut ut nemo necessitatibus autem est dolores. Consectetur quisquam accusantium necessitatibus et.</p><p>Quia sed accusantium eaque incidunt reiciendis sit nihil voluptatem. Dolorum hic asperiores occaecati doloremque repudiandae. Fugiat ad commodi quaerat veniam.</p><p>Cum facere magni quo. Vel totam aut nihil dolor quia quod recusandae. Tenetur iusto ab est dolorem qui velit aut.</p><p>Qui eum voluptatem sunt nesciunt. Pariatur non voluptate qui tempore. Consequatur qui atque veritatis pariatur.</p><p>Non dolor qui est dolorem incidunt. Ut deserunt et odio. Delectus praesentium aut eum nihil molestiae non. Optio facere ut vero tempora dicta id consequatur.</p><p>Assumenda ea sed nihil qui eius deleniti. Incidunt est mollitia explicabo nemo et vero. Saepe error beatae impedit tempore. Sit est est maiores et quia numquam aut.</p><p>Totam est aliquam autem autem occaecati ex est voluptates. Voluptas consequatur ut iure quis omnis voluptate nemo. Minus eum sit est voluptatem repellat. Hic quaerat cupiditate cum quia omnis adipisci sed.</p><p>Quo dolorem tenetur eius provident beatae sed dicta est. Et odio sequi ut molestias id. Odio quis nam fugit dolorem beatae ipsa dolorem.</p><p>Illo sapiente consequuntur nulla est possimus. In assumenda praesentium quidem odit adipisci. Similique molestiae doloribus est dolor. Vel ipsam omnis est sit a maxime est sunt.</p>', NULL, '2023-05-19 23:01:56', '2023-05-19 23:01:56', 0),
(9, 3, 4, 'Vel non odit voluptate consequatur molestiae harum vel.', 'aut-porro-maiores-tenetur-nihil-voluptas-in', 'Suscipit repudiandae quia et vel nihil nihil ut. Adipisci quia voluptatem voluptate voluptas. Eligendi odit similique non ut hic nulla. Adipisci aut sed maiores quam sit.', '<p>Illo consequatur sequi nostrum voluptatum sit. Ut omnis autem libero. Sit ut alias deleniti hic minima eius alias. Qui quaerat natus at.</p><p>Facilis corporis dolor qui suscipit iure assumenda animi et. Fugiat dignissimos deserunt neque. Rerum cupiditate in blanditiis mollitia at. Aperiam odio accusantium sed animi provident sapiente assumenda.</p><p>At accusamus sint mollitia nemo similique iste. Nihil nemo et eaque quo. Rerum quia illum fugiat placeat ea consectetur. Exercitationem quia nam tempore libero corrupti.</p><p>Eaque omnis ullam sint molestiae enim hic. Iste atque et architecto occaecati quia. Dignissimos a non debitis repellendus officia excepturi tenetur. Quo optio non qui voluptatem id explicabo necessitatibus.</p><p>Maxime cupiditate nihil modi eos et. Numquam est ut dolor iste sunt et veritatis. Qui animi delectus corporis architecto perferendis nihil quaerat.</p><p>Error placeat repellendus laudantium est porro fugit. Modi dolorum porro necessitatibus adipisci repudiandae reprehenderit. In beatae incidunt beatae assumenda.</p><p>Eaque cumque et aut dolor. Quia amet quia eligendi et. Dolores ipsam ipsam autem quisquam. Vitae ipsum vel aut et nobis.</p><p>Dolor qui corporis sed aut assumenda. Sunt provident atque voluptas omnis. A iusto quasi aut consequatur. Amet ut assumenda qui rerum laboriosam optio quaerat.</p><p>Enim accusantium aut nam error sed eaque veritatis. Dolor ea et ullam fugiat. Quos aliquid nisi accusantium et.</p><p>Est quia est nihil earum. Vero ut voluptatum repellendus quia debitis dolor. Dolorem nobis possimus ut et aliquam quo sit.</p><p>Modi reiciendis quisquam molestiae porro nihil. Reprehenderit inventore aut consectetur quaerat quidem mollitia. Velit consequatur asperiores eveniet dolore reprehenderit consequatur amet vero. Quo debitis dolore in iure.</p><p>Nobis molestias libero id deserunt. Omnis et qui delectus officiis. Ullam iure saepe veritatis. Porro totam eaque facilis sint.</p>', NULL, '2023-05-19 23:01:56', '2023-05-19 23:01:56', 0),
(10, 3, 4, 'Repellendus ut sit ipsum molestiae vel neque quisquam.', 'quaerat-vitae-dolorum-itaque-a', 'Accusantium est eum nostrum vitae nulla quidem. Facere perspiciatis aliquid magni reprehenderit earum laboriosam. Qui blanditiis tempore incidunt dolores maiores perferendis.', '<p>Minima aut impedit iste in. Qui veniam non enim rem dolorem. Nemo officia omnis et. Qui ab quae enim dicta aliquam.</p><p>Cumque perferendis sed quia recusandae dolores aut. Alias deserunt saepe quisquam accusamus quos iste. Voluptas ipsa nesciunt nesciunt.</p><p>Iusto doloribus consequatur aspernatur sint delectus. Omnis consequatur necessitatibus eos vitae necessitatibus fugit architecto. Possimus eos ex magnam omnis.</p><p>Repudiandae temporibus iusto repellat dolores et nihil. Quo laboriosam iusto non saepe cumque. Ullam unde molestiae sit expedita at esse. Voluptas delectus eius officia qui nisi qui.</p><p>Suscipit quis et dolorum sequi dolorem molestiae necessitatibus. Sint ea velit quidem eum doloremque deleniti quo. Aliquid asperiores cum sed minus. Adipisci non quia neque eaque eius.</p><p>Non quo sunt repellendus sit velit voluptate quod. Sit neque similique est in incidunt autem maiores sit. Et sunt quam totam numquam rem aperiam.</p><p>Impedit aperiam dolores recusandae necessitatibus. Nihil quo vero rerum. Voluptates consequatur dignissimos et qui accusantium. Voluptatum accusamus numquam cupiditate rem. Ipsam consequatur quia fugit voluptatem.</p><p>Natus sed est officia expedita. Doloribus omnis repellat quos deleniti ipsum. Voluptatibus necessitatibus eaque ea molestiae tempora. Cumque vitae earum quibusdam ea qui. Non tempore perferendis similique doloribus quod ut numquam.</p><p>Alias veritatis aut earum recusandae. Et occaecati illum et beatae minus ut laboriosam. Exercitationem distinctio rerum explicabo aliquid. Facere illo non sed sint.</p><p>Laborum tempore quis quia quam quasi vel. Veritatis et minus magni voluptatem. Odio necessitatibus qui tempore est.</p><p>Deserunt ad suscipit commodi consequatur eaque sit. Unde at earum ab et veritatis et dignissimos hic. Est placeat minima laborum temporibus voluptas sed.</p><p>Soluta necessitatibus quia aut at numquam neque possimus. Dolor expedita amet ad sed possimus repudiandae distinctio. Qui rem quia minima ut voluptatibus. Est sint qui consequuntur.</p><p>Dolorum sapiente quia nostrum quia est blanditiis. Commodi libero aut recusandae maiores provident similique. Rerum magnam magni qui eveniet numquam expedita.</p>', NULL, '2023-05-19 23:01:56', '2023-05-19 23:01:56', 0),
(12, 1, 1, 'Mengoptimalkan Kesehatan: Menjaga Keseimbangan untuk Hidup Lebih Sehat', 'mengoptimalkan-kesehatan-menjaga-keseimbangan-untuk-hidup-lebih-sehat', 'Dalam era yang penuh kesibukan dan stres seperti sekarang, menjaga kesehatan menjadi penting lebih dari sebelumnya.', 'Dalam era yang penuh kesibukan dan stres seperti sekarang, menjaga kesehatan menjadi penting lebih dari sebelumnya. Untuk hidup dengan kualitas yang baik, menjaga kesehatan secara menyeluruh adalah kunci utama. Berikut adalah beberapa langkah penting yang dapat diambil untuk memastikan kesehatan optimal.  Pertama, pola makan yang seimbang dan nutrisi yang adekuat sangatlah penting. Memilih makanan yang kaya akan serat, vitamin, dan mineral dapat memperkuat sistem kekebalan tubuh dan menjaga berat badan yang sehat. Mengurangi konsumsi gula, garam, dan lemak jenuh juga perlu diperhatikan.  Kedua, aktivitas fisik rutin adalah bagian penting dari gaya hidup sehat. Berolahraga secara teratur dapat membantu menjaga berat badan yang sehat, meningkatkan kesehatan jantung, dan mengurangi risiko berbagai penyakit kronis seperti diabetes dan kanker. Pilihlah jenis olahraga yang Anda nikmati, seperti berjalan kaki, berlari, berenang, atau yoga, dan lakukan secara konsisten.  Selain itu, tidur yang cukup dan berkualitas juga berperan penting dalam menjaga kesehatan. Tidur yang kurang dapat memengaruhi fungsi kognitif, meningkatkan risiko obesitas, dan melemahkan sistem kekebalan tubuh. Usahakan untuk mendapatkan 7-8 jam tidur setiap malam dan ciptakan rutinitas tidur yang baik.  Terakhir, jangan lupakan pentingnya menjaga kesehatan mental. Stres dan tekanan dapat berdampak negatif pada kesehatan fisik dan emosional. Carilah cara untuk mengelola stres, seperti meditasi, pernapasan dalam, atau aktivitas yang menenangkan seperti membaca buku atau berkebun.  Dalam rangka mencapai kesehatan yang optimal, ingatlah bahwa kecil punya dampak besar. Mengadopsi perubahan kecil dalam gaya hidup sehari-hari dapat memberikan manfaat jangka panjang yang signifikan. Dengan menjaga pola makan yang sehat, berolahraga secara teratur, tidur yang cukup, dan menjaga kesehatan mental, Anda dapat memastikan kualitas hidup yang lebih baik dan mengoptimalkan kesehatan Anda secara keseluruhan.', NULL, '2023-05-31 06:15:40', '2023-05-31 06:15:40', 0),
(14, 2, 1, 'Menghadapi Tantangan Kesehatan: Mengutamakan Keseimbangan dalam Gaya Hidup Sehari-hari', 'menghadapi-tantangan-kesehatan-mengutamakan-keseimbangan-dalam-gaya-hidup-sehari-hari', 'Dalam kehidupan modern yang serba cepat dan penuh tekanan, menjaga kesehatan menjadi suatu kebutuhan yang mendesak. Artikel ini akan menguraikan beberapa langkah penting untuk menjaga kesehatan secara menyeluruh, dalam upaya mencapai keseimbangan dalam gaya hidup sehari-hari.', 'Dalam kehidupan modern yang serba cepat dan penuh tekanan, menjaga kesehatan menjadi suatu kebutuhan yang mendesak. Artikel ini akan menguraikan beberapa langkah penting untuk menjaga kesehatan secara menyeluruh, dalam upaya mencapai keseimbangan dalam gaya hidup sehari-hari.  Pertama-tama, penting untuk memperhatikan pola makan yang sehat. Makan makanan bergizi seperti sayuran, buah-buahan, biji-bijian, dan protein nabati dapat memberikan nutrisi yang diperlukan tubuh. Menghindari makanan olahan yang tinggi gula, garam, dan lemak jenuh juga sangat penting.  Selain itu, aktivitas fisik teratur merupakan elemen penting dalam menjaga kesehatan. Olahraga ringan hingga sedang seperti berjalan kaki, bersepeda, atau berenang dapat membantu memperkuat otot, meningkatkan sirkulasi darah, dan menjaga kesehatan jantung. Penting untuk mengatur waktu secara konsisten untuk bergerak setiap hari.  Tidur yang cukup dan berkualitas juga berperan vital dalam menjaga kesehatan. Tidur yang baik memberikan waktu bagi tubuh untuk', NULL, '2023-06-02 05:31:33', '2023-06-02 05:31:33', 0);

-- --------------------------------------------------------

--
-- Table structure for table `article_likes_dislikes`
--

CREATE TABLE `article_likes_dislikes` (
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `likes` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `dislikes` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_likes_dislikes`
--

INSERT INTO `article_likes_dislikes` (`article_id`, `id`, `likes`, `dislikes`) VALUES
(5, 1685539002, 1, 0),
(3, 1685548826, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `parent_comment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `parent_comment_id`, `user_id`, `comment_text`, `created_at`) VALUES
(1, 1, NULL, NULL, 'test comment', '2023-05-26 02:52:48'),
(2, 1, NULL, NULL, 'test lagi', '2023-05-26 02:54:49'),
(3, 1, 1, NULL, 'reply ini', '2023-05-26 02:54:58'),
(4, 1, 1, NULL, 'reply lagi', '2023-05-26 02:55:07'),
(5, 1, 2, NULL, 'reply ini', '2023-05-26 02:55:14'),
(6, 3, NULL, NULL, 'test ini', '2023-05-26 02:58:00'),
(7, 3, 6, NULL, 'reply', '2023-05-26 02:58:10'),
(8, 3, NULL, NULL, 'tes paret lagi', '2023-05-26 02:58:18'),
(9, 8, NULL, NULL, 'Test', '2023-05-31 09:00:41');

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
-- Table structure for table `landings`
--

CREATE TABLE `landings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2023_05_01_032528_create_articles_table', 1),
(6, '2023_05_01_080524_create_tags_table', 1),
(7, '2023_05_15_103147_create_tiers_table', 1),
(8, '2023_05_15_103912_create_tier__users_table', 1),
(9, '2023_05_18_152113_create_landings_table', 1),
(10, '2023_05_20_054335_add_photo_to_users_table', 1),
(11, '2023_05_29_163604_add_is_admin_to_users_table', 2),
(12, '2023_05_29_183947_add_reviewed_to_articles_table', 3),
(13, '2023_06_02_114655_add_exp_to_users', 4);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `username`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Andre', 'aku suka john wick', '2023-05-31 11:44:30', '2023-05-31 11:44:30'),
(2, 'anonymous', 'aku suka power ranger', '2023-05-31 11:44:49', '2023-05-31 11:44:49'),
(3, 'safiraanna', 'ahahaha', '2023-06-02 03:59:39', '2023-06-02 03:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `post_id`, `username`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'anna', 'aku juga suka johnwick', '2023-05-31 11:45:13', '2023-05-31 11:45:13'),
(2, 2, 'anna', 'aku suka kamen rider', '2023-06-02 04:00:43', '2023-06-02 04:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Technology', 'technology', '2023-05-19 23:01:56', '2023-05-19 23:01:56'),
(2, 'Health', 'health', '2023-05-19 23:01:56', '2023-05-19 23:01:56'),
(3, 'Entertainment', 'entertainment', '2023-05-19 23:01:56', '2023-05-19 23:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `tiers`
--

CREATE TABLE `tiers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiers`
--

INSERT INTO `tiers` (`id`, `tier_name`, `created_at`, `updated_at`) VALUES
(1, 'Bronze', '2023-05-19 23:01:56', '2023-05-19 23:01:56'),
(2, 'Silver', '2023-05-19 23:01:56', '2023-05-19 23:01:56'),
(3, 'Gold', '2023-05-19 23:01:56', '2023-05-19 23:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `tier__users`
--

CREATE TABLE `tier__users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tier_id` bigint(20) UNSIGNED NOT NULL,
  `exp` mediumint(9) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tier__users`
--

INSERT INTO `tier__users` (`user_id`, `tier_id`, `exp`, `created_at`, `updated_at`) VALUES
(2, 1, 81, '2023-05-19 23:01:56', '2023-05-19 23:01:56'),
(4, 3, 30, '2023-05-19 23:01:56', '2023-05-19 23:01:56'),
(2, 1, 12, '2023-05-19 23:01:56', '2023-05-19 23:01:56'),
(5, 3, 84, '2023-05-19 23:01:56', '2023-05-19 23:01:56'),
(5, 1, 23, '2023-05-19 23:01:56', '2023-05-19 23:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is-admin` tinyint(1) NOT NULL DEFAULT 0,
  `tier_id` int(25) UNSIGNED NOT NULL,
  `exp` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `photo`, `bio`, `remember_token`, `created_at`, `updated_at`, `is-admin`, `tier_id`, `exp`) VALUES
(1, 'Anna', 'safiraanna', 'annasafira2204@gmail.com', NULL, '$2y$10$gzpwPLORZWdBrCtQNEnzQuDnzPl3oucMMORYiR52EAoyLJoRndg3O', 'wSz457svy6XJYsqqLiB82aqYzp1qJbMqYBgUbOFB.jpg.jpg', 'baba', NULL, '2023-05-19 22:53:22', '2023-06-02 05:31:33', 1, 1, 30),
(2, 'Anderson Gutmann', 'brakus.rollin', 'rempel.bethany@example.net', '2023-05-19 23:01:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '<p>Voluptates in velit qui iure autem ut voluptates. Consequatur aut porro temporibus.</p><p>Ipsum explicabo voluptate ab. Possimus voluptatem asperiores dolores dolor sequi sit repellat. Ut dolor sed iusto aliquid in.</p><p>Et maxime pariatur illo et sed nam incidunt quis. Eos error sed et sunt rem ad. Repellendus ducimus omnis enim laborum velit quia blanditiis.</p>', '40PFnEAh9w', '2023-05-19 23:01:56', '2023-05-19 23:01:56', 0, 1, 0),
(3, 'Xzavier Nienow V', 'callie59', 'wunsch.monique@example.net', '2023-05-19 23:01:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '<p>Dolorem voluptatum dolor cum quis. Quos tempore ut voluptatem nihil id aut nobis.</p><p>Accusantium omnis qui sequi dolores et sint. Illo hic ut enim dolorum perferendis. Eos eligendi dolores eum magni vitae. Aliquam similique sed est ratione cum neque id.</p><p>Inventore a alias voluptatibus et architecto aut. Voluptatem vel at et repellendus laborum ut. Ut omnis ab quo et quia sint. Rerum atque similique accusamus est.</p><p>Numquam ratione minus est repudiandae aut fugit possimus. Saepe possimus consectetur corrupti sed id at. In quia numquam et quidem illo.</p><p>Consectetur molestiae iure vel ea. Quam ratione quibusdam minima incidunt.</p>', '4MD6DAjq7T', '2023-05-19 23:01:56', '2023-05-19 23:01:56', 0, 1, 0),
(4, 'Reina Keebler', 'elise.kuhn', 'rdurgan@example.net', '2023-05-19 23:01:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '<p>Repudiandae illo animi excepturi libero aperiam accusantium deleniti. Et animi repellat asperiores numquam est tempore. Dolor necessitatibus saepe corporis eveniet assumenda omnis molestias a.</p><p>Dicta quia saepe ad corrupti. Porro dolores in blanditiis ad rem similique quia itaque.</p><p>Eaque incidunt tempora maiores tempora doloribus. Est molestiae non beatae facilis voluptatem. Expedita quam accusamus illum autem aperiam repudiandae. Non iste atque assumenda fuga.</p><p>Vero voluptas eveniet eligendi animi consequatur consequatur earum. Iure beatae recusandae qui sed soluta sint ullam. Voluptatem qui laborum unde itaque qui sapiente veniam dolore. Sit voluptas sint maiores eius minima minus natus. Omnis nostrum corporis voluptatem dicta molestiae.</p>', 'aStHqPNr4d', '2023-05-19 23:01:56', '2023-05-19 23:01:56', 0, 1, 0),
(5, 'Elliott Reilly', 'nhirthe', 'frankie.adams@example.net', '2023-05-19 23:01:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '<p>Animi occaecati dolorem quia ex aut rem. Ullam quasi fugit minus aut. Consequuntur consequatur est ea ipsum aut quos aut. Voluptatum recusandae expedita nesciunt.</p><p>Placeat est voluptatem dolore. Voluptatibus reprehenderit suscipit aut autem. Temporibus reprehenderit in aspernatur quia aut. Dicta at et natus quisquam quia autem saepe.</p><p>Nihil aliquid nesciunt molestiae voluptatem eum. Ea impedit excepturi enim explicabo id. Quidem ratione maiores autem in quia. Et doloremque ipsam dolorum sequi. Neque est optio dicta id mollitia dolore omnis necessitatibus.</p><p>Veritatis ratione nostrum blanditiis debitis possimus asperiores. Sit maxime ipsam dolor et aperiam. Ipsa amet minus porro aut. Id tenetur aliquam eligendi recusandae.</p><p>Quisquam ut rerum eligendi eos in hic accusamus quae. Similique odio itaque voluptatum provident eum qui. Autem reiciendis enim error qui atque quidem sint accusantium. Ut accusantium sint non iste aut laboriosam. Quis quam asperiores et explicabo ducimus similique sequi.</p><p>Doloremque eum ab ut ea debitis voluptates. Qui quod omnis tempora consequatur omnis odio quo officia. Et suscipit nulla saepe quis laudantium eius. Nemo quisquam sint porro.</p><p>Hic quia porro aut ipsum. Laborum est doloribus id qui nemo quia sit. Aut id facere animi omnis assumenda. Illum quis et dicta est reprehenderit est. Non quibusdam explicabo voluptatem sit.</p>', 'lEU1BA5RLp', '2023-05-19 23:01:56', '2023-05-19 23:01:56', 0, 1, 0),
(6, 'Ms. Savanah Brakus III', 'antonietta.mante', 'ebeatty@example.org', '2023-05-19 23:01:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '<p>Inventore nulla dolores corrupti laudantium voluptas. Culpa et est totam consequatur commodi nemo magnam. Praesentium laborum dolor dolore ipsum maxime voluptas sit voluptatibus. Tempora modi ab fuga nam voluptas. Ut corrupti ipsam quia laborum.</p><p>Sunt quibusdam voluptas iure exercitationem hic quam. Aut ad quidem id laboriosam sit ipsum. Magni reprehenderit doloribus ab qui ipsa. Atque enim quia quibusdam dolor.</p><p>Autem vel et asperiores qui. Voluptatem a odio odit quibusdam unde quas autem. Qui consequatur perferendis velit. Non eligendi aut esse voluptatem deleniti occaecati autem.</p><p>Earum dolores nisi debitis eligendi harum eius repellat ipsum. Aut vitae et a labore dolores cum quos. Cumque numquam nihil ab et nam illo. Unde autem nemo nisi exercitationem dolores natus ea.</p>', 'pdfNWJXDmX', '2023-05-19 23:01:56', '2023-05-19 23:01:56', 0, 1, 0),
(8, 'shiroshiro', 'shirowashere', 'shiro123@gmail.com', NULL, '$2y$10$/wUbBYfw.N.ipCo5YMvlYen0bTa2P9Y7y33KxgEbCpu9rgvUwh1DO', NULL, NULL, NULL, '2023-05-29 09:52:45', '2023-05-29 09:52:45', 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `parent_comment_id` (`parent_comment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `landings`
--
ALTER TABLE `landings`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `tiers`
--
ALTER TABLE `tiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landings`
--
ALTER TABLE `landings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tiers`
--
ALTER TABLE `tiers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `article_id` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `parent_comment_id` FOREIGN KEY (`parent_comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
