-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2021 at 03:30 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daily_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`, `image`, `bio`, `phone_number`, `category`) VALUES
(1, 'uwambaje eddy', 'uwambaje@gmail.com', 'zzzz', '1613146780_1million.jpg', 'my name is eddy am the owner of daily news website.', '079656456', 'admin'),
(5, 'writer', 'admin@example.com', 'admin', 'user_icon.png', 'your biograph here', '+2500000000', 'writer');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `top_story` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `publish` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `image`, `content`, `category`, `top_story`, `date`, `publish`) VALUES
(13, 'Umutoza Mashami Vicent wasoje amasezerano ye yo gutoza Amavubi', '1613146380_masham.jpg', 'Uwari umutoza mukuru w’ikipe y’igihugu y’u Rwanda “Amavubi”, Mashami Vincent  kuri uyu wa 11 Gashyantare 2021 ni bwo amasezerano y’umwaka yari yahawe yarangiye.\r\n\r\nAmasezerano y’uyu mutoza arangiye mu gihe mu mpera za Werurwe 2021 ikipe y’u Rwanda “Amavubi” ifite imikino 2  ya nyuma mu itsinda F  mu gushaka itike ya CAN 2021.  Taliki 22 Werurwe 2021, ikipe y’u Rwanda izakina na Mozambique  i Kigali naho  taliki 30 Werurwe 2021 ikine na Cameroun iwayo.\r\n\r\nUmutoza Mashami atangaza ko  nubwo hari abavuga ko  afite amahirwe menshi yo kongererwa amasezerano yo gukomeza gutoza Amavubi we  abona nta mahirwe  afite kuko akazi   atari we ugatanga cyangwa ngo akihe.\r\n\r\nAkomeza avuga ko ku bijyanye no kwitegura Mozambique ndetse na Cameroun bahaye abakinnyi gahunda y’imyitozo bagomba gukora ku giti cyabo ndetse banabamenyesha n’igihe imikino izabera.\r\n\r\nYagize ati: “Mu byo  umutoza wese uzatoza ikipe y’igihugu azaba akeneye ni abakinnyi biteguye neza, turasaba rero  ko abakinnyi bazatangira imyiteguro kare, yaba njye cyangwa undi  mutoza akazaba afite abakinnyi bameze neza kandi  bashobora gutanga umusaruro.”\r\n\r\nUmuyobozi w’agateganyo wa Siporo muri Minisiteri ya Siporo “MINISPORTS”, Rurangayire Guy  atangaza ko  bari mu nzira zo gushaka umutoza mukuru  kandi ko mu minsi ya vuba baza kumutangaza.\r\n\r\nAgaruka ku musaruro w’umutoza Mashami Vincent, Rurangayire yavuze  ko hari ibyo yagezeho nko guhesha ikipe y’u Rwanda itike ya CHAN 2020 ndetse no kurenga amatsinda ariko ko  yari agifite indi mikino ibiri mu gushaka itike ya CAN 2021 aho  mu mikino 4 yo mu itsinda F yatoje yatsinzwe ibiri akanganya indi ibiri.\r\n\r\nKuri ubu, ikipe y’u Rwanda mu gushaka itike ya CAN 2021 iri ku mwanya wa 4 wa nyuma mu itsinda F n’amanota 2 mu gihe Cameroun iyoboye n’amanota 10 igakurikirwa na Mozambique na Cap Vert n’amanota 4.\r\n\r\nUmutoza Mashami yahawe amasezerano  nk’umutoza mukuru muri Kanama 2018 asimbuye Antoine Hey. Muri Kamena 2019 yahawe amasezerano y’amezi 3 nyuma muri Gashyantare 2020 ahabwa amasezerano y’umwaka.', 'sports', 'false', '2021-02-12', 'false'),
(14, 'Gabby Kamnzi yashyize hanze indirimbo nshya yise \"Emmanuel\"', '1613146441_arton117987.jpg', 'Umuramyi Gaby Irene Kamanzi mu mpera z’iki cyumweru yasohoye indirimbo  “Emanuel” izaba iri kuri alubumu ateganya gusohora umwaka utaha  wa 2021.\r\n\r\nIndirimbo “Emmanuel” Gaby yashyize hanze avuga ko amajwi yayo yakozwe na Producer Sam igakorerwa muri River Studio  naho amashusho yakozwe na Producer Raheem Bob Chris.\r\n\r\nGaby avuga ko indirimbo ikubiyemo ubutumwa bushishikariza abantu gusabana n’Imana bazirikana ko ibari hafi mu buzima bwose banyuramo kandi ko badakwiye kwiheba.\r\n\r\nYagize ati : “Muri iyi ndirimbo ndashaka kwibutsa abantu ko Imana iri kumwe na bo, ibyo banyuramo byose n’Imana ibaba hafi kandi ntihinduka. Yiteguye kumva amasengesho kandi ni Imana izakomeza kubana na bo. Icyo nabwira abantu ni uko buri muntu wese yakwizera Yesu, tumuture ibituremereye n’ibitubabaza, ari hafi yacu’’.\r\n\r\nGaby yaherukaga gukora indirimbo  “Mu mutima” yakoranye n’umuhanzi w’umugande witwa Holy Keane Amooti. Indirimbo  “Mu mutima” na “Emmanuel” ziri kuri alubumu ye ya kabiri biteganyijwe ko azazishyira hanze umwaka 2020.\r\n\r\nUyu muhanzi yamenyekanye cyane mu Rwanda no mu karere k’ibiyaga bigari biturutse ku buhanga bwo kuririmba afite ndetse no kuyobora abandi mu kuramya no guhimbaza Imana.\r\n\r\nAzwi cyane kandi mu ndirimbo nyinshi zagiye zikundwa nka  “Amahoro” “Wowe”, “Arankunda” n’izindi.\r\n\r\nGaby aherutse gutangira gahunda yo kugira inama abantu bakunda kuririmba kandi bafite impano, aho asigaye agaragara ku rubuga rwe rwa youtube “Gaby Kamanzi’’.\r\n\r\nAbigisha ndetse abagira inama mu byerekeranye n’imiririmbire ni uburyo bwiza abantu benshi bakomeje gukunda.\r\n\r\nGaby Kamanzi avuka mu muryango w’abana batandatu akaba ari umwana wa gatanu mu muryango we. Yakuriye mu muryango w’abahanzi harimo Se umubyara, mama we, na murumuna we, Pastor Lysette Karasira.\r\n\r\nAbahanzi bo hanze y’u Rwanda, Gaby avuga ko akunda cyane umunya Australia Darlene Zschech ndetse n’umunye Congo, Amanda Malela umwe mu bahanzikazi bagezweho muri Congo batuye ku mugabane w’i Burayi.', 'music', 'false', '2021-02-12', 'false'),
(15, '“Muhumure Rusesabagina azabona ubutabera”, Abanyarwanda basubiza EU', '1613146550_Et7ZFHlXMAAxtHA.jpg', '“Uru ni u Rwanda rwa 2021, si urwa 1921”, ayo ni amwe mu magambo yavuzwe n’umwe mu Banyarwanda bababajwe n’uburyo Inteko Ishinga Amategeko y’Ibihugu bigize Umuryango w’Ubumwe bw’u Burayi (EU) yicaye igafata umwanzuro usabira ubutabera Rusesabagina Paul ukurikiranyweho ibyaha by’iterabwoba mu Rwanda.\r\n\r\nIcyateye kwibaza byinshi ku mwanya iyo Nteko yafashe mu kwiga ku butabera babona budahagije kuri Rusesabagina, ni uko akomeje kugirirwa impuhwe nk’urimo gukorerwa ihohoterwa mu gihe akurikiranyweho ibyaha by’iterabwoba birimo ibyo na we yiyemereye, ndetse hakaba hari n’ibimenyetso simusiga bigaragaza uruhare rwe mu migambi mibisha ku Rwanda.\r\n\r\nKu wa Kane tariki ya 11 Gashyantare ni bwo Inteko Ishinga Amategeko ya EU yavuze ko yamaganye ifatwa rya Rusesabagina isaba ko hakorwa iperereza mpuzamahanga.\r\n\r\nUmwe mu bagize iyo Nteko Ishinga amategeko Hilde Vautmans, yavuze amagambo yatumye Abanyarwanda bamagana uburyo Inteko Ishinga Amategeko ya EU yihandagaje igasabira ubutabera bubogamiye ku muntu ukurikiranyweho iterabwoba yirengagije inzirakarengane z’Abanyarwanda basize ubuzima mu bitero by’inyeshyamba za FLN zashinzwe na MRCD iyobowe na Rusesabagina.\r\n\r\nUbwo iyo Nteko ya EU yateranaga, Hilde Vautmans yagize ati: “Uyu munsi turasabira Rusesabagina ubutabera. Turamusabira ubutabera bidatewe n’uko ari icyamamare, cyangwa ko yatwaye imidali itandukanye y’amahoro, ahubwo bitewe n’uko abikwiye nk’undi uwo ari we wese [ufite ubwenegihugu bw’ibihugu by’u Burayi]…”\r\n\r\nUwo mudepite yahise anyuza ubwo butumwa no ku mbuga nkoranyambaga, akomeza agira ati: “Nta bwo tuzi uko Rusesabagina yageze mu Rwanda, ariko icyo tuzi ni uko atashoboraga kwijyanayo ku bushake atanamenyesheje umuryango we. Uyu mwanzuro dutoye, twizeye ko uzongera igitutu mpuzamahanga ku buyobozi bw’u Rwanda kugira ngo hakorwe iperereza ku buryo yoherejwe mu Rwanda.”\r\n\r\nAyo magambo yasembuye amarangamutima atandukanye ku Banyarwanda n’Abanyamahanga bazi Rusesabagina, amateka ye yuzuye kwiyoberanya, n’ibyo yakoze ari na byo akurikiranyweho kugeza ubu.\r\n\r\nPaul Rusesabagina wari Perezida w’Impuzamashyaka (MRCD) ashinjwa ibyaha 9 birimo iterabwoba, kurema no gutera inkunga imitwe irwanya u Rwanda.\r\n\r\nKuri ubu akurikiranywe n’inkiko z’u Rwanda hamwe na bagenzi be 19 barimo Nsabimana Callixte na Herman Nsengimana babaye abavugizi b’umutwe wa FLN washinzwe na MRCD akiri ku buyobozi bwayo.\r\n\r\nUbushinjacyaha buhamya ko bufite ibihamya simusiga, byagiye bikusanywa ku bufatanye n’umuryango mpuzamahanga, bishimangira uruhare ndakuka yagize mu byaha by’iterabwoba byakorewe ku butaka bw’u Rwanda.\r\n\r\nU Rwanda ntirwahwemye kugaragaza ko kuba Rusesabagina yaragizwe icyamamare mu nkuru mpimbano yari igamije gukorera amafaranga ntacyo bitwaye, ahubwo ibyaha akurikiranyweho bidashobora kurenzwa ingohe kubera ubwamamare bwe, cyangwa kuba afite ubwenegihugu bw’ikindi gihugu.\r\n\r\nUmwe mu Banyarwanda bakoresha imbuga nkoranyambaga basubije Hilde Vautmans, bagize bati: “Nyakubahwa Hilde Vautmans, nagira ngo nkwibutse ko u Rwanda atari umudugudu uyobora, aho wavuga cyangwa ugakora ibyo wishakiye. Iyo mba wowe nari kuba mvuganira inzirakarengane zishwe n’ibyihebe bya Rusesabagina. Rekera aho kuba ijwi ry’abicanyi.”', 'history', 'false', '2021-02-12', 'false'),
(16, 'Umupadiri wo muri Diyosezi ya Kabgayi afungiwe gusambanya umuhungu', '1613146633_261E05CA-175C-401D-9F0D-29003018CCDD.jpg', 'Urwego rw’Igihugu rw’Ubugenzacyaha (RIB) rwatangaje ko rwataye muri yombi Padiri Habimfura Jean Baptiste wo muri Paruwasi ya Ntarabana muri Diyosezi ya Kabgayi. \r\n\r\nAkurikiranyweho icyaha cyo gusambanya umwana w’umuhungu w’imyaka 17 wabakoreraga.\r\n\r\nRIB itangaza ko kuri uyu wa Kane tariki ya 12 Gashyantare ari bwo uyu mupadiri yafashwe ageze ku  ku mupaka wa Rusumo mu Karere ka  Kirehe, agerageza gutoroka.', 'politics', 'false', '2021-02-12', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
