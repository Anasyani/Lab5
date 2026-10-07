CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT,
    faculty VARCHAR(100),
    agree_rules TINYINT(1),
    study_form VARCHAR(50)
) CHARACTER SET utf8mb4;
