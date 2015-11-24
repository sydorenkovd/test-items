<?php
//$first = select sum(views) from gallery where author = "needAuthor"
//$second = select count(filename) from gallery where author = "needAuthor"
//$max = max($first/$second);
/*
 *SELECT
max(
    (select sum(views) from gallery where author = "needAuthor")/(select count(filename) from gallery where author = "needAuthor")
)
FROM test;
*/