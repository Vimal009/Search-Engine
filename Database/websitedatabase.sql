-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 07:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `websitedb`
--

CREATE TABLE `websitedb` (
  `website_title` varchar(100) NOT NULL,
  `website_link` varchar(200) NOT NULL,
  `website_keywords` varchar(200) NOT NULL,
  `website_description` varchar(500) NOT NULL,
  `website_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websitedb`
--

INSERT INTO `websitedb` (`website_title`, `website_link`, `website_keywords`, `website_description`, `website_image`) VALUES
('Noodles || food ', 'https://en.wikipedia.org/wiki/Noodle', 'noodles , tummy noodles , noodles picture ', 'What are noodles made from?\r\nNoodles are typically made from unleavened wheat dough and are stretched, extruded, or rolled, and then cut into varying shapes. Noodles account for approximately 20%–50% of the total wheat consumed in Asia, and its popularity has extended to many countries outside of Asia (Hou, 2010a).', 'website_images/noodles.png'),
('Buy Noodles Online at Best Prices in India-Amazon.in', 'https://www.amazon.in/Noodles/b?ie=UTF8&node=4859728031', 'noodles , yummy noodles , noodles picture , home delivery', 'Amazon Bestsellers Our most popular products based on sales. Updated hourly. Bestsellers in Noodles. #1.  ', 'website_images/noodles1.jpg'),
('Pushpa: The Rise - Wikipedia', 'https://en.wikipedia.org/wiki/Pushpa:_The_Rise', 'pushpa , pushpa movie download , new movie', 'Pushpa: The Rise – Part 01 is a 2021 Indian Telugu-language action drama film written and directed by Sukumar. Produced by Mythri Movie Makers in ...', 'website_images/pushpa.png'),
('Pushpa HDRip Movie Download 480p, 720p, 1080p Free ...', 'https://www.filmyzap.com/pushpa-hdrip-movie-download-in-hindi/', 'pushpa , pushpa movie download , new movie , filmyzap', 'Pushpa full Movie Download FilmyWap — Pushpa full Movie Download FilmyWap. Many people are fond of watching movies. Thats why people start searching ...', 'website_images/pushpa1.png'),
('Pushpa: The Rise – Part 1 Box Office Collection | India', 'https://www.bollywoodhungama.com/movie/pushpa/box-office/', 'pushpa box office collection , pushpa movie , download', 'Box Office: Pushpa collects Rs. 11.45 cr in Week 4; total collections at Rs. 83.94 cr.  ', 'website_images/pushpa2.png'),
('Pushpa The Rise Box Office Collection Day 38 ( Daywise ...', 'https://www.bollymoviereviewz.com/2021/12/pushpa-the-rise-box-office-collection-day-7.html', 'pushpa box office collection , pushpa movie , download', '2 hours ago — Pushpa The Rise Box Office Collection Day 38. 1.35 Crore · Pushpa The Rise Total till date Box Office Collection. 94.56 Crore nett Hindi producer Figure after 38 ...2 hours ago — Pushpa The Rise Box Office Collection Day 38. 1.35 Crore · Pushpa The Rise Total till date Box Office Collection. 94.56 Crore nett Hindi producer Figure after 38 ... ', 'website_images/pushpa3.png'),
('Pushpa: The Rise - Part 1 (2021) - IMDb', 'https://www.imdb.com/title/tt9389998/', 'pushpa , imdb , imdb rating , pushpa movie imdb rating ,  pushpa movie imdb  ,pushpa movie download , new movie ,', 'Story of Pushpa Raj, a lorry driver in Seshachalam forests of South India, set.  Rating: 8/10 · ‎36,510 votesStory of Pushpa Raj, a lorry driver in Seshachalam forests of South India, set.  Rating: 8/10 · ‎36,510 votes', 'website_images/pushpa4.png'),
('Pushpa movie Best dialogues in English & Hindi with image', 'https://shayaritag.com/pushpa-movie-best-dialogues/', 'pushpa movie, Pushpa movie Best dialogues in English & Hindi with image ', 'Pushpa movie Best dialogues, Status & Quotes (Allu Arjun) in English & Hindi with image- पुष्पा नाम सुनकर flower समझी क्या ? fire है ...\r\n  ', 'website_images/pushpa5.png'),
('Social media - Wikipedia', 'https://en.wikipedia.org/wiki/Social_media', 'social media,  social, soc, media,wikipedia, social media wikipedia,', 'Social media are interactive technologies and digital channels that facilitate the creation and sharing of information, ideas, interests, and other forms of ...', 'website_images/upstate_gis.png'),
('Instagram', 'https://www.instagram.com/?hl=en', 'insta,instagram,ig,instag,social media,socal, media', 'Instagram is a popular photo-sharing app that lets you connect with brands, celebrities, thought leaders, friends, family, and more. Instagram is an American photo and video sharing social networking service founded by Kevin Systrom and Mike Krieger. In April 2012, Facebook Inc.', 'website_images/upstate_gis.png'),
('Facebook ', 'https://www.facebook.com/', 'fb,facebook,social,media,social media,fecbook,', 'Keeping up with friends is faster and easier than ever. Share updates and photos, engage with friends and Pages, and stay connected to communities important.', 'website_images/upstate_gis.png'),
('Telegram', 'https://web.telegram.org/', 'telegram,telgram,gram,teligram,social,media,social media,tg', 'Telegram messages are heavily encrypted and can self-destruct. Synced. Telegram lets you access your chats from multiple devices.\r\nThis message has many factual inaccuracies, the foremost being Telegram is not by an Indian company. ', 'website_images/upstate_gis.png'),
('LinkedIn', 'https://www.linkedin.com/login', 'social,media,social media,li,linked in,linkedin', 'Use LinkedIn to network with more than 740 million members worldwide. Start now in the world’s largest professional network. Find & Apply To New Jobs. Nearly 800M Members. See Who Is Hiring Nearby. Job Recommendations. Professional Community.', 'website_images/upstate_gis.png'),
(' Snapchat', 'https://www.snapchat.com/', 'snap,chat,social,media,socialmedia,sc,snapchat', 'Snapchat is a fast and fun way to share the moment with your friends and family SNAP • Snapchat opens straight to the camera — just tap to take a photo.', 'website_images/upstate_gis.png'),
(' Pinterest ', 'https://in.pinterest.com/', 'pin,terest,pinterest,social,media,social media', 'Pinterest is a free website that requires registration to use. The service is currently accessible through a web browser, and apps for iOS, Android, and Windows 10 PCs.', 'website_images/upstate_gis.png'),
('Reddit', 'https://www.reddit.com/', 'social,media,social media,reddit,rd', 'Reddit is a social news website and forum where content is socially curated and promoted by site members through voting. The site name is a play on the words I read it. Reddit member registration is free, and it is required to use the websites basic features', 'website_images/upstate_gis.png'),
('Twitter', 'https://twitter.com/', 'social,media,social media,twitter,tw', 'Twitter is a service for friends, family, and coworkers to communicate and stay connected through the exchange of quick, frequent messages. People post Tweets, which may contain photos, videos, links, and text. These messages are posted to your profile, sent to your followers, and are searchable on Twitter search.\r\n', 'website_images/upstate_gis.png'),
('Amazon', 'https://www.amazon.in/', 'amazon,shopping website,online shopping,onli shoping,shopping,', 'Top brands for Phones and Electronics. Latest trends in Fashion. Free Shipping available* Great Offers. Best Deals. Low Prices. No Cost EMI Available. Easy & Fast Delivery. Huge Selection. Top Brands.', 'website_images/upstate_gis.png'),
('Flipkart', 'https://www.flipkart.com/', 'shopping website,online shopping,onli shoping,shopping,flipkart,flipcart,fc', 'Flipkart, the most prominent eCommerce website in India and is empowering tons of Indian businesses to venture into the competitive online shopping industry. This multi-vendor website serves as the platform for vendors to display their product to the websites visitors.', 'website_images/upstate_gis.png'),
('Snapdeal', 'https://www.snapdeal.com/', 'snapdeal,sd,shopping website,online shopping,onli shoping,shopping,shoping', 'Snapdeal is an intermediary in the form of an online marketplace and is limited to managing the Website to enable seller to exhibit, advertise, display, make available and offer to sell the products and to enable buyer to purchase the products so offered', 'website_images/upstate_gis.png'),
('Myntra', 'https://www.myntra.com/', 'myntra,shopping website,online shopping,onli shoping,shopping,shoping', 'Redefine Your Style Statement With Trendy Apparel, Footwear, Accessories & More. Shoppable Looks From Indias Top Influencers At Myntra Studio. Shop Now. 10+ lakh styles. COD available. 3000+ Brands. Studio. Photo Search. Latest Trends. 100% Original Brands.', 'website_images/upstate_gis.png'),
('Alibaba', 'https://www.alibaba.com/', 'alibaba,shopping website,online shopping,onli shoping,shopping,shoping', 'Alibaba is Chinas — and by some measures, the worlds — biggest online commerce company. Its three main sites — Taobao, Tmall and Alibaba.com — have hundreds of millions of users, and host millions of merchants and businesses. Alibaba handles more business than any other e-commerce company.', 'website_images/upstate_gis.png'),
('shopclues', 'https://www.shopclues.com/', 'shopping website,online shopping,onli shoping,shopping,shopclules,shoping', 'Upto 95% off on All Products. Super Se Upar Deals Start from Rs. 79 onwards. Shop Now. Huge range of Collection from Fashion , Electronics , Home & Kitchen to choose from. Register Online. Multiple Payment Options. View News.', 'website_images/upstate_gis.png'),
('indiamart', 'https://www.indiamart.com/', 'indiamart,shopping website,online shopping,onli shoping,shopping,shoping,im', ' you can buy products even though you dont own a company. The majority of suppliers on IndiaMART are manufacturers, wholesalers/ retailers/ traders dealing in bulk orders. To match the suppliers scale, preferred buyers are businesses.', 'website_images/upstate_gis.png'),
('swiggy', 'https://www.swiggy.com/', 'swiggy, food,foods,food delivery,online food,meal,veg,non veg', 'Swiggy is Indian online food ordering and delivery platform. ... Apart from food delivery, Swiggy also provides on-demand grocery deliveries under the name Instamart and an instant package delivery service called Swiggy Genie. Swiggy is operated by Bundl Technologies Private Limited.', 'website_images/upstate_gis.png'),
('Zomato', 'https://www.zomato.com/', 'zomato,food,foods,food delivery,online food,meal,veg,non veg', 'Zomato is an Indian multinational restaurant aggregator and food delivery company founded by Deepinder Goyal and Pankaj Chaddah in 2008. Zomato provides information, menus and user-reviews of restaurants as well as food delivery options from partner restaurants in select cities.', 'website_images/upstate_gis.png'),
('foodpanda ', 'https://www.foodpanda.com/', 'foodpanda,food panda,food,foods,food delivery,online food,meal,veg,non veg', 'The foodpanda group is the leading global online food delivery marketplace. Headquartered in Berlin, Germany. It operates in more than 40 countries across 5 continents. foodpanda allows users to conveniently discover food around their neighbourhood and directly order their favourite meals online or via mobile.', 'website_images/upstate_gis.png'),
('Dominos ', 'https://www.dominos.co.in/', 'Dominos,food,foods,food delivery,online food,meal,veg,non veg', 'Order Online & Get 2 Regular Dominos pizzas for just ₹99 each. Order Now. Get additional Cashback upto ₹100 with payment via Digital Wallet Partners. Order Now! Safe & Hygienic. 100% Sanitized Stores. Zero Contact Delivery. Untouched By Hand. Baked at 465 F.', 'website_images/upstate_gis.png'),
('mcdonalds', 'https://www.mcdonalds.com/', 'mcdonalds,food,foods,food delivery,online food,meal,veg,non veg', 'Order now to get 1 Free Fries worth Rs. 98 on your first order. Super Fast Delivery. Exclusive Offer Available On McDelivery Web. Explore the Menu & Order Your Favourites Now! WFH Offers. Zero Contact Delivery. Safe Delivery. Live Order Tracking. No Minimum Order Value.', 'website_images/upstate_gis.png'),
('PizzaHut', 'https://www.pizzahut.co.in/', 'Pizzahut,food,foods,food delivery,online food,meal,veg,non veg', 'Experience Safe, Hygienic & Contactless Delivery.Trust in Every Bite. 30 Minutes Delivery. Pizza Hut Valentines Week Special. Get upto Rs.300 Off on minimum order of Rs.600. Delivery In 30 Minutes. Cashless Payment Option. Choco Volcano Cake.', 'website_images/upstate_gis.png'),
('KFC', 'https://online.kfc.co.in/', 'KFC,food,foods,food delivery,online food,meal,veg,non veg,kfc', 'KFC (also known as Kentucky Fried Chicken) is an American fast food restaurant chain headquartered in Louisville, Kentucky that specializes in fried chicken. It is the worlds second-largest restaurant chain (as measured by sales) after McDonalds, with 22,621 locations globally in 150 countries as of December 2019.', 'website_images/upstate_gis.png'),
('YouTube', 'https://www.youtube.com/', 'Youtube, social, media,social media,sc', 'A YouTube video description is the text below each of your videos. These little text nuggets help viewers find your content and decide whether to watch it. When given a little love, YouTube descriptions can boost your channels SEO, subscriptions, view counts, and watch time.', 'website_images/upstate_gis.png'),
('farrot salad', 'https://cookieandkate.com/', 'farrot salad,food panda,food,foods,food delivery,online food,meal,veg,non veg', 'It is a very refreshing and antioxidant salad. It provides many nutrients for skin care and improve the health of all digestive organs if gastritis or digestive ulcers', 'website_images/upstate_gis.png'),
('Burger king', 'https://www.burgerking.in/', 'burger king,food panda,food,foods,food delivery,online food,meal,veg,non veg', 'The Burger King menu has expanded from a basic offering of burgers French fries sodas and milkshakes in  to a larger more diverse set of product offerings In  the Whopper was the first major addition to the menu it has since become Burger Kings signature product', 'website_images/upstate_gis.png'),
('PizzaHut', 'https://www.pizzahut.co.in/', 'pizzaHut,food panda,food,foods,food delivery,online food,meal,veg,non veg', 'Pizza Hut is an American multinational restaurant chain and international franchise founded in 1958 in Wichita Kansas by Dan and Frank Carney', 'website_images/upstate_gis.png'),
('Shodhganga ', 'https://shodhganga.inflibnet.ac.in/', 'shodh, shodhganga, ganga', 'University of Calcutta12810 Anna University11979 ', 'website_images/upstate_gis.png'),
('Hotstar Specials Shoorveer', 'https://www.imdb.com/title/tt21217736/', 'shoorveer, SHOORVEER, shorveer, shoorvir', 'When an imminent attack threatens India, an elite unit undertakes a mission that will test the limits of their courage and grit.', 'website_images/shorver.jpg'),
('Pillai College of Arts, Commerce & Science ( Autonomous)', 'https://pcacs.ac.in/', 'pcacs, pillai, PCACS, PILLAI', 'Located in: Pillai College of Architecture\r\nAddress: Dr. K.M.Vasudevan Pillai Campus, Plot No.10, Sector 16, New Panvel, Navi Mumbai, Maharashtra 410206\r\nHours: \r\nClosed ⋅ Opens 7:30AM\r\nPhone: 022 2745 1700\r\nFounded: 1998', 'website_images/college.jpg'),
('ICC T20 World Cup', 'https://www.cricbuzz.com/cricket-series/3961/icc-mens-t20-world-cup-2022/matches', 'Icc', 'Icc T20 Cricket World Cup', 'website_images/Asia Cup.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
