DELIMITER $$

CREATE PROCEDURE generate_100_rows()
BEGIN
    DECLARE i INT DEFAULT 1;

    WHILE i <= 100 DO
        INSERT INTO grocery_items
        (
            product_name,
            category,
            brand_name,
            price_baht,
            stock_quantity,
            supplier_name,
            manufacture_date,
            expiration_date,
            country_of_origin
        )
        VALUES
        (
            CONCAT('Product ', i),
            CASE
                WHEN i MOD 5 = 0 THEN 'Instant Food'
                WHEN i MOD 5 = 1 THEN 'Beverages'
                WHEN i MOD 5 = 2 THEN 'Snacks'
                WHEN i MOD 5 = 3 THEN 'Condiments'
                ELSE 'Grains'
            END,
            CASE
                WHEN i MOD 10 = 0 THEN 'Mama'
                WHEN i MOD 10 = 1 THEN 'Royal Umbrella'
                WHEN i MOD 10 = 2 THEN 'Tiparos'
                WHEN i MOD 10 = 3 THEN 'Chaokoh'
                WHEN i MOD 10 = 4 THEN 'Dozo'
                WHEN i MOD 10 = 5 THEN 'Lobo'
                WHEN i MOD 10 = 6 THEN 'Roi Thai'
                WHEN i MOD 10 = 7 THEN 'Malee'
                WHEN i MOD 10 = 8 THEN 'Doi Kham'
                ELSE 'Oishi'
            END,
            20 + i,
            50 + i,
            CONCAT('Supplier ', i),
            '2026-01-01',
            '2027-01-01',
            'Thailand'
        );

        SET i = i + 1;
    END WHILE;
END$$

DELIMITER ;

CALL generate_100_rows();

DROP PROCEDURE generate_100_rows;
