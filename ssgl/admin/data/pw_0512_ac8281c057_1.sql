#---------------------------------------------------------#
# qhdinfo bakfile
# qhdinfo:鍜屽叾鏁版嵁澶囦唤v1.0
# Time: 2014-05-12 16:37:36
# --------------------------------------------------------#


DROP TABLE IF EXISTS admin;
CREATE TABLE admin (
  id int(20) NOT NULL AUTO_INCREMENT,
  username varchar(100) CHARACTER SET gbk NOT NULL DEFAULT '',
  pwd varchar(200) CHARACTER SET gbk NOT NULL DEFAULT '',
  `list` varchar(10) CHARACTER SET gbk NOT NULL DEFAULT '',
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=koi8u;

DROP TABLE IF EXISTS bjgl;
CREATE TABLE bjgl (
  id int(100) NOT NULL AUTO_INCREMENT,
  xh varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  zy varchar(60) CHARACTER SET gbk NOT NULL DEFAULT '',
  bj varchar(60) CHARACTER SET gbk NOT NULL DEFAULT '',
  c varchar(20) CHARACTER SET gbk NOT NULL DEFAULT '',
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES('1','admin','202cb962ac59075b964b07152d234b70','管理员');
INSERT INTO admin VALUES('2','123','202cb962ac59075b964b07152d234b70','管理员');

INSERT INTO bjgl VALUES('1','计算机','现代教育','1','2011.10');
INSERT INTO bjgl VALUES('2','32432','324','23432','324');
INSERT INTO bjgl VALUES('3','的萨芬','发大水啊','的萨芬','的萨芬');

