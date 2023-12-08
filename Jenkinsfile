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
                    echo 'saul test'
                }
            }
        }

    }
}
