FROM httpd:2.4

COPY conf.d/* conf.d/
RUN echo "IncludeOptional conf.d/*.conf" >> /usr/local/apache2/conf/httpd.conf
