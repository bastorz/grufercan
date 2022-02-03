#### Add news to the DB

Run the following scripts with the content in the PHPMYADMIN panel.

###### Insert image

```SQL
INSERT INTO `noticias` (`id`, `img_url`, `date`) VALUES (NULL, '{IMAGENAME.EXTENSION}', '{NEWS_DATE}');
```

###### Insert the news content ENGLISH

```SQL
INSERT INTO `noticias_en` (`id`, `title`, `subtitle`) VALUES (NULL,'{NEWS TITLE}', '{NEWS CONTENT}');
```

###### Insert the news content SPANISH

```SQL
INSERT INTO `noticias_es` (`id`, `title`, `subtitle`) VALUES (NULL,'{NEWS TITLE}', '{NEWS CONTENT}');
```

###### Relate the news to the images ENGLISH

```SQL
INSERT INTO `noticias_en_noticias` (`noticias_en_id`, `noticias_id`) VALUES ('{NEWS_ID}', '{NEWS_IMAGE_ID}');
```

###### Relate the news to the images SPANISH

```SQL
INSERT INTO `noticias_es_noticias` (`noticias_es_id`, `noticias_id`) VALUES ('{NEWS_ID}', '{NEWS_IMAGE_ID}');
```
