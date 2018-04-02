-- 测试主键
CREATE TABLE test_primary_key(
    id INT unsigned PRIMARY KEY,
    userName VARCHAR(10)
);

INSERT test_primary_key(id, userName) VALUES(1, 'fang');

CREATE TABLE test_primary_key2(
    id INT unsigned,
    userName VARCHAR(10),
    PRIMARY KEY(id)
);

