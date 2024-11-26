# Usando uma imagem mais antiga do Debian com PHP 5.3
FROM debian:jessie

# Instalar dependências do sistema e PHP 5.3
RUN apt-get update && apt-get install -y \
    wget \
    curl \
    git \
    apache2 \
    libapache2-mod-php5 \
    php5 \
    php5-mysql \
    && apt-get clean

# Configurar o diretório de trabalho do Apache
WORKDIR /var/www/html

# Copiar todos os arquivos do seu projeto para o contêiner
COPY . /var/www/html

# Expor a porta 80 para o Apache
EXPOSE 80

# Iniciar o Apache
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
