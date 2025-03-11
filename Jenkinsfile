pipeline {
    agent any
    stages {
        stage('Install') {
            steps {
                git branch: 'develop', url: 'https://github.com/Silent4Devs/SilentPage.git'
            }
        }

        stage('Deploy via SSH') {
            steps {
                script {
                    sh 'sshpass -p "D3sarrollo.portal" ssh desarrollo@192.168.9.53 "cd /var/contenedor/silentpage && sudo -S docker compose exec php composer require --dev laravel/pint"'
                    sh 'sshpass -p "D3sarrollo.portal" ssh desarrollo@192.168.9.53 "cd /var/contenedor/silentpage && sudo -S docker compose exec php ./vendor/bin/pint --test"'
                    sh 'sshpass -p "D3sarrollo.portal" scp -r $WORKSPACE/* desarrollo@192.168.9.53:/var/contenedor/silentpage'
                }
            }
        }
    }
}
