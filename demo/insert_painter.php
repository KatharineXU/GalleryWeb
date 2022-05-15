<?php

include('conn.php');

$sql = "INSERT INTO painter_info (painterCN,painterEN,school,portraitURL,intro) 
	VALUES ('任伯年','Bonian Ren','Maritime School','https://s1.ax1x.com/2022/05/05/Omyo2F.jpg','A famous painter in the late Qing Dynasty. His masterpieces include the Wisteria and Kingfisher scrolls hidden in the Xu Beihong Memorial Hall. He had a great influence on modern flower and bird painting.'),
	('任熊','Xiong Ren','Maritime School','https://s1.ax1x.com/2022/05/05/OmhGnS.jpg','A famous painter in the late Qing Dynasty. His paintings had a great influence on the \"Maritime School\" and modern Chinese painting. He was a master of landscape, flower and bird, and figure painting.'),
	('傅抱石','Baoshi Fu','Jinling School','https://s1.ax1x.com/2022/05/05/Omh010.jpg','He was good at painting landscapes. He created the \"Baishi Chao\" in the middle age, and painted many large paintings with a strong sense of the times in the later years.'),
	('龚贤','Xian Gong','Jinling School','https://s1.ax1x.com/2022/05/05/Om5O6P.jpg','One of the \"Eight Artists of Jinling\". He is also known as the \"Two Halves of the World\" together with Qian Lyu in the early Qing Dynasty. His masterpiece is \"The Collection of Xiang Cao Tang\".'),
	('陈师曾','Shizeng Chen','Beijing-Tianjin School','https://s1.ax1x.com/2022/05/06/On3mhq.jpg','A famous artist and art educator. His masterpiece, The Value of Literati Painting, was the first person to affirm Chinese literati painting in a theoretical form in the 20th century. '),
	('萧俊贤','Junxian Zeng','Beijing-Tianjin School','https://s1.ax1x.com/2022/05/06/On3YNR.jpg','Specializing in landscapes and also painted flowers. Xun Xiao and he are known as \"the two Xiao\'s in Beijing\". His masterpieces include \"Blue Sea and Green Sky\", \"Endless Streams and Mountains\" and \"Mountain Dwelling\".'),
	('于非闇','Feian Yu','Beijing-Tianjin School','https://s1.ax1x.com/2022/05/06/On3t41.png','Formerly known as Kuizhao Yu, was a modern Chinese painter. Originally from Penglai, Shandong Province, he was born in Beijing and has been a painter and calligrapher since his childhood.'),
	('高剑父','Jianfu Gao','Lingnan School','https://s1.ax1x.com/2022/05/06/On3R8P.jpg','an outstanding modern Chinese painter, art educator, one of the founders of the Lingnan School of Painting, an innovator of traditional Chinese art and a pioneer of modern Chinese art.'),
	('高奇峰','Qifeng Gao','Lingnan School','https://s1.ax1x.com/2022/05/06/On34KS.jpg','He was connected to his brother Gao Jianfu and Chen Shurin and had high painting skills. He is also known as one of the founders of the Lingnan School.'),
	('伍嘉陵','Jialing Wu','Lingnan School','https://s1.ax1x.com/2022/05/06/On35Dg.jpg','His calligraphy is based on \"Two Wang\" and \"Mi\", and he is especially good at breaking large characters and cursive scrolls. His cursive is known as \"the Contemporary Dong Qichang\".'),
	('何海霞','Haixia He','Chang\'an School','https://s1.ax1x.com/2022/05/06/On3wjO.jpg','Be good at landscapes and flowers. His works often combine green and blue brushwork with ink and wash brushwork, with novel ideas, vigorous brushwork, and a thick but beautiful style.'),
	('刘文西','Wenxi Liu','Chang\'an School','https://s1.ax1x.com/2022/05/06/On36UA.jpg','A leading figure painter in China, one of the representative painters of the \"Zhejiang School of Figure Painting\", the founder of the Huangtu School of Painting, and the author of the portrait of Mao Zedong in the fifth set of RMB.')";


if (mysqli_query($conn,$sql)) {
    echo "successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

?>