## MySql优化策略 ##
1、开启缓存
    
    $today = date("Y-m-d"); 
    $r = mysql_query("SELECT username FROM user WHERE signup_date >= '$today'"); 

2、explain命令，如创建索引来查询：

    CREATE INDEX uni_name ON `heater_alog`(`name`,`ip`);
	查询索引：SELECT name,ip FROM `heater_alog`
	查看索引命中情况：EXPLAIN SELECT name,ip FROM `heater_alog`


3、limit 1

4、避免select *

5、为每张表设置卫衣标识符id

6、enum的固定值设置，效率

7、ip设置为UNSIGNED INT 格式

8、myisam只支持表级锁，用户在操作myisam表时，select，update，delete，insert语句都会给表自动加锁
Innodb支持事务和行级锁，是innodb的最大特色。
