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
                       sh 'cat /root/.ssh/id_rsa'
                    sshagent(['/root/.ssh/id_rsa']) {
                        sh 'scp -r $WORKSPACE/* desarrollo@192.168.9.53:/var/contenedor/silentpage/'
                    }
                }
            }
        }

    }
}
