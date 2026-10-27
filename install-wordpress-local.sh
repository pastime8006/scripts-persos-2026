#!/bin/bash

set -e

# ============================================================
# INSTALLATION WORDPRESS LOCALHOST
#
# Utilisateur Linux : todd
#
# LAMP déjà installé
#
# MySQL / MariaDB
#   Utilisateur : root
#   Mot de passe : supergrass
#   Base        : wordpress
#
# WordPress
#   Utilisateur : paweb
#   Mot de passe : wxcv
#   Site        : myserver
#
# Installation :
#   /home/todd/myserver
#
# URL :
#   http://localhost/myserver
#
# ============================================================

GREEN="\033[0;32m"
RED="\033[0;31m"
YELLOW="\033[1;33m"
NC="\033[0m"

# ============================================================
# CONFIGURATION
# ============================================================

DB_NAME="wordpress"
DB_USER="root"
DB_PASSWORD="supergrass"

WP_ADMIN_USER="paweb"
WP_ADMIN_PASSWORD="wxcv"
WP_ADMIN_EMAIL="admin@localhost"

SITE_NAME="myserver"

WEB_ROOT="/home/todd/myserver"

APACHE_CONF="/etc/apache2/conf-available/myserver.conf"

# ============================================================
# VÉRIFICATION DE L'UTILISATEUR
# ============================================================

if [ "$USER" != "todd" ]; then
    echo
    echo -e "${YELLOW}⚠️ Le script est prévu pour être lancé avec l'utilisateur todd.${NC}"
    echo
    echo "Utilisateur actuel : $USER"
    echo
fi

# ============================================================
# SUDO
# ============================================================

echo
echo "=============================================="
echo "       INSTALLATION WORDPRESS LOCALHOST"
echo "=============================================="
echo

echo "Utilisateur Linux : $USER"
echo "Dossier WordPress : $WEB_ROOT"
echo

echo "==> Vérification des droits sudo..."

sudo -v

echo -e "${GREEN}✅ Droits sudo disponibles.${NC}"

# ============================================================
# VÉRIFICATION LAMP
# ============================================================

echo
echo "=============================================="
echo "          VÉRIFICATION DU SERVEUR"
echo "=============================================="
echo

if ! command -v apache2 >/dev/null 2>&1; then
    echo -e "${RED}❌ Apache n'est pas installé.${NC}"
    exit 1
fi

if ! command -v php >/dev/null 2>&1; then
    echo -e "${RED}❌ PHP n'est pas installé.${NC}"
    exit 1
fi

if ! command -v mysql >/dev/null 2>&1; then
    echo -e "${RED}❌ MariaDB/MySQL n'est pas installé.${NC}"
    exit 1
fi

echo -e "${GREEN}✅ Apache détecté${NC}"
echo -e "${GREEN}✅ PHP détecté${NC}"
echo -e "${GREEN}✅ MariaDB/MySQL détecté${NC}"

# ============================================================
# RÉCAPITULATIF
# ============================================================

echo
echo "=============================================="
echo "              CONFIGURATION"
echo "=============================================="
echo

echo "Base MySQL         : $DB_NAME"
echo "Utilisateur MySQL : $DB_USER"
echo "Mot de passe       : ********"
echo

echo "Site WordPress     : $SITE_NAME"
echo "Utilisateur WP     : $WP_ADMIN_USER"
echo "Mot de passe WP    : ********"
echo

echo "Dossier            : $WEB_ROOT"
echo "URL                : http://localhost/myserver"
echo

echo "FS_METHOD          : direct"

echo
echo "=============================================="
echo

read -r -p "Continuer l'installation ? [o/N] : " CONFIRM

if [[ ! "$CONFIRM" =~ ^[OoYy]$ ]]; then
    echo
    echo "Installation annulée."
    exit 0
fi

# ============================================================
# TEST MYSQL
# ============================================================

