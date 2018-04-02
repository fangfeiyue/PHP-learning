-- 测试枚举类型
CREATE TABLE test_enum(
    sex ENUM('男','女','保密')
);

INSERT test_enum(sex) VALUE('男');

-- 测试set类型
CREATE TABLE test_set(
    a SET('A','B','C','D','E','F')
);
INSERT test_set(a) VALUES('A');
INSERT test_set(a) VALUES('C');
INSERT test_set(a) VALUES('C,D,E');
INSERT test_set(a) VALUES('C,F,A');


