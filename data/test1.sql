-- 合併查詢
SELECT * FROM  `products` JOIN `categories`; 
-- 不建議使用
SELECT * FROM  `products` JOIN `categories` ON `products`.`category_sid`=`categories`.sid; 
-- SELECT * FROM 表單名稱1 JOIN 表單名稱2 ON 表單名稱1.foreign key = 表單名稱2.primary key，表單名稱1和表單名稱2為關聯表單
SELECT `categories`.name, `products`.* FROM `products` JOIN `categories` ON `products`.`category_sid`=`categories`.sid;
-- slect form 表單名稱 join 欄位 on 表單名稱.欄位=欄位.sid
SELECT c.name, p.* FROM `products` AS p JOIN `categories` AS c ON p.`category_sid`=c.sid;
-- 省略表單名稱
SELECT c.name, p.* FROM `products` p JOIN `categories` c ON p.`category_sid`=c.sid;
-- 省略AS

-- inner join 內部聯結 (Inner Join) 只會傳回兩個資料表中滿足資料列聯結條件 (ON 之後) (Join Condition) 的資料列，其他不符合的資料列將不會顯示。


-- outer join 除了滿足連結條件的資料列會顯示（如 INNER JOIN）外，在左邊(LEFT)資料表存在的資料列也會顯示在結果集(Result Set)中。來自右邊資料表的輸出項目會顯示 NULL。
SELECT c.name, p.* FROM `categories` c LEFT JOIN `products` p ON p.`category_sid`=c.sid;
-- `categories`這張表一定要出現

-- LIKE 模糊搜尋
SELECT * FROM `products` WHERE `author` LIKE '%林%'
-- 搜尋含有「林」的資料
SELECT * FROM `products` WHERE `author` LIKE '林%'
-- 「林」開頭
SELECT * FROM `products` WHERE `author` LIKE '%林'
-- 「林」在最後
SELECT * FROM `products` WHERE `author` LIKE '%林%' AND `author` NOT LIKE '林%'
-- 有「林」這個字，但不要在開頭

SELECT * FROM `products` WHERE sid IN (10, 13, 21, 6) ORDER BY RAND()

-- 加到最愛
-- 拿到產品sid，JOIN `products`那張表

-- COUNT 用來計算符合查詢條件的欄位紀錄總共有幾筆
SELECT COUNT(1) num FROM `products`
SELECT COUNT(bookname) FROM `products` WHERE bookname LIKE '%程式%' 

-- GROUP 表內分類各取一（顯示四個就是四個不同種類）
SELECT * FROM `products` GROUP BY `category_sid`

SELECT c.name, COUNT(1) num FROM `products` p
    JOIN categories c
    ON p.category_sid = c.sid
    GROUP BY p.`category_sid`;

-- 試算全館八折
SELECT *, `price`*0.8 special_price FROM `products` WHERE 1