echo
echo "==> Test de connexion à MariaDB/MySQL..."

if ! mysql -u "$DB_USER" -p"$DB_PASSWORD" \
    -e "SELECT 1;" >/dev/null 2>&1; then

    echo
    echo -e "${RED}❌ Impossible de se connecter à MySQL.${NC}"
    echo
    echo "Utilisateur : $DB_USER"
    echo
    exit 1
fi

echo -e "${GREEN}✅ Connexion MySQL réussie.${NC}"

# ============================================================
# CRÉATION DE LA BASE
# ============================================================

echo
echo "==> Création de la base de données..."

mysql -u "$DB_USER" -p"$DB_PASSWORD" <<EOF

CREATE DATABASE IF NOT EXISTS \`$DB_NAME\`
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

FLUSH PRIVILEGES;

EOF

echo -e "${GREEN}✅ Base de données '$DB_NAME' créée.${NC}"

# ============================================================
# WP-CLI
# ============================================================

echo
echo "==> Vérification de WP-CLI..."

if ! command -v wp >/dev/null 2>&1; then

    echo "WP-CLI n'est pas installé."
    echo "Installation de WP-CLI..."

    curl -fsSL \
        https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
        -o /tmp/wp-cli.phar

    chmod +x /tmp/wp-cli.phar

    sudo mv /tmp/wp-cli.phar /usr/local/bin/wp

fi

echo -e "${GREEN}✅ WP-CLI disponible.${NC}"

# ============================================================
# PRÉPARATION DU DOSSIER
# ============================================================

echo
echo "==> Préparation du dossier..."

sudo mkdir -p "$WEB_ROOT"

# Si le dossier contient déjà quelque chose
if sudo find "$WEB_ROOT" -mindepth 1 -print -quit | grep -q .; then

    BACKUP_DIR="/home/todd/myserver-backup-$(date +%Y%m%d-%H%M%S)"

    echo
    echo -e "${YELLOW}⚠️ Le dossier contient déjà des fichiers.${NC}"
    echo
    echo "Sauvegarde vers : $BACKUP_DIR"

    sudo mv "$WEB_ROOT" "$BACKUP_DIR"

    sudo mkdir -p "$WEB_ROOT"

    echo -e "${GREEN}✅ Ancien dossier sauvegardé.${NC}"

fi

# ============================================================
# PERMISSIONS DU DOSSIER HOME
# ============================================================

echo
echo "==> Configuration de l'accès Apache au dossier..."

# Apache doit pouvoir traverser /home/todd
sudo chmod 711 /home/todd

# Le contenu du site sera géré par www-data
sudo chown -R www-data:www-data "$WEB_ROOT"

echo -e "${GREEN}✅ Accès configuré.${NC}"

# ============================================================
# TÉLÉCHARGEMENT WORDPRESS
# ============================================================

echo
echo "==> Téléchargement de WordPress..."

sudo -u www-data wp core download \
    --path="$WEB_ROOT" \
    --locale=fr_FR

echo -e "${GREEN}✅ WordPress téléchargé.${NC}"

# ============================================================
# WP-CONFIG
# ============================================================

echo
echo "==> Création de wp-config.php..."

sudo -u www-data wp config create \
    --path="$WEB_ROOT" \
    --dbname="$DB_NAME" \
    --dbuser="$DB_USER" \
    --dbpass="$DB_PASSWORD" \
    --dbhost="localhost" \
    --dbcharset="utf8mb4" \
    --skip-check

echo -e "${GREEN}✅ wp-config.php créé.${NC}"

# ============================================================
# FS_METHOD
# ============================================================

echo
echo "==> Ajout de FS_METHOD direct..."

sudo -u www-data wp config set \
    FS_METHOD \
    direct \
    --type=constant \
    --path="$WEB_ROOT"

echo -e "${GREEN}✅ define('FS_METHOD', 'direct'); ajouté.${NC}"

# ============================================================
# INSTALLATION WORDPRESS
# ============================================================

echo
echo "==> Installation de WordPress..."

sudo -u www-data wp core install \
    --path="$WEB_ROOT" \
    --url="http://localhost/myserver" \
    --title="$SITE_NAME" \
    --admin_user="$WP_ADMIN_USER" \
    --admin_password="$WP_ADMIN_PASSWORD" \
    --admin_email="$WP_ADMIN_EMAIL"

echo -e "${GREEN}✅ WordPress installé.${NC}"

# ============================================================
# CONFIGURATION APACHE
# ============================================================

echo
echo "==> Configuration d'Apache..."

sudo tee "$APACHE_CONF" > /dev/null <<EOF

<Directory /home/todd/myserver>

    AllowOverride All
    Require all granted
    Options FollowSymLinks

</Directory>

Alias /myserver /home/todd/myserver

EOF

# ============================================================
# ACTIVATION APACHE
# ============================================================

echo
echo "==> Activation de la configuration Apache..."

sudo a2enmod rewrite

sudo a2enconf myserver

# ============================================================
# VÉRIFICATION APACHE
# ============================================================

echo
echo "==> Vérification de la configuration Apache..."

sudo apache2ctl configtest

# ============================================================
# RECHARGEMENT APACHE
# ============================================================

echo
echo "==> Rechargement d'Apache..."

sudo systemctl reload apache2

echo -e "${GREEN}✅ Apache rechargé.${NC}"

# ============================================================
# PERMISSIONS WORDPRESS
# ============================================================

echo
echo "==> Configuration des permissions WordPress..."

sudo chown -R www-data:www-data "$WEB_ROOT"

sudo find "$WEB_ROOT" \
    -type d \
    -exec chmod 755 {} \;

sudo find "$WEB_ROOT" \
    -type f \
    -exec chmod 644 {} \;

sudo chmod 640 "$WEB_ROOT/wp-config.php"

# ============================================================
# VÉRIFICATION APACHE
# ============================================================

echo
echo "==> Vérification d'Apache..."

if sudo systemctl is-active --quiet apache2; then
    echo -e "${GREEN}✅ Apache fonctionne.${NC}"
else
    echo -e "${RED}❌ Apache ne fonctionne pas.${NC}"
    exit 1
fi

# ============================================================
# VÉRIFICATION MYSQL
# ============================================================

echo
echo "==> Vérification de MariaDB/MySQL..."

if sudo systemctl is-active --quiet mariadb; then

    echo -e "${GREEN}✅ MariaDB fonctionne.${NC}"

elif sudo systemctl is-active --quiet mysql; then

    echo -e "${GREEN}✅ MySQL fonctionne.${NC}"

else

    echo -e "${RED}❌ MariaDB/MySQL ne fonctionne pas.${NC}"
    exit 1

fi

# ============================================================
# FIN
# ============================================================

clear

echo
echo "=============================================="
echo "       WORDPRESS EST INSTALLÉ !"
echo "=============================================="
echo

echo "🌐 Site :"
echo
echo "   http://localhost/myserver"
echo

echo "🔐 Administration :"
echo
echo "   http://localhost/myserver/wp-admin"
echo

echo "=============================================="
echo "          COMPTE WORDPRESS"
echo "=============================================="
echo

echo "Utilisateur : paweb"
echo "Mot de passe : wxcv"
echo

echo "=============================================="
echo "          BASE DE DONNÉES"
echo "=============================================="
echo

echo "Base         : wordpress"
echo "Utilisateur  : root"
echo "Mot de passe : supergrass"
echo "Serveur      : localhost"
echo

echo "=============================================="
echo

echo "📁 Installation :"
echo
echo "   /home/todd/myserver"
echo

echo "=============================================="
echo

echo "FS_METHOD : direct"

echo
echo "=============================================="
echo
echo -e "${GREEN}Installation terminée avec succès !${NC}"
echo