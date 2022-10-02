-------------------------------
-- Database structure
-------------------------------

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE `tags` (
  `id` int NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE `goods_tags` (
  `goods_id` int NOT NULL,
  `tag_id` int NOT NULL
) ENGINE=InnoDB;

ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `goods_tags`
  ADD UNIQUE KEY `goods_tag_unique` (`goods_id`,`tag_id`),
  ADD KEY `tag_id` (`tag_id`);

ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `goods_tags`
  ADD CONSTRAINT `goods_tags_ibfk_1` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `goods_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

-------------------------------
-- Solution
-------------------------------

SELECT 
    gt.`goods_id` as `goods_id`,
    g.`name`
FROM goods_tags AS gt 
JOIN goods as g on g.id = gt.goods_id
GROUP BY goods_id 
HAVING count(gt.goods_id) = (SELECT count(*) FROM tags);
