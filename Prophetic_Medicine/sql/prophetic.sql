-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 02:28 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prophetic`
--

-- --------------------------------------------------------

--
-- Table structure for table `body`
--

CREATE TABLE `body` (
  `ID` int(11) NOT NULL,
  `PrescriptionID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TreatmentName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Uses` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Source` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `IbnQayyim` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Path` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `body`
--

INSERT INTO `body` (`ID`, `PrescriptionID`, `Title`, `TreatmentName`, `Uses`, `Source`, `IbnQayyim`, `Path`) VALUES
(1, '1', ' الدماغ', ' الحجامة', ' ورد في السنة أن الحجامة مفيدة لعلاج العديد من الأمراض المرتبطة بالدماغ مثل الصداع.', ' يقول النبي صلى الله عليه وسلم: \"إن أفضل ما تداويتم به الحجامة\"', ' ذكر ابن القيم في كتابه الطب النبوي فوائد الحجامة في علاج الأمراض التي تصيب الرأس، مثل الصداع النصفي.', '../imgs/body1_hijama.jpg'),
(2, '1', ' الدماغ', ' العسل', ' العسل مفيد للدماغ وتقوية الذاكرة', ' جاء في القرآن الكريم: \"يخرج من بطونها شراب مختلف ألوانه فيه شفاء للناس\" (النحل: 69)', ' قال ابن القيم في كتابه زاد المعاد: وأما هديه في الشراب فمن أكمل هدي يحفظ به الصحة، فإنه كان يشرب العسل الممزوج بالماء البارد، وفي هذا من حفظ الصحة ما لا يهتدي إلى معرفته إلا أفاضل الأطباء.', '../imgs/body2_honey.jpg'),
(3, '2', ' الرئتين', ' الزنجبيل والعسل', ' يساعد العسل والزنجبيل في تعزيز صحة الجهاز التنفسي. قال ابن القيم إن العسل يساعد على طرد البلغم وتهدئة الجهاز التنفسي', ' قال تعالى: {وَيُسْقَوْنَ فِيهَا كَأْساً كَانَ مِزَاجُهَا زَنجَبِيلاً} [الإنسان: ١٧]', ' قال ابن القيم: الزنجبيل معين على الهضم، ملين للبطن، نافع من سدد الكبد العارضة عن البرد والرطوبة ومن ظلمة البصر وصالح للمعدة', '../imgs/body3_honeyGinger .jpg'),
(4, '3', ' القلب', ' العسل', ' يعتبر العسل من الأطعمة التي تقوي القلب.', ' في الحديث الشريف، قال النبي صلى الله عليه وسلم: \"عليكم بالشفائين: العسل والقرآن\".', '  قال ابن القيم في كتابه زاد المعاد: وأما هديه في الشراب فمن أكمل هدي يحفظ به الصحة، فإنه كان يشرب العسل الممزوج بالماء البارد، وفي هذا من حفظ الصحة ما لا يهتدي إلى معرفته إلا أفاضل الأطباء.', '../imgs/body2_honey.jpg'),
(5, '3', ' القلب', ' التين والزيتون', ' الزيتون مفيد للقلب والشرايين.', ' ورد في القرآن: \"والتين والزيتون\" (التين: 1)', ' قال الإمام ابن القيم: زيت الزيتون، ينفع من السموم، ويطلق البطن ويخرج الديدان وجميع أصنافه ملينة للبشرة، تبطئ الشيب.', '../imgs/body4_FigOlive.jpg'),
(6, '4', ' الكبد', ' الحبة السوداء', ' مواجهة البرد وتفكك حصوات الكلى والبروستاتا ', ' قال النبي صلى الله عليه وسلم: \"في الحبة السوداء شفاء من كل داء إلا السام\".', ' ذكر ابن القيم فوائد الحبة السوداء، حيث قال: إن الحبة السوداء تساعد على مواجهة مجموعة واسعة من الأمراض كالبرد وتفكك حصوات الكلى والبروستاتا وتقضي على الديدان.', '../imgs/body5_BlackSeed.jpg'),
(7, '4', ' الكبد', ' التمر', '  تعزيز الطاقة، مساعدة الهضم، وصحة الكبد', ' قال الله تعالي في سورة مريم \"وَهُزِّي إِلَيْكِ بِجِذْعِ النَّخْلَةِ تُسَاقِطْ عَلَيْكِ رُطَبًا جَنِيًّا، 26 فَكُلِي وَاشْرَبِي وَقَرِّي عَيْنًا\"', ' ذكر ابن القيم في \"كتابه الطب النبوي\" أن التمر يعزز صحة الكبد ويحميه من التلف.', '../imgs/medicine4.png'),
(8, '4', ' الكبد', ' العسل', ' العسل مفيد لصحة الكبد', ' قال النبي صلى الله عليه وسلم: \"الشفاء في ثلاث: شربة عسل، وشرطة محجم، وكية نار\"', '  قال ابن القيم في كتابه زاد المعاد: وأما هديه في الشراب فمن أكمل هدي يحفظ به الصحة، فإنه كان يشرب العسل الممزوج بالماء البارد، وفي هذا من حفظ الصحة ما لا يهتدي إلى معرفته إلا أفاضل الأطباء.', '../imgs/body2_honey.jpg'),
(9, '5', ' المعدة', ' الخل', ' مفيد للمعدة والجهاز الهضمي', ' قال النبي صلى الله عليه وسلم: \"نعم الإدام الخل\"', ' الاعتدال في الطعام*: قال النبي صلى الله عليه وسلم: \"ما ملأ آدمي وعاءً شرًا من بطن\"', '../imgs/body6_vinegar.jpg'),
(10, '6', ' الأمعاء', ' الحبة السوداء', ' تساعد في مواجهة البرد وتفكك حصوات الكلى والبروستاتا ', ' قال النبي صلى الله عليه وسلم: \"في الحبة السوداء شفاء من كل داء إلا السام\"', ' ذكر ابن القيم أن الحبة السوداء مفيدة لتنظيف الأمعاء ودعم  الهضم', '../imgs/body5_BlackSeed.jpg'),
(11, '6', ' الأمعاء', ' التين', ' يعتبر التين ملين طبيعي ويساعد على الهضم وتحسين صحة الأمعاء', ' اقسم سبحانه وتعالى في القران الكريم بالتين والزيتون في سورة التين \" والتين والزيتون وطور سنين \" وقسم الله لا يكون الا بشيء عظيم', ' قال الإمام ابن القيم: زيت الزيتون، ينفع من السموم، ويطلق البطن ويخرج الديدان وجميع أصنافه ملينة للبشرة، تبطئ الشيب', '../imgs/body7_figs.jpg'),
(12, '7', ' البنكرياس', ' العسل والتمر', ' لتوصية النبوية بالاعتدال في تناول الأطعمة الحلوة والاعتماد على الفاكهة مثل التمر التي تساعد في تنظيم مستوى السكر', ' وصّى عليه الصلاة والسلام بالتمر؛ حيث قال: (من تصبّح بسبع تمرات لا يصيبه في هذا اليوم سم ولا سحر)', ' ذكر ابن القيم فوائد العسل والتمر في تنظيم الهضم والتمثيل الغذائي، مما ينعكس بشكل إيجابي على صحة البنكرياس', '../imgs/body8_datesHoney.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Session` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Details` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Path` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Path1` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`ID`, `Date`, `Name`, `Description`, `Session`, `Details`, `Path`, `Path1`) VALUES
(1, '2024-10-09', ' Abdallah', ' Problem in Lungs', ' 15 Minutes', ' Problem in Lungs', '../imgs/test.jpg', '../imgs/test1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `ID` int(11) NOT NULL,
  `TreatmentName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Source` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Uses` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Evidence` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Path` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`ID`, `TreatmentName`, `Source`, `Description`, `Uses`, `Evidence`, `Path`) VALUES
