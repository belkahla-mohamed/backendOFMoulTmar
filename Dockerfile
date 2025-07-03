# استخدم صورة رسمية فيها PHP + Apache
FROM php:8.1-apache

# فعل mod_rewrite إذا كنت محتاجو (مثلاً للروترات أو htaccess)
RUN a2enmod rewrite

# نسخ جميع ملفات المشروع إلى مجلد السيرفر داخل الكونتينر
COPY . /var/www/html/

# تعيين الصلاحيات للمجلد
RUN chown -R www-data:www-data /var/www/html

# عرض البورت 80
EXPOSE 80
