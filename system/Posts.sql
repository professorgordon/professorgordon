select * from posts;
select * from post_categories;
select * from categories;

insert into post_categories (post_id, category_id) values (1,12);
insert into post_categories (post_id, category_id) values (2,11);
insert into post_categories (post_id, category_id) values (3,12);
insert into post_categories (post_id, category_id) values (3,11);

select * 
	from posts 
    join post_categories 
		on posts.post_id = post_categories.post_id
	join categories
		on categories.category_id = post_categories.category_id
        
        
