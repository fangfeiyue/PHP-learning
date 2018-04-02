-- 测试TIME类型
CREATE TABLE test_time(
    a TIME,
    b DATE
);

INSERT test_time(a) VALUE('12:23:45');
INSERT test_time(a) VALUES(NOW());
INSERT test_time(a) VALUES(CURRENT_TIME);
INSERT test_time(b) VALUES('YYMMDD');

CREATE TABLE test_date(
    d DATE
);

INSERT test_date(d) VALUES('YYMMDD');
INSERT test_date(d) VALUES('2018-04-02');
INSERT test_date(d) VALUES(CURRENT_DATE);

CREATE TABLE test_datetime(
    a DATETIME
);

INSERT test_datetime(a) VALUES('1004-09-12 13:24:56');
INSERT test_datetime(a) VALUES(NOW());

-- 测试timestamp
CREATE TABLE test_timestamp(
    a TIMESTAMP
);
INSERT test_timestamp() VALUES('1978-10-23 12:12:12');

