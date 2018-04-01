CREATE TABLE IF NOT EXISTS test_int(
    a TINYINT,
    b SMALLINT,
    c mediumint,
    d INT,
    e bigint
);

INSERT test_int(a) VALUES(-128);

-- 测试无符号
CREATE TABLE IF NOT EXISTS test_unsigned(
    a TINYINT unsigned,
    b SMALLINT,
    c mediumint,
    d INT,
    e bigint
);

INSERT test_unsigned(a) VALUE(128);