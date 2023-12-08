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
                sshagent(['/root/.ssh/id_rsa.pub']) {
                    sh '''
                        ssh -o StrictHostKeyChecking=no desarrollo@192.168.9.53 "echo 'Connection successful'; ls -l /var/contenedor/silentpage/"
                        scp -o StrictHostKeyChecking=no -r $WORKSPACE/* desarrollo@192.168.9.53:/var/contenedor/silentpage/
                    '''
                }
            }

            }
        }

    }
}
