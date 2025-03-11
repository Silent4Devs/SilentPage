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
                    sh '''
                    sshpass -p "D3sarrollo.portal" ssh desarrollo@192.168.9.53 "
                        cd /var/contenedor/silentpage &&
                        echo 'D3sarrollo.portal' | sudo -S docker compose exec php composer require --dev laravel/pint &&
                        echo 'D3sarrollo.portal' | sudo -S docker compose exec php ./vendor/bin/pint --test &&
                        echo 'D3sarrollo.portal' | sudo -S docker compose exec php ./vendor/bin/pint --dirty --verbose &&
                        echo 'D3sarrollo.portal' | sudo -S docker compose exec -u root php ./vendor/bin/pint
                    "
                    '''
                    sh '''
                    sshpass -p "D3sarrollo.portal" scp -r $WORKSPACE/* desarrollo@192.168.9.53:/var/contenedor/silentpage
                    '''
                }
            }
        }
    }
}