(1, ' عسل النحل', ' القرآن (سورة النحل 16:69)', ' مادة حلوة طبيعية تنتجها النحل، معروفة بخصائصها العلاجية', ' شفاء الجروح، مشاكل الهضم، السعال، والتهابات الحلق', ' أظهرت دراسات أن للعسل خصائص مضادة للبكتيريا ويمكن أن يعزز شفاء الجروح (مثل مراجعة نُشرت في Journal of Wound Care)', '../imgs/medicine1.jpg'),
(2, ' الحبة السوداء', ' الحديث (صحيح البخاري)', ' بذور لها تاريخ طويل في الاستخدام الطبي، تُعرف بـ\"بذور البركة\"', ' الربو، الحساسية، السكري، وحالات الالتهاب', ' تشير الأبحاث إلى أن زيت الحبة السوداء له خصائص مضادة للالتهابات ومضادة للأكسدة (مثل الدراسات المنشورة في Phytotherapy Research)', '../imgs/medicine2.jpg'),
(3, ' زيت الزيتون', ' القرآن (سورة النور 24:35)', ' زيت يُستخرج من الزيتون، غني بالدهون الأحادية غير المشبعة ومضادات الأكسدة', ' صحة القلب، حالات الجلد، وصحة الهضم', ' تدعم العديد من الدراسات فوائده للقلب (مثل النتائج في The New England Journal of Medicine)', '../imgs/medicine3.jpg'),
(4, ' التمر', ' القرآن (سورة مريم 19:25)', ' ثمرة حلوة معروفة بقيمتها الغذائية العالية', ' تعزيز الطاقة، مساعدة الهضم، وصحة القلب', ' تبرز الدراسات احتوائها على نسبة عالية من الألياف وفوائدها المحتملة لصحة الجهاز الهضمي (مثل أبحاث Nutrients)', '../imgs/medicine4.png'),
(5, ' الشعير', ' السنة النبوية', ' حبوب تُستخدم في الطهي', ' يُعتبر مفيدًا لصحة الجهاز الهضمي، ويساعد في تقليل مستويات الكولسترول', ' يحتوي على ألياف قابلة للذوبان تساعد في تحسين صحة القلب', '../imgs/medicine5.jpg'),
(6, ' الزنجبيل', ' السنة النبوية', ' جذر يستخدم في الطهي والعلاج', ' يُستخدم لعلاج الغثيان والالتهابات، ويُعزز من صحة الجهاز الهضمي', ' حتوي الزنجبيل على مضادات الالتهابات وقد أظهرت الدراسات فعاليته في تخفيف الغثيان والآلام', '../imgs/medicine6.jpg'),
(7, ' التين والزيتون', ' القرآن (سورة التين: 1)', ' فوائد التين أبرز أشجار سيناء المباركة · خفض ضغط الدم المرتفع · تحسين عملية الهضم', ' الزيتون مفيد للقلب والشرايين.', ' قال الإمام ابن القيم: زيت الزيتون، ينفع من السموم، ويطلق البطن ويخرج الديدان وجميع أصنافه ملينة للبشرة، تبطئ الشيب.', '../imgs/body4_FigOlive.jpg'),
(8, ' الخل', ' السنة النبوية', ' الخَلّ هو محلول مخفف من حمض الخليك ويمكن الحصول على الخل بتخمير ثمار معظم الفواكه مثل التمر أو العنب أو التفاح', ' مفيد للمعدة والجهاز الهضمي', ' قال النبي صلى الله عليه وسلم: \"نعم الإدام الخل\"', '../imgs/body6_vinegar.jpg'),
(9, ' التين', ' القرآن (سورة التين: 1)', ' يزود التين جسم الإنسان بالفيتامينات والمعادن والألياف، وهي تحتوي على نسبة كبيرة من السكر والأملاح المعدنية الرئيسية، مثل الكالسيوم والفوسفور وفيتامين سي', ' يعتبر التين ملين طبيعي ويساعد على الهضم وتحسين صحة الأمعاء', ' اقسم سبحانه وتعالى في القران الكريم بالتين والزيتون في سورة التين \" والتين والزيتون وطور سنين \" وقسم الله لا يكون الا بشيء عظيم', '../imgs/body7_figs.jpg'),
(10, ' العسل والتمر', ' السنة النبوية', ' يُساعد العسل في تقوية جهاز المناعة ومقاومة العدوى، التمر: غني بالألياف الغذائية', ' لتوصية النبوية بالاعتدال في تناول الأطعمة الحلوة والاعتماد على الفاكهة مثل التمر التي تساعد في تنظيم مستوى السكر', ' وصّى عليه الصلاة والسلام بالتمر؛ حيث قال: (من تصبّح بسبع تمرات لا يصيبه في هذا اليوم سم ولا سحر)', '../imgs/body8_datesHoney.jpg'),
(11, ' الزنجبيل والعسل', ' القرآن الكريم', ' يُساعد شرب مشروب الزنجبيل مع العسل في التقليل من مشكلة تهيج المعدة ويعود ذلك بشكل أساسي إلى الخصائص التي يتمتع بها الزنجبيل', ' يساعد العسل والزنجبيل في تعزيز صحة الجهاز التنفسي. قال ابن القيم إن العسل يساعد على طرد البلغم وتهدئة الجهاز التنفسي', ' قال تعالى: {وَيُسْقَوْنَ فِيهَا كَأْساً كَانَ مِزَاجُهَا زَنجَبِيلاً} [الإنسان: ١٧]', '../imgs/body3_honeyGinger .jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(10) NOT NULL,
  `UserName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `UserEmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Subject` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Content` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `UserName`, `UserEmail`, `Subject`, `Content`) VALUES
