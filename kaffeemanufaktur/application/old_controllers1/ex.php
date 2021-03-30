SELECT MAX(availability.product_id) AS max_id,MAX(availability.price),MIN(availability.price) FROM products left join availability on availability.product_id = products.id WHERE products.category = 3 GROUP BY availability.product_id ORDER BY MIN(availability.price) ASC