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
                    sshagent(['/root/.ssh/id_rsa']) {
                        sh 'echo "Contenido de WORKSPACE:"'
                        sh 'ls -l $WORKSPACE'
                        sh 'ssh desarrollo@192.168.9.53 "cd /var/contenedor/silentpage && docker exec php composer require --dev laravel/pint"'
                        sh 'ssh desarrollo@192.168.9.53 "cd /var/contenedor/silentpage && docker exec php ./vendor/bin/pint --test"'
                        sh 'scp -r $WORKSPACE/* desarrollo@192.168.9.53:/var/contenedor/silentpage'
                    }
         }
    }
}



    }
}
