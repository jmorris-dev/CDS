/* used this query in phpmyadmin to create example table */

CREATE TABLE customers (
    company VARCHAR(30) not null,
    first_name VARCHAR(30) not null,
    last_name VARCHAR(30) not null
);

INSERT INTO customers (company, first_name, last_name)
VALUES ('Company A', 'Bedecs', 'Anna'),
        ('Company B', 'Gratacos', 'Solsona Antonio'),
        ('Company C', 'Axen', 'Thomas'),
        ('Company D', 'Lee, Christina'),
        ('Company E', 'ODonnell', 'Martin');