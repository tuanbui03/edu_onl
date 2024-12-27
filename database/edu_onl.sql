CREATE DATABASE edu_onl;
USE edu_onl;

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL, -- Mã hóa mật khẩu
    fullname VARCHAR(100),
    dob DATE,
    email VARCHAR(100),
    image VARCHAR(255),
    role ENUM('admin', 'teacher', 'student') DEFAULT 'student',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE teachers (
    teacher_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    description TEXT,
    image VARCHAR(255),
    total_playlists INT DEFAULT 0,
    total_videos INT DEFAULT 0,
    total_likes INT DEFAULT 0,
    total_comments INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE playlists (
    playlist_id INT AUTO_INCREMENT PRIMARY KEY,
    teacher_id INT,
    title VARCHAR(100),
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (teacher_id) REFERENCES teachers(teacher_id)
);

CREATE TABLE courses (
    course_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    image VARCHAR(255),
    description TEXT,
    teacher_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (teacher_id) REFERENCES teachers(teacher_id)
);

CREATE TABLE videos (
    video_id INT AUTO_INCREMENT PRIMARY KEY,
    playlist_id INT,
    title VARCHAR(100),
    url VARCHAR(255),
    duration TIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (playlist_id) REFERENCES playlists(playlist_id)
);

CREATE TABLE comments (
    comment_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    video_id INT,
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (video_id) REFERENCES videos(video_id)
);

USE edu_onl;

-- Thêm dữ liệu vào bảng users
INSERT INTO users (username, password, fullname, dob, email, image, role, created_at, updated_at) VALUES
('user1', '$2y$10$O7JX7eJNofKsm5jIgXLNAeKz3vKwbQ/X.n5P9vq4mG8Rz.AIsdRAu', 'User One', '1990-01-01', 'user1@example.com', 'image1.jpg', 'student', NOW(), NOW()),
('user2', '$2y$10$nA2lv2Q2P3z9E5dd6I1JaebxVdyHyhLPs/tXyUw5MxPm2Z5ZyU4nK', 'User Two', '1991-02-02', 'user2@example.com', 'image2.jpg', 'teacher', NOW(), NOW()),
('user3', '$2y$10$T5VbyE2uqVysl1IFP9qCzO1.UwI3spkVcJxPPhzA9.q8M1ALh6YVa', 'User Three', '1992-03-03', 'user3@example.com', 'image3.jpg', 'student', NOW(), NOW()),
('user4', '$2y$10$ueaIuJ/2/nZq5eufNjeyp.P6fHg96vhEz8XOryMZ7f.TvAhtmZAIK', 'User Four', '1993-04-04', 'user4@example.com', 'image4.jpg', 'teacher', NOW(), NOW()),
('user5', '$2y$10$a/UxF3G7P6QcBt5.CjV3Z.ORCZ9gWupN3iS1Bv.XMCMZ9El2q/n1e', 'User Five', '1994-05-05', 'user5@example.com', 'image5.jpg', 'student', NOW(), NOW()),
('user6', '$2y$10$6IufBv6nyJ7mYxjC6RkALuE1p85g74EwkoJghmV9fQxAOYDxQg1Oy', 'User Six', '1995-06-06', 'user6@example.com', 'image6.jpg', 'teacher', NOW(), NOW()),
('user7', '$2y$10$MkTlHqtPxnbOkZFG1FVl4.nRUaq5xsAL7DdElYZQa6Z1z0VrS51xm', 'User Seven', '1996-07-07', 'user7@example.com', 'image7.jpg', 'student', NOW(), NOW()),
('user8', '$2y$10$RCZ6yeb.8AQ6tW5pEcKNxetY.HvRqDDShj63bDMS/yzZFV84AOrGu', 'User Eight', '1997-08-08', 'user8@example.com', 'image8.jpg', 'teacher', NOW(), NOW()),
('user9', '$2y$10$Ub1U6ZaI2A0leE1byH/EJOcycuY8Ozg0fE8PwnjqTBBZ8XDX9ZGSK', 'User Nine', '1998-09-09', 'user9@example.com', 'image9.jpg', 'student', NOW(), NOW()),
('user10', '$2y$10$G7sH/RNcNSGmI3/V0g8q8uGlt4.8Rm7G0vOERjYQKwnOTQ2s4dKCG', 'User Ten', '1999-10-10', 'user10@example.com', 'image10.jpg', 'teacher', NOW(), NOW());

-- Thêm dữ liệu vào bảng teachers
INSERT INTO teachers (user_id, description, image, total_playlists, total_videos, total_likes, total_comments, created_at, updated_at) VALUES
(2, 'Experienced web developer', 'teacher1.jpg', 5, 20, 100, 50, NOW(), NOW()),
(4, 'Python expert', 'teacher2.jpg', 3, 15, 90, 40, NOW(), NOW()),
(6, 'JavaScript guru', 'teacher3.jpg', 4, 18, 110, 60, NOW(), NOW()),
(8, 'Java developer', 'teacher4.jpg', 2, 10, 70, 30, NOW(), NOW()),
(10, 'Fullstack developer', 'teacher5.jpg', 6, 25, 120, 80, NOW(), NOW());

-- Thêm dữ liệu vào bảng playlists
INSERT INTO playlists (teacher_id, title, image, created_at, updated_at) VALUES
(1, 'HTML Basics', 'playlist1.jpg', NOW(), NOW()),
(1, 'Advanced HTML', 'playlist2.jpg', NOW(), NOW()),
(2, 'CSS Basics', 'playlist3.jpg', NOW(), NOW()),
(2, 'Advanced CSS', 'playlist4.jpg', NOW(), NOW()),
(3, 'JavaScript Basics', 'playlist5.jpg', NOW(), NOW()),
(3, 'Advanced JavaScript', 'playlist6.jpg', NOW(), NOW()),
(4, 'Python Basics', 'playlist7.jpg', NOW(), NOW()),
(4, 'Advanced Python', 'playlist8.jpg', NOW(), NOW()),
(5, 'Java Basics', 'playlist9.jpg', NOW(), NOW()),
(5, 'Advanced Java', 'playlist10.jpg', NOW(), NOW());

-- Thêm dữ liệu vào bảng courses
INSERT INTO courses (title, image, description, teacher_id, created_at, updated_at) VALUES
('Web Development Course', 'course1.jpg', 'Learn the basics of web development', 1, NOW(), NOW()),
('Advanced Web Development', 'course2.jpg', 'Deep dive into web development', 2, NOW(), NOW()),
('Python for Beginners', 'course3.jpg', 'Introduction to Python programming', 3, NOW(), NOW()),
('Advanced Python', 'course4.jpg', 'Advanced concepts in Python programming', 4, NOW(), NOW()),
('JavaScript Essentials', 'course5.jpg', 'Learn the fundamentals of JavaScript', 5, NOW(), NOW()),
('Mastering JavaScript', 'course6.jpg', 'Advanced JavaScript techniques', 1, NOW(), NOW()),
('Java for Beginners', 'course7.jpg', 'Introduction to Java programming', 2, NOW(), NOW()),
('Advanced Java', 'course8.jpg', 'Deep dive into Java programming', 3, NOW(), NOW()),
('CSS from Scratch', 'course9.jpg', 'Learn CSS from the ground up', 4, NOW(), NOW()),
('Advanced CSS', 'course10.jpg', 'Advanced CSS techniques', 5, NOW(), NOW());

-- Thêm dữ liệu vào bảng videos
INSERT INTO videos (playlist_id, title, url, duration, created_at, updated_at) VALUES
(1, 'Introduction to HTML', 'http://example.com/video1', '00:10:00', NOW(), NOW()),
(1, 'HTML Tags', 'http://example.com/video2', '00:15:00', NOW(), NOW()),
(2, 'CSS Selectors', 'http://example.com/video3', '00:20:00', NOW(), NOW()),
(2, 'CSS Flexbox', 'http://example.com/video4', '00:25:00', NOW(), NOW()),
(3, 'JavaScript Basics', 'http://example.com/video5', '00:30:00', NOW(), NOW()),
(3, 'JavaScript Functions', 'http://example.com/video6', '00:35:00', NOW(), NOW()),
(4, 'Advanced JavaScript', 'http://example.com/video7', '00:40:00', NOW(), NOW()),
(4, 'JavaScript Promises', 'http://example.com/video8', '00:45:00', NOW(), NOW()),
(5, 'Introduction to Python', 'http://example.com/video9', '00:50:00', NOW(), NOW()),
(5, 'Python Data Types', 'http://example.com/video10', '00:55:00', NOW(), NOW());

-- Thêm dữ liệu vào bảng comments
INSERT INTO comments (user_id, video_id, content, created_at, updated_at) VALUES
(1, 1, 'Great video, very informative!', NOW(), NOW()),
(2, 1, 'Thanks for the detailed explanation!', NOW(), NOW()),
(3, 2, 'This helped me a lot, thank you!', NOW(), NOW()),
(4, 2, 'Awesome tutorial!', NOW(), NOW()),
(5, 3, 'Can you make more videos on this', NOW(), NOW());

use edu_onl;
DROP TABLE IF EXISTS users;
