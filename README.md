# Dockerize-a-PHP-MySQL-Web-Application

## Hướng dẫn chạy dự án của chúng tôi

### Bước 1: Tải và cài đặt Docker Desktop
- Link tải: [Docker Desktop](https://www.docker.com/products/docker-desktop/)

### Bước 2: Tạo tài khoản GitHub
- Để có thể pull code từ dự án về, bạn cần có tài khoản GitHub.
- Hướng dẫn tạo tài khoản GitHub: [Xem video hướng dẫn](https://www.youtube.com/watch?v=v_jmeAc_jzA)

### Bước 3: Pull toàn bộ dự án về
- Mở terminal và chạy lệnh sau để pull dự án:
git clone https://github.com/PSPSENKO68/Dockerize-a-PHP-MySQL-Web-Application.git

### Bước 4: Chạy dự án bằng Docker
- cd vào thư mục dự án:
cd Dockerize-a-PHP-MySQL-Web-Application
- Xây dựng và khởi động các container bằng cách chạy các lệnh sau:
docker-compose build
docker-compose up -d

###Bước 5: Truy cập ứng dụng
- Mở trình duyệt và truy cập vào địa chỉ: http://localhost:8080
  
