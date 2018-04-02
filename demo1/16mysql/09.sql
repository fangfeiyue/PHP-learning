-- 测试添加和删除字段
CREATE TABLE IF NOT EXISTS test_addanddel(
    a TINYINT,
    b VARCHAR(20)
);

ALTER TABLE test_addanddel ADD c VARCHAR(20);
ALTER TABLE test_addanddel DROP a;
ALTER TABLE test_addanddel DROP a, b;
alter table test_addanddel add username varchar(20);
ALTER TABLE test_addanddel ADD email VARCHAR(20) NOT NULL UNIQUE AFTER username;
alter table test_addanddel add married TINYINT(1) NOT NULL DEFAULT 1 AFTER email;
ALTER TABLE test_addanddel add addr VARCHAR(50) NOT NULL DEFAULT '北京' FIRST;




-- 测试修改字段类型、属性、名称


-- 测试删除和添加主键
CREATE TABLE test_primary(
    id INT UNSIGNED,
    userName VARCHAR(20) NOT NULL
);

-- 添加主键
ALTER TABLE test_primary DROP PRIMARY KEY;