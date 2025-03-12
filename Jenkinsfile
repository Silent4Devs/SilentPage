pipeline {
    agent any
    environment {
        DEPLOY_SERVER = '192.168.9.53'
        DEPLOY_PATH = '/var/contenedor/silentpage'
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
                    withCredentials([
                        usernamePassword(credentialsId: 'Silent-Page', usernameVariable: 'SSH_USER', passwordVariable: 'SSH_PASS'),
                        string(credentialsId: 'GITHUB_PAT_TOKEN', variable: 'GITHUB_TOKEN')  
                    ]) {
                        // Conectar al servidor y ejecutar comandos
                        sh """
                        sshpass -p '$SSH_PASS' ssh -o StrictHostKeyChecking=no $SSH_USER@$DEPLOY_SERVER << 'EOF'
                            cd $DEPLOY_PATH 
                            echo '$SSH_PASS' | sudo -S chmod -R 777 $DEPLOY_PATH
                            echo '$SSH_PASS' | sudo -S git pull https://jonathansilent:$GITHUB_TOKEN@github.com/Silent4Devs/SilentPage.git main
                            echo '$SSH_PASS' | sudo -S chmod -R 777 $DEPLOY_PATH
                            
                            # Asegurar que los contenedores están corriendo
                            echo '$SSH_PASS' | sudo -S docker compose up -d
                            
                            # Esperar un poco para evitar errores de ejecución
                            sleep 5
                            
                            # Instalar y ejecutar Laravel Pint dentro del contenedor Docker
                            echo '$SSH_PASS' | sudo -S docker compose exec php composer require --dev laravel/pint
                            echo '$SSH_PASS' | sudo -S docker compose exec php ./vendor/bin/pint --test
                            echo '$SSH_PASS' | sudo -S docker compose exec php ./vendor/bin/pint
                        """

                        // pull 
                        sh """
                        sshpass -p '$SSH_PASS' ssh -F /tmp/ssh_config $SSH_USER@$DEPLOY_SERVER \
                        "cd $DEPLOY_PATH && echo '$SSH_PASS' | sudo -S git pull"
                        """
                    }
                }
            }
        }
    }
}
