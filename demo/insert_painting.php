<?php

include('conn.php');

$sql = "INSERT INTO painting_info (paintingCN,paintingEN,painterCN,painterEN,school,paintingURL) 
	VALUES ('深山秋烟','Shen Shan Qiu Yan','陈师曾','Shizeng Chen','Beijing-Tianjin School','https://s1.ax1x.com/2022/05/06/On3XvT.jpg'),
	('荷塘蜻蜓翠鸟图','He Tang Qing Ting Cui Niao Tu','于非闇','Feian Yu','Beijing-Tianjin School','https://s1.ax1x.com/2022/05/06/On8eqe.jpg'),
	('深山幽村图','Shen Shan You Cun Tu','萧俊贤','Junxian','Beijing-Tianjin School','https://s1.ax1x.com/2022/05/06/On8KIA.jpg'),
	('藏族母女','Zang Zu Mu Nyu','刘文西','Wenxi Liu','Chang\'an Schoole','https://s1.ax1x.com/2022/05/06/On8BR0.jpg'),
	('华山日出','Hua Shan Ri Chu','何海霞','Haixia He','Chang\'an Schoole','https://s1.ax1x.com/2022/05/06/On8fiR.jpg'),
	('长安古碑林','Chang\'an Gu Bei Lin','何海霞','Haixia He','Chang\'an Schoole','https://s1.ax1x.com/2022/05/06/On8oQK.jpg'),
	('山鬼','Shan Gui','傅抱石','Baoshi Fu','Jinling School','https://s1.ax1x.com/2022/05/06/On8XFA.jpg'),
	('湘君图','Xiang Jun Tu','傅抱石','Baoshi Fu','Jinling School','https://s1.ax1x.com/2022/05/06/OnGSQf.jpg'),
	('自藏山水册','Zi Cang Shan Shui Tu','龚贤','Xian Gong','Jinling School','https://s1.ax1x.com/2022/05/06/OnGiwQ.jpg'),
	('秋鹰图','Qiu Ying Tu','高剑父','Jianfu Gao','Lingnan School','https://s1.ax1x.com/2022/05/06/OnGlTJ.jpg'),
	('融宝斋画谱','Rongbao Zhai Hua Pu','伍嘉陵','Jialing Wu','Lingnan School','https://s1.ax1x.com/2022/05/06/OnGN6K.jpg'),
	('猿月图','Yuan Yue Tu','高奇峰','Qifeng Gao','Lingnan School','https://s1.ax1x.com/2022/05/06/OnGDkd.jpg'),
	('《十万图》之万竿烟雨','Wan Gan Yan Yu','任熊','Xiong Ren','Maritime School','https://s1.ax1x.com/2022/05/06/OnGg6f.jpg'),
	('花鸟四条屏','Hua Niao Si Tiao Ping','任伯年','Bonian Ren','Maritime School','https://s1.ax1x.com/2022/05/06/OnG5kj.jpg'),
	('羲之爱鹅图','Xizhi Ai E Tu','任伯年','Bonian Ren','Maritime School','https://s1.ax1x.com/2022/05/06/OnGohn.jpg')";


if (mysqli_query($conn,$sql)) {
    echo "successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

?>