--
-- База данных: `jobbase`
-- it's the same thing as in task
--
select title, count(tbl_tag.id) as numberOfTags
from `tbl_tag`, `tbl_tagPost`, `tbl_posts`
where tbl_posts.id = tbl_tagPost.post_id and tbl_tag.id = tbl_tagPost.tag_id
and tbl_posts.is_moderate = 1
group by title
HAVING numberOfTags > 2