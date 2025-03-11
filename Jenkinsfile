pipeline {
    agent any
    environment {
        SSH_PASSWORD = credentials('D3sarrollo.portal') // Guardar la contraseña en una credencial de Jenkins
    }
    stages {
        stage('Install') {
            steps {
                git branch: 'develop', url: 'https://github.com/Silent4Devs/SilentPage.git'
            }
        }

        stage('Deploy via SSH') {
            steps {
                script {
                    sh """
                    sshpass -p "$SSH_PASSWORD" ssh desarrollo@192.168.9.53 \\
                    "cd /var/contenedor/silentpage && echo '$SSH_PASSWORD' | sudo -S docker compose exec php composer require --dev laravel/pint"
                    """
                    sh """
                    sshpass -p "$SSH_PASSWORD" ssh desarrollo@192.168.9.53 \\
                    "cd /var/contenedor/silentpage && echo '$SSH_PASSWORD' | sudo -S docker compose exec php ./vendor/bin/pint --test"
                    """
                    sh """
                    sshpass -p "$SSH_PASSWORD" scp -r $WORKSPACE/* desarrollo@192.168.9.53:/var/contenedor/silentpage
                    """
                }
            }
        }
    }
}
