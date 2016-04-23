#!/bin/bash
echo "Disabling locales acception from ssh clients"
sed -i 's/\(^\s*AcceptEnv LANG LC_\*\s*$\)/#\1/' /etc/ssh/sshd_config
service ssh restart

echo "Installing PHP"
apt-get install php5-common php5-cli -y

echo "Installing xdebug"
wget --no-verbose -P /tmp/xdebug/ https://bitbucket.org/polosat/packages/downloads/xdebug-2.3.2-ubuntu-trusty64.tar.bz2
tar xjf /tmp/xdebug/xdebug-2.3.2-ubuntu-trusty64.tar.bz2 -C /tmp/xdebug
install -m 644 -T /tmp/xdebug/xdebug-2.3.2.so /usr/lib/php5/20121212/xdebug.so
echo -e '\nzend_extension = /usr/lib/php5/20121212/xdebug.so\n' >> /etc/php5/mods-available/xdebug.ini
php5enmod xdebug
rm -r /tmp/xdebug

echo "Installing RabbitMQ"
apt-get install rabbitmq-server -y
rabbitmq-plugins enable rabbitmq_management
service rabbitmq-server restart

echo "Installing Composer"
wget --no-verbose -P /tmp/composer/ https://getcomposer.org/installer
php installer --install-dir=/usr/local/bin --filename=composer
rm -r /tmp/composer

echo "Composing vendor libraries"
composer ~/projects/bot

echo "Making the main script executable"
chmod +x ~/projects/bot/bot

