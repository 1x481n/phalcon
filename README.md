# Requirement
- PHP7.4
- pecl
- composer

# Install

### Install phalcon extension

```zsh
pecl channel-update pecl.php.net 
pecl install psr
pecl install pecl phalcon-4.1.2
```
### Configure php.ini

- edit php.ini
```ini
extension=psr.so
extension=phalcon.so
```
- check php.ini
```shell
php --ini
```

### Install phalcon-devtools

```zsh
mkdir -p $PROJECTS_HOME/php/phalcon/dev-tools
cd $PROJECTS_HOME/php/phalcon/dev-tools
composer require phalcon/devtools --dev
```

edit ~/.zshrc

```
alias phalcon="$PROJECTS_HOME/php/phalcon/dev-tools/vendor/bin/phalcon"
```

reload .zshrc settings

```zsh
source ~/.zshrc
```

### Initialize the project

```zsh
cd $PROJECTS_HOME/php/phalcon
phalcon project demo
```

### Run Service

```zsh
cd $PROJECTS_HOME/php/phalcon/demo
phalcon serve
```









