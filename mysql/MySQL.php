<?php

//Создал дамп базы на свое усотрение, так как не было прописано в условиях

//a. Для заданного списка товаров получить названия всех категорий, в которых представлены товары
//Выбираю для нескольких товаров (9, 14, 6, 7, 2);


$sql = 'SELECT DISTINCT category.name FROM category LEFT JOIN product_category ON category.id = product_category.category_id LEFT JOIN product ON product.id = product_category.product_id WHERE product.id IN (1,2,3)';



//b. Для заданной категории получить список предложений всех товаров из этой категории и ее
//дочерних категорий;
//Выбираю все товары из категории компьютеры (id = 2) и подкатегории (3 ноутбуки, 4 планшеты, 5
//гибриды)
$sql = 'SELECT DISTINCT * FROM category LEFT JOIN product_category ON category.id = product_category.category_id LEFT JOIN product ON product.id = product_category.product_id WHERE category.id = 1 OR category.id IN (SELECT id FROM category WHERE parent_id = 1) ';


//c. Для заданного списка категорий получить количество предложений товаров в каждой категории;
//Выбираю количество товаров из категорий 7,8,9


$sql = 'SELECT category.name, COUNT(*) FROM category LEFT JOIN product_category ON category.id = product_category.category_id LEFT JOIN product ON product.id = product_category.product_id WHERE category.id IN (1, 2, 3, 5, 6 ,7) GROUP BY category.name';



//d. Для заданного списка категорий получить общее количество уникальных предложений товара;
//Выбираю количество уникальных товаров из категорий 3, 4, 5



$sql = 'SELECT DISTINCT category.name, COUNT(*) FROM category LEFT JOIN product_category ON category.id = product_category.category_id LEFT JOIN product ON product.id = product_category.product_id WHERE category.id IN (1, 2, 3, 5, 6 ,7) GROUP BY category.name';


//e. Для заданной категории получить ее полный путь в дереве (breadcrumb, «хлебные крошки»).
//Получаю полный путь для категории 4 уровня


$sql = 'SELECT DISTINCT c.name, c2.name, c3.name, c4.name from category as c LEFT JOIN category as c2 ON c2.id = c.parent_id LEFT JOIN category as c3 ON c3.id = c2.parent_id LEFT JOIN category as c4 ON c4.id = c3.parent_id WHERE c.id = 10';