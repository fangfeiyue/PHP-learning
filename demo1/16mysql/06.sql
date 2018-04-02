-- 测试主键
CREATE TABLE test_primary_key(
    id INT UNSIGNED PRIMARY KEY,
    userName VARCHAR(10)
);

INSERT test_primary_key(id, userName) VALUES(1, 'fang');

CREATE TABLE test_primary_key2(
    id INT UNSIGNED,
    userName VARCHAR(10),
    PRIMARY KEY(id)
);


CREATE TABLE test_auto_increment(
    id INT UNSIGNED AUTO_INCREMENT,
);
