pipeline {
    agent any
    stages {
        stage('Install') {
            steps {
                git branch: 'develop', url: 'https://github.com/Silent4Devs/SilentPage.git'
            }
        }
 
        stage('Laravel Pint') {
            steps {
                sh 'sudo docker compose exec php composer install --no-dev' // Asegura que Laravel Pint esté instalado
                sh 'sudo docker composer require --dev laravel/pint'
                sh './vendor/bin/pint --test' // Ejecuta Laravel Pint en modo test
            }
        }
 
        stage('Build') {
            steps {
                git branch: 'develop', url: 'https://github.com/Silent4Devs/SilentPage.git'
                sh 'composer install'
                sh 'cp .env.example .env'
                sh 'php artisan key:generate'
            }
        }
 
        stage('Test') {
            steps {
                sh './vendor/bin/phpunit'
            }
        }
 
        stage('Deploy via SSH') {
            steps {
                script {
                    sshagent(['/root/.ssh/id_rsa']) {
                        sh 'echo "Contenido de WORKSPACE:"'
                        sh 'ls -l $WORKSPACE'
                        sh 'scp -r $WORKSPACE/* desarrollo@192.168.9.53:/var/contenedor/silentpage'
                    }
                }
            }
        }
    }
}
