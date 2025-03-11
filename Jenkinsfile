pipeline {
    agent any
    stages {
        stage('Connect SSH') {
            steps {
                script {
                    sh 'sshpass -p "D3sarrollo.portal" ssh desarrollo@192.168.9.53 "echo Conexión exitosa"'
                }
            }
        }
    }
}
