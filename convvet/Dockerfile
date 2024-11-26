# Usando uma imagem Ubuntu 14.04 que tem suporte para PHP 5.3
FROM ubuntu:14.04

# Atualizar o repositório de pacotes
RUN apt-get update

# Instalar pacotes necessários e o PHP 5.3
RUN apt-get install -y \
    wget \
    curl \
    git \
    apache2 \
    php5 \
    php5-mysql \
    libapache2-mod-php5 \
    && apt-get clean

# Copiar os arquivos do seu projeto para o Apache
COPY . /var/www/html

# Configurar o diretório de trabalho do Apache
WORKDIR /var/www/html

# Expor a porta 80 para o Apache
EXPOSE 80

# Iniciar o Apache
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
