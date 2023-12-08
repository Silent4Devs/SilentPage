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
                    echo 'saul test v2'
                    // sshagent(['/root/.ssh/id_rsa.pub']) {
                    //     sh 'scp -r $WORKSPACE/* desarrollo@192.168.9.78:/var/contenedor/tabantaj/'
                    // }
                }
            }
        }

    }
}
