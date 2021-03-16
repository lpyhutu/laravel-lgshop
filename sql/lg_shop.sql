-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-03-04 16:22:27
-- 服务器版本： 5.7.14
-- PHP 版本： 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `lg_shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `lg_admin`
--

CREATE TABLE `lg_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `lg_admin`
--

INSERT INTO `lg_admin` (`id`, `name`, `password`) VALUES
(16, 'asdf', 'asdf'),
(17, 'hutu23', 'aa'),
(18, 'asdf', 'asdfasd'),
(19, 'wewad', 'asdfe'),
(20, 'hutu23a', 'AAA'),
(21, 'asdf', 'asdf'),
(22, 'asdf', 'sadf'),
(23, '323', 'a2f'),
(27, 'asdf3', '333'),
(26, 'asdf', 'asdf'),
(25, 'asdfasd', 'asdf'),
(24, 'asdfa', 'asdfasd'),
(28, 'www', 'www'),
(29, 'asdf', 'asdfas'),
(30, 'HUTU', 'AA');

-- --------------------------------------------------------

--
-- 表的结构 `lg_advertisement`
--

CREATE TABLE `lg_advertisement` (
  `id` int(4) NOT NULL COMMENT '公告id',
  `title` varchar(200) NOT NULL COMMENT '公告标题',
  `content` text NOT NULL COMMENT '公告内容',
  `addate` varchar(20) NOT NULL COMMENT '公告时间',
  `displayType` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `lg_advertisement`
--

INSERT INTO `lg_advertisement` (`id`, `title`, `content`, `addate`, `displayType`) VALUES
(1, '家庭清洁', '通过专业保洁人员使用清洁设备、工具和药剂，对居室内地面、墙面、顶棚、阳台、厨房、卫生间等部位进行清扫保洁：对门窗、玻璃、灶具、洁具、家具等进行针对性的处理，以达到环境清洁、杀菌防腐、物品保养的目的的一项活动。家庭住宅环境保洁，如：庭院、地面、墙面、顶棚、阳台、厨房、卫生间、门窗、隔断、护栏等保洁及 室内消 毒、室内空气治理、病虫害防治等。狭义上的家居保洁仅指家庭住宅环境保洁。开荒是清洁工程之首，由于建筑工程中常常会遗留下许多垃圾污垢，各种地面石头，墙壁上会遗留下水泥浆块、油漆、玻璃胶、水污、锈迹等，这些都必须在开荒工作中清洗干净，所以它是一项最艰苦、最复杂、最费神的工作，开荒工程的好坏，直接影响到日后保洁工作的质量和档次，所以做好开荒有着相当重要的要求。旋转拖把是人类的一伟大发明！在没买之前我真的不太愿意拖地，基本上都交给老公去做，一是要用很大力气才能拧干拖把头的水，二是拖把头老是洗不干净，但是旋转拖把解决了这两个问题。只需要上下提动拖把杆，就能甩干水分和脏东西。3M大品牌质量比较放心，而且配置了两种拖头，我一般主要用圆拖头，平拖板用来拖房间的木地板。最近天猫在做双十一预售，比我年初买便宜了30块左右。不知道大家有没有用过粘掉大衣上面的毛的滚筒贴？这个的原理一样，不过是加上了长手柄。没有这个之前我不敢在客厅放大的地毯，一想起清洁就头疼。有了这个，每周我就在地毯上滚滚滚，没几下就能把地毯上面的头发，小碎屑灰尘都粘在上面，然后撕掉即可。', '2020-2-27', 1),
(3, '爆款直降', '联想小新700电竞版 15.6英寸超薄游戏本（I5-6300H 4G内存 500G 4G独显 全高清IPS屏 Win10）黑,尼康（Nikon）D7100 单反套机（ AF-S 18-140mmf/3.5-5.6G ED VR 镜头）(官方标配),联想小新700电竞版 15.6英寸超薄游戏本（I5-6300H 4G内存 500G 4G独显 全高清IPS屏 Win10）黑,尼康（Nikon）D7100 单反套机（ AF-S 18-140mmf/3.5-5.6G ED VR 镜头）(官方标配),联想小新700电竞版 15.6英寸超薄游戏本（I5-6300H 4G内存 500G 4G独显 全高清IPS屏 Win10）黑,尼康（Nikon）D7100 单反套机（ AF-S 18-140mmf/3.5-5.6G ED VR 镜头）(官方标配)联想小新700电竞版 15.6英寸超薄游戏本（I5-6300H 4G内存 500G 4G独显 全高清IPS屏 Win10）黑,尼康（Nikon）D7100 单反套机（ AF-S 18-140mmf/3.5-5.6G ED VR 镜头）(官方标配),联想小新700电竞版 15.6英寸超薄游戏本（I5-6300H 4G内存 500G 4G独显 全高清IPS屏 Win10）黑,尼康（Nikon）D7100 单反套机（ AF-S 18-140mmf/3.5-5.6G ED VR 镜头）(官方标配),联想小新700电竞版 15.6英寸超薄游戏本（I5-6300H 4G内存 500G 4G独显 全高清IPS屏 Win10）黑,尼康（Nikon）D7100 单反套机（ AF-S 18-140mmf/3.5-5.6G ED VR 镜头）(官方标配)', '2020-2-27', 1),
(5, '纸品百货', '五月花婴儿柔特级柔厚3层120抽24包/箱抽纸 纸巾 雷达电热蚊香液2个无线器+4瓶蚊香液 共272晚驱蚊威猛先生 厨房重油污净 柠檬 双包装 500g+420g五月花婴儿柔特级柔厚3层120抽24包/箱抽纸 纸巾 雷达电热蚊香液2个无线器+4瓶蚊香液 共272晚驱蚊威猛先生 厨房重油污净 柠檬 双包装 500g+420g五月花婴儿柔特级柔厚3层120抽24包/箱抽纸 纸巾 雷达电热蚊香液2个无线器+4瓶蚊香液 共272晚驱蚊\r\n威猛先生 厨房重油污净 柠檬 双包500g+420g', '2020-2-27', 1),
(7, '居家优品', '百富帝1.5米竹席凉席双面席 折叠加厚竹凉席空调席子lovo罗莱生活出品夏凉空调薄被芯被子防螨纤维夏被Joyoung/九阳 JYZ-D68全自动迷你果蔬水果榨汁机妙然大号脏衣篮收纳桶棉麻脏衣篓收纳筐防水洗衣篮百富帝1.5米竹席凉席双面席 折叠加厚竹凉席空调席子lovo罗莱生活出品夏凉空调薄被芯被子防螨纤维夏被\r\nJoyoung/九阳 JYZ-D68全自动迷你果蔬水果榨汁机妙然大号脏衣篮收纳桶棉麻脏衣篓收纳筐防水洗衣篮', '2020-2-27', 1),
(8, '潮流前线', 'MO&Co.个性字母标语装饰短袖露背T恤连衣裙MA172DRS204 mocoMO&Co.镂空切口字母套头圆领短袖纯棉宽松T恤MA172TEE212 moco\r\n撞色赛车标语绣章腰带休闲A字阔腿九分MA172PAT102 moco.圆领错位条纹拼接不规则开衩衣摆短袖T恤MA171TEE224 mocoMO&Co.个性字母标语装饰短袖露背T恤连衣MA172DRS204 mocoMO&Co.镂空切口字母套头圆领短袖纯棉宽松T恤MA172TEE212 moco撞色赛车标语绣章腰带休闲A字阔腿九分裤MA172PAT102 moco.圆领错位条纹拼接不规则开衩衣摆短TMA171TEE224 moco', '2020-2-27', 1),
(10, '手机酷玩', '【预售】Meizu/魅族 魅蓝E2 全网通正面指纹快充高性能4G智能手机4月29日10点 新品开售 享6期免息Xiaomi/小米 小米MIX 尊享版 现货全面屏概念4g智能拍照手机6.4\"全面屏概念 陶瓷机身 镀金修饰<现货正品|9期免息>Letv/乐视 乐Pro3 双摄AI版全网通4G智能手机含1个月乐视会员|9期免息0首付【售罄，同款R9s火爆抢购中！】OPPO R9s清新绿全网通李易峰微电影同款手机 付款后7天内发货【预售】Meizu/魅族 魅蓝E2 全网通正面指纹快充高性能4G智能手机4月29日10点 新品开售 享6期免息Xiaomi/小米 小米MIX 尊享版 现货全面屏概念4g智能拍照手机6.4\"全面屏概念 陶瓷机身 镀金修饰<现货正品|9期免息>Letv/乐视 乐Pro3 双摄AI版全网通4G智能手机含1个月乐视会员|9期免息0首付【售罄，同款R9s火爆抢购中！】OPPO R9s清新绿全网通李易峰微电影同款手机 付款后7天内发货', '2020-2-27', 1),
(2, '品质生活', '品质生活表示人们日常生活的品位和质量，包括经济生活品质、文化生活品质、政治生活品质、社会生活品质、环境生活品质“五大品质”。追求生活品质的提高，不仅体现了追求提高生活的质量，更重要的是体现了个人对美好生活[1]  的追求，品质生活又可以分为精神品质生活和物质品质生活。生活就是需要想的美.品质生活是让繁琐的具象的生活呈现出生活艺术的特征，又反映出生活中的人对生活的热爱和把握，以及对生活游刃有余充满乐趣的一种状态。“轻”代表的是一种优雅态度，低调、舒适，却无损高贵与雅致；“奢”指的是奢华。奢华并非琳琅满目的blingbling、或动辄上万的标价和暴发户富二代的消费水平，而是一种态度，一种不让人有压力但又追求品质和精致生活的状态。正如最好的婚姻状态是“半糖主义”――彼此给对方相对自由的空间，才能领略婚姻的真谛。时尚亦是如此，轻奢范是拥有高雅的时尚态度，并在经济范围许可的情况下，追求高品质的生活。轻奢品牌，在美国被称为BetterBrand，意为一个品牌可以使你更自信更美丽，门槛是那些300美元左右的单品。相比跑车、豪宅，小件奢侈品似乎更能体现什么叫做“私人物品”，轻奢生活似乎才能真正展示奢侈的细节风貌，它不仅代表一种精品的生活方式，更触及高质量生活的每一个神经末梢，而且绝非“遥不可及”。说白了，轻奢是一种“没负担却有品质”的生活态度。人们并非追求隆重的奢侈，而是愿意为了个性、舒适和时尚度付出相对可控的“更高价格”。这本是一件好事，在可承担的范围内消费与之匹配的商品，获得心灵与精神的极大满足，从而提升自信。', '2020-2-27', 1),
(6, '国际海购', '英国jellycat小男孩幼儿童女孩Cordy Roy大象毛绒玩具公仔1-2周岁原装进口 可爱正品 陪伴宝宝 超级柔软英国jellycat小男孩幼儿童女孩Cordy Roy大象毛绒玩具公仔1-2周岁\r\n原装进口 可爱正品 陪伴宝宝 超级柔软英国jellycat小男孩幼儿童女孩Cordy Roy大象毛绒玩具公仔1-2周岁原装进口 可爱正品 陪伴宝宝 超级柔软英国jellycat小男孩幼儿童女孩Cordy Roy大象毛绒玩具公仔1-2周岁原装进口 可爱正品 陪伴宝宝 超级柔软英jellycat小男孩幼儿童女孩Cordy Roy大象毛绒玩具公仔1-2周岁原装进口 可爱正品 陪伴宝宝 超级柔软英国jellycat小男孩幼儿童女孩CordyRoy大象毛绒玩具公仔1-2周岁原装进口 可爱正品 陪伴宝宝 超级柔软英jellycat小男孩幼儿童女孩Cordy Roy大象毛绒玩具仔1-2周岁原装进口 可爱正品 陪伴宝宝 超级柔软英jellycat小男孩幼儿童女孩Cordy Roy大象毛绒玩具公仔1-2周岁原装进口 可爱正品 陪伴宝宝 超级柔软英国jellycat小男孩幼儿童女孩Cordy Roy大象毛绒玩具公仔1-2周岁原装进口 可爱正品 陪伴宝宝 超级柔软', '2020-2-27', 1),
(11, '个性推荐', '辉乐牌美国进口Meganfarm美耕庄园蔓越莓干3*500g喝酒喝茶 零食烘焙 健康美味 发货神速辉乐牌美国进口Meganfarm美耕庄园蔓越莓干3*500g喝酒喝茶 零食烘焙 健康美味 发货神速辉乐牌美国进口Meganfarm美耕庄园蔓越莓干3*500g喝酒喝茶 零食烘焙 健康美味 发货神速辉乐牌美国进口Meganfarm美耕庄园蔓越莓干3*500g喝酒喝茶 零食烘焙 健康美味 发货神速辉乐牌美国进口Meganfarm美耕庄园蔓越莓干3*500g喝酒喝茶 零食烘焙 健康美味 发货神速辉乐牌美国进口Meganfarm美耕庄园蔓越莓干3*500g喝酒喝茶 零食烘焙 健康美味 发货神速辉乐牌美国进口Meganfarm美耕庄园蔓越莓干3*500g喝酒喝茶 零食烘焙 健康美味 发货神速辉乐牌美国进口Meganfarm美耕庄园蔓越莓干3*500g喝酒喝茶 零食烘焙 健康美味 发货神速', '2020-2-27', 1);

-- --------------------------------------------------------

--
-- 表的结构 `lg_car`
--

CREATE TABLE `lg_car` (
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `goodsname` varchar(30) DEFAULT NULL,
  `goodsprice` float DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `pCont` varchar(20) DEFAULT NULL,
  `sCont` varchar(20) DEFAULT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `lg_car`
--

INSERT INTO `lg_car` (`cid`, `sid`, `goodsname`, `goodsprice`, `num`, `photo`, `pCont`, `sCont`, `username`) VALUES
(10, 5, '短袖针织T恤', 299, 1, 'upimages/good12.jpg', '73.26 X3期', 'L', 'hutu');

-- --------------------------------------------------------

--
-- 表的结构 `lg_collection`
--

CREATE TABLE `lg_collection` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `goodsname` varchar(20) NOT NULL,
  `goodsprice` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

-- --------------------------------------------------------

--
-- 表的结构 `lg_goods`
--

CREATE TABLE `lg_goods` (
  `goodsid` int(11) NOT NULL,
  `typeid` int(11) NOT NULL,
  `norms` int(11) NOT NULL,
  `goodsname` varchar(50) NOT NULL,
  `size` varchar(30) NOT NULL,
  `installment` varchar(50) NOT NULL,
  `prodate` varchar(12) NOT NULL,
  `goodsprice` varchar(10) NOT NULL,
  `vipprice` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `introduction` varchar(1000) NOT NULL,
  `recommend` int(5) NOT NULL,
  `newgoods` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `lg_goods`
--

INSERT INTO `lg_goods` (`goodsid`, `typeid`, `norms`, `goodsname`, `size`, `installment`, `prodate`, `goodsprice`, `vipprice`, `photo`, `introduction`, `recommend`, `newgoods`) VALUES
(5, 2, 2012001, '短袖针织T恤', 'M@L@XL@XXL@XXL', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-27', '299', '7', 'upimages/good12.jpg', '裂帛预售2017夏装新休闲圆领刺绣款套头衫文艺短袖针织T恤女51161366 粉色 5月26日左右发货 M', 1, 0),
(7, 6, 2012003, '奥斯丁玫瑰四孔夏被', '奶白色@卡其色@淡紫色@绿色@蓝色', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-27', '2999', '7', 'upimages/good13.jpg', '水星家纺 奥斯丁玫瑰四孔夏被 白色被子 双人被芯 200*230cm', 1, 0),
(8, 7, 2012004, '努比亚', ' 香槟金@月光银@玫瑰金@星空灰', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-27', '7989', '7', 'upimages/good14.jpg', '荣耀 畅玩6X 4GB 32GB 全网通4G手机 高配版 天海蓝', 1, 1),
(9, 3, 2012006, '坚果炒货', '720g@2000g@2500g', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-27', '59', '8', 'upimages/good15.jpg', '八享时（Favor8 Time）即食板栗仁 休闲零食 坚果炒货 干果 京东甘栗仁600g（100g*6袋）', 0, 1),
(10, 1, 20112007, '休闲运动棒球服', 'M@L@XL@XXL@XXL', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-27', '79', '9', 'upimages/goods9.jpg', 'MANWAN WALK卫衣男2017春夏季新款男装外套男士潮人印花薄卫衣套装休闲运动棒球服 灰色 L', 0, 1),
(11, 7, 20110008, 'Apple iPhone 7', ' 香槟金@月光银@玫瑰金@星空灰', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-27', '5999', '6', 'upimages/goods22.jpg', ' Apple iPhone 7 (A1660) 32G 黑色 移动联通电信4G手机', 1, 0),
(12, 3, 20110009, '山楂蜜饯果干', '720g@2000g@2500g', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-27', '59', '6', 'upimages/goods23.jpg', '胜奎山楂组合零食大礼包山楂蜜饯果干果铺无添加休闲食品6包', 1, 1),
(13, 3, 2012003, '炒米', '720g@2000g@2500g', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-27', '59', '7', 'upimages/goods24.jpg', '粮悦 休闲零食 炒米 原味206g', 0, 1),
(14, 1, 2001214, '褶裤脚七分裤', 'M@L@XL@XXL@XXL', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-27', '79', '4', 'upimages/goods25.jpg', '劲霸男装K-Boxing 男士衬衫 时尚休闲潮流印花长袖衬衫|FCCJ1107 深兰 170/M', 1, 1),
(15, 1, 2147483647, '潮人卫衣', ' M@L@XL@XXL@XXL', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-27', '79', '8', 'upimages/goods26.jpg', '劲霸男装K-Boxing 男士衬衫 时尚休闲潮流印花长袖衬衫|FCCJ1107 深兰 170/M', 1, 1),
(16, 5, 23425234, '比亚迪', '1.4L手动时尚型@1.4L 手动舒适型@180 手动时尚型', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-27', '999999', '4', 'upimages/goods27.jpg', '比亚迪 宋 订金 99元 全新整车 到店自选 2016 2.0TID自动豪华型', 0, 0),
(2, 5, 2147483647, '宝马 7', '1.4L手动时尚型@1.4L 手动舒适型@180 手动时尚型', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-27', '888999', '6', 'upimages/goods28.jpg', '宝马 7系订金499元 2017款 740Le', 0, 0),
(1, 5, 0, '轩逸', '1.4L手动时尚型@1.4L 手动舒适型@180 手动时尚型', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-27', '250000', '6', 'upimages/goods29.jpg', '东风日产 轩逸订金499元 2016款 1.6L 自动 XE 经典领先版', 1, 0),
(20, 5, 12312312, '捷达', '1.4L手动时尚型@1.4L 手动舒适型@180 手动时尚型', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-1-1', '250000', '9', 'upimages/goods2.jpg', '一汽-大众 捷达订金499元 2017款 1.4L 手动时尚型', 1, 0),
(21, 1, 123123, '潮人卫衣', 'M@L@XL@XXL@XXL', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-27', '179', '5', 'upimages/goods3.jpg', '劲霸男装K-Boxing 男士衬衫 时尚休闲潮流印花长袖衬衫|FCCJ1107 深兰 170/M', 1, 1),
(22, 2, 3422222, '雪纺衬衣', 'M@L@XL@XXL@XXL', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-1-11', '79', '3', 'upimages/goods4.jpg', '裂帛预售夏装新款圆领半开襟中袖衬衫玫瑰剪花雪纺衬衣女51151599 白色 M 5月18日左右发货', 1, 0),
(23, 6, 123123, '大号环保储物箱', '奶白色@卡其色@淡紫色@绿色@蓝色', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-2-15', '80', '4', 'upimages/goods5.jpg', '禧天龙Citylong 塑料收纳箱整理箱大号环保储物箱3个装 卡其色60L 6063', 1, 1),
(24, 1, 3434234, '潮人卫衣', 'M@L@XL@XXL@XXL', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-1-27', '79', '3', 'upimages/goods6.jpg', '劲霸男装K-Boxing 男士衬衫 时尚休闲潮流印花长袖衬衫|FCCJ1107 深兰 170/M', 1, 0),
(25, 6, 2342342, '旋转拖把', '奶白色@卡其色@淡紫色@绿色@蓝色', '不分期@39.92x3期@20.26x6期@10.42x12期', '2019-2-27', '50', '3', 'upimages/goods7.jpg', '茶花 自动甩干旋转拖把不锈钢杆桶家用墩布好神拖 4707', 1, 1),
(26, 7, 123312, '联想', '15.6英寸/i7独显@15.6英寸/i7独', '不分期@39.92x3期@20.26x6期@10.42x12期', '2019-2-11', '4588', '5', 'upimages/goods8.jpg', '联想(Lenovo)小新潮7000 14英寸轻薄窄边框笔记本电脑(i5-7200U 8G 1T+128G PCIE 940MX 2G)银', 1, 1),
(27, 7, 343432, '机械革命', '15.6英寸/i7独显@ 15.6英寸/i7独', '不分期@39.92x3期@20.26x6期@10.42x12期', '2019-9-11', '5000', '5', 'upimages/goods30.jpg', '机械革命（MECHREVO）NX5-V631 游戏台式电脑主机（七代i5-7400 8GDDR4 128GSSD+1T GTX1060*3G独显 win10）', 1, 0),
(33, 4, 20170531, '海尔', '直驱变频波轮@微联直驱变频波轮', '不分期@￥2571×3期@￥1304.5×6期@￥671.25×12期 @￥354.62×24期', '2019-9-23', '5800', '8', 'upimages/goods32.jpg', '8公斤直驱变频波轮全自动洗衣机 京东微联智能APP控制 EB80BM2WU1', 1, 1),
(34, 4, 20170532, '榨汁机', '高贵白@天然蓝@深沉黑@鸡蛋黄', '不分期@￥2571×3期@￥1304.5×6期@￥671.25×12期 @￥354.62×24期', '2019-12-11', '500', '7', 'upimages/goods33.jpg', '金正（NINTAUS）破壁机破壁料理机加热豆浆机多功能家用辅食机榨汁机搅拌机冷热双杯950 粉色', 1, 1),
(35, 4, 20170533, '空调柜机', '优惠套装1@优惠套装2@优惠套装3@优惠套装4', '不分期@￥2571×3期@￥1304.5×6期@￥671.25×12期 @￥354.62×24期', '2019-12-3', '5000', '8.5', 'upimages/goods34.jpg', '海信（Hisense）5匹 定速 冷暖 低温启动 方形简约 空调柜机 (KFR-120LW/S5253-3)', 1, 1),
(62, 7, 323, '测试', '3', 'sadf', '2020-1-1', '3333', '4', 'upimages/202003/04/323_1583329450_51376.jpg', 'SG', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `lg_indent`
--

CREATE TABLE `lg_indent` (
  `orderid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `commodity` varchar(100) DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `consignee` varchar(30) DEFAULT NULL,
  `sex` varchar(2) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `telephone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `express` varchar(30) DEFAULT NULL,
  `orderdate` varchar(11) DEFAULT NULL,
  `buyer` varchar(30) NOT NULL,
  `state` varchar(50) DEFAULT NULL,
  `total` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `lg_indent`
--

INSERT INTO `lg_indent` (`orderid`, `userid`, `commodity`, `quantity`, `consignee`, `sex`, `address`, `postcode`, `telephone`, `email`, `express`, `orderdate`, `buyer`, `state`, `total`) VALUES
(117, 72, '小毛A@', '13@', 'asdf', '男', 'asdf', 'asdf', '22222222222', 'hutu@qq.com', '平邮', '2020-03-04', 'ASDF', '未处理', '99359'),
(75, 4, '努比亚@大号环保储物箱@榨汁机@空调柜机@短袖针织T恤', '5@1@5@8@4', '1', '女', '1', '1', '1', '12312@q2.cn', '平邮', '2013-01-06', '1', '已发货', '381.60'),
(52, 57, '空调柜机@大号环保储物箱@努比亚@联想@比亚迪', '2@4@2@3@7', '刘姚', '女', '邢台', ' 054000 ', '13722789664', '789321@qq.com', '普通快递', '2012-12-08', '刘姚', '已收货', '111.8'),
(49, 57, '休闲运动棒球服@旋转拖把@空调柜机@海尔@短袖针织T恤', '1@4@4@3@5', '张三', '男', '保定市新市区', '07100', '18931378698', '9876@163.com', '特快专递', '2012-12-08', '张三', '已发货', '1020'),
(73, 57, '努比亚@海尔@旋转拖把@奥斯丁玫瑰四孔夏被@捷达@宝马 7', '4@6@8@4@6@8', 'sd', '男', 'sd', 'sdf', 'sdf', 'sdf', '平邮', '2012-12-08', 'sdf', '已收货', '49.8'),
(115, 247, '山楂蜜饯果干@雪纺衬衣@轩逸@', '1@1@1@', 'adsf', '女', 'asdf', 'asdf', '32232323', '22@qq.com', '普通快递', '2020-03-04', 'asdf', '未处理', '250138'),
(116, 247, '休闲运动棒球服@', '1@', 'asdf', '女', 'asdf', 'asdf', 'sdf', 'asdf@qq.com', '普通快递', '2020-03-04', 'asdf', '未处理', '79');

-- --------------------------------------------------------

--
-- 表的结构 `lg_type`
--

CREATE TABLE `lg_type` (
  `typeid` int(11) NOT NULL,
  `typename` varchar(30) DEFAULT NULL,
  `typedes` text,
  `displayType` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `lg_type`
--

INSERT INTO `lg_type` (`typeid`, `typename`, `typedes`, `displayType`) VALUES
(1, '男装', '夹克 单西 风衣 羽绒服 皮衣 T恤 马甲 牛仔裤 运动裤', 1),
(2, '女装', '蕾丝连衣裙 印花连衣裙 半身裙 牛仔裙 休闲裤 时尚套装 旗袍 打底裤\r\n', 1),
(3, '零食', '进口牛奶 牛肉干 核桃 红枣 猪肉铺 啤酒 白酒 火腿 熟食 寿司料理', 1),
(4, '家电', '电话煲 豆浆机 扫地机 剃须刀 净水器 冰箱 空调 平板电视 洗衣机', 1),
(5, '汽车', '雪佛兰 路虎 艾泽瑞 科沃兹 迈巴赫 比亚迪 宝马 \r\n', 1),
(6, '家居', '被子 床单 枕头 浴巾 地毯 桌布 十字绣 墙贴 花瓶 国画', 1),
(7, '电脑办公', '笔记本 平板 DIY电脑 游戏本 显卡 键盘 显示器 打印机\r\n', 1),
(23, '测试AA', '测试AA', 1);

-- --------------------------------------------------------

--
-- 表的结构 `lg_user`
--

CREATE TABLE `lg_user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `regdate` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `lg_user`
--

INSERT INTO `lg_user` (`userid`, `username`, `password`, `email`, `address`, `telephone`, `regdate`) VALUES
(72, 'hutu', 'aa2248', 'hutu@qq.com', '广东省珠海市', '11111111111', '2020-02-18 14:51:34'),
(242, '1', '1', '1', '1', '1', '1'),
(239, '1', '1', '1', '1', '1', '1'),
(240, '1', '1', '1', '1', '1', '1'),
(246, 'hutuf', 'aabbcc', 'dfd@qq.com', 'asdf', '11111111111', '2020-03-04 06:56:12'),
(247, 'hutuaa', 'hutuaa', 'hutu@qq.com', '广东省清远市', '18888888888', '2020-03-04 11:29:33');

--
-- 转储表的索引
--

--
-- 表的索引 `lg_admin`
--
ALTER TABLE `lg_admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `lg_advertisement`
--
ALTER TABLE `lg_advertisement`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `lg_car`
--
ALTER TABLE `lg_car`
  ADD PRIMARY KEY (`cid`);

--
-- 表的索引 `lg_collection`
--
ALTER TABLE `lg_collection`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `lg_goods`
--
ALTER TABLE `lg_goods`
  ADD PRIMARY KEY (`goodsid`);

--
-- 表的索引 `lg_indent`
--
ALTER TABLE `lg_indent`
  ADD PRIMARY KEY (`orderid`);

--
-- 表的索引 `lg_type`
--
ALTER TABLE `lg_type`
  ADD PRIMARY KEY (`typeid`);

--
-- 表的索引 `lg_user`
--
ALTER TABLE `lg_user`
  ADD PRIMARY KEY (`userid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `lg_admin`
--
ALTER TABLE `lg_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- 使用表AUTO_INCREMENT `lg_advertisement`
--
ALTER TABLE `lg_advertisement`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '公告id', AUTO_INCREMENT=43;

--
-- 使用表AUTO_INCREMENT `lg_car`
--
ALTER TABLE `lg_car`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `lg_collection`
--
ALTER TABLE `lg_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `lg_goods`
--
ALTER TABLE `lg_goods`
  MODIFY `goodsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- 使用表AUTO_INCREMENT `lg_indent`
--
ALTER TABLE `lg_indent`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- 使用表AUTO_INCREMENT `lg_type`
--
ALTER TABLE `lg_type`
  MODIFY `typeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 使用表AUTO_INCREMENT `lg_user`
--
ALTER TABLE `lg_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