(1, 'عبدالإله حامد محمد', 'Abdulelah @gmail.com', 'استفسار', 'مرحبًا لدى استفسار أرجو المساعدة'),
(2, 'عبد الإله سعيد الغامدي', 'Abdulelah@gmail.com', 'استفسار', 'مرحبًا لدى استفسار أرجو المساعدة'),
(3, 'محمد عبدالله علي', 'Mohammed@gmail.com', 'استفسار', 'مرحبًا لدى استفسار أرجو المساعدة'),
(4, 'عبدالله', 'user@gmail.com', 'استفسار أو مشكلة', 'السلام عليكم لدى استفسار');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FullName`, `City`, `Email`, `Password`, `Type`) VALUES
(1, 'عبدالإله حامد محمد', 'الباحة', 'Abdulelah @gmail.com', '2222222222', 'User'),
(2, 'فراس محمد الزهراني', 'الباحة', 'Feras@gmail.com', '3333333333', 'User'),
(3, 'محمد عبدالله علي', 'الباحة', 'Mohammed@gmail.com', '4444444444', 'User'),
(4, 'فارس عبد العزيز الزهراني', 'الباحة', 'Fares@gmail.com', '111111111111111', 'User'),
(5, 'عبدالله علي', 'أبها', 'Abdallah@gmail.com', '55555555555', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `body`
--
ALTER TABLE `body`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `body`
--
ALTER TABLE `body`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
